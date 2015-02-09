<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | DEFAULT CONNECTION
    |--------------------------------------------------------------------------
    |
    | Your Twilio default connections which will be used.
    |
    */

    'default' => 'twilio',

    'connections' => array(

        'twilio' => array(

            /*
            |--------------------------------------------------------------------------
            | SID
            |--------------------------------------------------------------------------
            |
            | Your Twilio Account SID #
            |
            */

            'sid'    => '',

            /*
            |--------------------------------------------------------------------------
            | Access Token
            |--------------------------------------------------------------------------
            |
            | Access token that can be found in your Twilio dashboard
            |
            */
            'token'  => '',

            /*
            |--------------------------------------------------------------------------
            | From Number
            |--------------------------------------------------------------------------
            |
            | The Phone number registered with Twilio that your SMS & Calls will come from
            |
            */
            'from'   => '',
        )
    )
);