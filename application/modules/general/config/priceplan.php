<?php
/**
 * General priceplan.php konfigurācijas fails.
 */

if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed'); 


$config['general_prices_sms']['lv'] = array(
    
    'donate' => array(
        '15' => '0.15',
    ),
    
);


/**
 * Cenas formātam jabūt obligāti ar punktu!
 * Piemērs:
 * '2.00' => '2.00',
 */
$config['general_prices_ibank']['lv'] = array(
    
    'donate' => array(
        '1.00' => '1.00',
        '2.00' => '2.00',
        '3.00' => '3.00',
        '4.00' => '4.00',
        '5.00' => '5.00',
        '7.00' => '7.00',
        '10.00' => '10.00',
        '20.00' => '20.00',
        '50.00' => '50.00',
    ),
    
);


/**
 * Cenas formātam jabūt obligāti ar punktu!
 * Cenu valūta: EUR
 * Piemērs:
 * '2.00' => '2.00',
 */
$config['general_prices_paypal']['eu'] = array(
    
    'donate' => array(
        '1.00' => '1.00',
        '2.00' => '2.00',
        '3.00' => '3.00',
        '4.00' => '4.00',
        '5.00' => '5.00',
        '7.00' => '7.00',
        '10.00' => '10.00',
        '20.00' => '20.00',
        '50.00' => '50.00',
    ),
    
);