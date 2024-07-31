<?php

namespace IXP\Console\Commands\Irrdb;

/*
 * Copyright (C) 2009 - 2020 Internet Neutral Exchange Association Company Limited By Guarantee.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

use Exception;
use IXP\Events\User\UserWarning as UserWarningEvent;
use IXP\Mail\User\UserWarning;
use IXP\Tasks\Irrdb\UpdatePrefixDb as UpdatePrefixDbTask;
use Mail;

/**
 * Artisan command to update the IRRDB prefix database
 *
 * @author     Barry O'Donovan <barry@islandbridgenetworks.ie>
 * @author     Yann Robin      <yann@islandbridgenetworks.ie>
 * @author     Laszlo Kiss     <laszlo@islandbridgenetworks.ie>
 * @category   Irrdb
 * @package    IXP\Console\Commands
 * @copyright  Copyright (C) 2009 - 2020 Internet Neutral Exchange Association Company Limited By Guarantee
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL V2.0
 */
class UpdatePrefixDb extends UpdateDb
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'irrdb:update-prefix-db
                        {customer? : Customer ASN, ID or shortname (in that order). Otherwise all customers.}
                        {--no-alert-email : On set it will not send alert email on error}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the IRRDB prefix database for all customers (or a given customer by ID/shortname)';

    /**
     * Execute the console command.
     *
     * @return int
     *
     * @throws
     */
    public function handle(): int
    {
        if( !$this->setupChecks() ) {
            return -99;
        }

        $warningRecipient = [[ 'name' => config('mail.alerts_recipient.name'), 'email' => config('mail.alerts_recipient.address') ]];
        $warningMail = true;
        if($this->option('no-alert-email')) {
            $warningMail = false;
        }

        $customers = $this->resolveCustomers();

        foreach( $customers as $c ) {
            try {
                $task = new UpdatePrefixDbTask( $c );
            } catch( Exception $e ) {
                $eMessage = $e->getMessage();
                $this->error( "IRRDB ASN update failed for {$c->name}/AS{$c->autsys}" );
                $this->error( $eMessage );
                $this->info( "Continuing to next customer...");

                if( $warningMail ) {
                    $e = new UserWarningEvent("IRRDB prefix update failed for {$c->name}/AS{$c->autsys}", $eMessage);
                    Mail::to($warningRecipient)->send(new UserWarning($e));
                }
                continue;
            }

            $this->printResults( $c, $task->update(), 'prefix' );
        }


        if( count( $customers ) > 1 && $this->isVerbosityVerbose() ) {
            $this->info( "Total time for net/database/processing: "
                . sprintf( "%0.6f/", $this->netTime )
                . sprintf( "%0.6f/", $this->dbTime )
                . sprintf( "%0.6f (secs)", $this->procTime )
            );
        }

        return 0;
    }
}