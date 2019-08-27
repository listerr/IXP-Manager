<?php

namespace IXP\Http\Requests;

/*
 * Copyright (C) 2009 - 2019 Internet Neutral Exchange Association Company Limited By Guarantee.
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



use Auth;

use Entities\{
    CoreBundle as CoreBundleEntity
};

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Validator;

use IXP\Utils\View\Alert\Alert;
use IXP\Utils\View\Alert\Container as AlertContainer;


class StoreCoreBundle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // middleware ensures superuser access only so always authorised here:
        return Auth::getUser()->isSuperUser();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $arrayCb = [
            'customer'                  => 'required|integer|exists:Entities\Customer,id',
            'description'               => 'required|string|max:255',
            'graph-title'               => 'required|string|max:255',
            'cost'                      => 'nullable|integer',
            'preference'                => 'nullable|integer',
            'type'                      => 'required|integer|in:' . implode( ',', array_keys( CoreBundleEntity::$TYPES ) ),
            'subnet'                    => ( $this->input('type') == CoreBundleEntity::TYPE_L3_LAG ) ? "required" : "nullable",

        ];

        $arrayVi = [
            'mtu'                       => 'required|integer|min:0|max:64000',
            'vi-name-a'                 => ( $this->input('type') == CoreBundleEntity::TYPE_L2_LAG || $this->input('type') == CoreBundleEntity::TYPE_L3_LAG) ? "required|string|max:255" : "nullable",
            'vi-name-b'                 => ( $this->input('type') == CoreBundleEntity::TYPE_L2_LAG || $this->input('type') == CoreBundleEntity::TYPE_L3_LAG) ? "required|string|max:255" : "nullable",
            'vi-channel-number-a'       => ( $this->input('type') == CoreBundleEntity::TYPE_L2_LAG || $this->input('type') == CoreBundleEntity::TYPE_L3_LAG) ? "required|integer|min:0" : "nullable",
            'vi-channel-number-b'       => ( $this->input('type') == CoreBundleEntity::TYPE_L2_LAG || $this->input('type') == CoreBundleEntity::TYPE_L3_LAG) ? "required|integer|min:0" : "nullable"
        ];

        $arrayCl = [];
        for( $i = 1; $i <= $this->input( 'nb-core-links' ); $i++ ){
            $arrayCl = [
                "sp-a-{$i}" => 'required|integer|exists:Entities\SwitchPort,id',
                "sp-b-{$i}" => 'required|integer|exists:Entities\SwitchPort,id',
            ];
        }

        $result = $this->input( 'cb' )  ? $arrayCb : array_merge( $arrayCb, $arrayVi) ;

        return array_merge( $result, $arrayCl );
    }

}