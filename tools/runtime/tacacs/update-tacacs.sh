#! /usr/bin/env bash
#
# Copyright (C) 2009 - 2019 Internet Neutral Exchange Association Company Limited By Guarantee.
# All Rights Reserved.
#
# This file is part of IXP Manager.
#
# IXP Manager is free software: you can redistribute it and/or modify it
# under the terms of the GNU General Public License as published by the Free
# Software Foundation, version 2.0 of the License.
#
# IXP Manager is distributed in the hope that it will be useful, but WITHOUT
# ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
# FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
# more details.
#
# You should have received a copy of the GNU General Public License v2.0
# along with IXP Manager.  If not, see:
#
# http://www.gnu.org/licenses/gpl-2.0.html

# Example script for updating TACACS configuration from IXP Manager
#
# **ALTER FOR YOUR OWN ENVIRONMENT**

# See: https://docs.ixpmanager.org/latest/features/tacacs/

# Target configuration file:
DEST="/usr/local/etc/tac_plus.conf"

KEY="your-ixp-manager-api-key"
URL="https://ixp.example.com/api/v4/user/formatted"
USERS="alice,joe,mike,mary"

# paths to utilities / init.d scripts
CURL="/usr/local/bin/curl"
TACACS="/usr/local/sbin/tac_plus"
TACACSRC="/usr/local/etc/rc.d/tac_plus"

# path to this script:
pushd `dirname $0` > /dev/null
SCRIPTPATH=`pwd`
popd > /dev/null

# Header config for your TACACS file:
cat >${DEST}.$$ <<END_CONF
#
# IXP Manager TACACS+ Config file
#
# Generated by ${SCRIPTPATH}/$(basename $0) at $(date)
#

# You TACACS key:
key = "soopersecret"

accounting file = /var/log/tac_plus/tac_plus.log

END_CONF


# Now pull users from IXP Manager:

cmd="${CURL} --fail -s --data \"bcrypt=2a&users=${USERS}\" -X POST \
    -H \"Content-Type: application/x-www-form-urlencoded\"         \
    -H \"X-IXP-Manager-API-Key: ${KEY}\" ${URL} >>${DEST}.$$"
eval $cmd

if [[ $? -ne 0 ]]; then
    echo "ERROR: non-zero return from API call to update TACACS+ config file"
    rm -f ${DEST}.$$
    exit
fi


# Footer config for your TACACS file:
cat >>${DEST}.$$ <<END_CONF

# config for group 'admin'
group = admin {
        default service = permit
        service = exec {
                priv-lvl=15
        }
}

# RANCID user for RANCID / Oxidized scripts:
user = rancid {
    # ...
}

END_CONF

# Has the config file changed?
cat ${DEST}    | egrep -v '^#.*$' >${DEST}.filtered
cat ${DEST}.$$ | egrep -v '^#.*$' >${DEST}.$$.filtered

diff ${DEST}.filtered ${DEST}.$$.filtered >/dev/null
DIFF=$?

rm -f  ${DEST}.filtered ${DEST}.$$.filtered

if [[ $DIFF -eq 0 ]]; then
    rm -f ${DEST}.$$
    exit 0;
fi

# It has - let's make sure the new one parses okay:
$TACACS -P  -C ${DEST}.$$ &>/dev/null

if [[ $? -ne 0 ]]; then
    echo "ERROR: non-zero return from config check / parse on TACACS+ config file"
    rm -f ${DEST}.$$
    exit
fi

mv ${DEST}.$$ ${DEST}

# Parsed okay - get PID for tac_plus and have it reload the config (or else start it):
PID=$( ps -ax | grep tac_plus | grep -v grep | awk '{print $1}' )

if [[ -n $PID ]]; then
    # reload the config
    kill -s SIGUSR1 $PID
    exit 0
fi

# not running?
$TACACSRC stop  >/dev/null
$TACACSRC start >/dev/null
