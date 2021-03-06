<?php
/**
 * Amx priceplan.php configuration file.
 */

if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed'); 


$config['amx_prices_sms']['lv'] = array(
    
    'unban' => array(
        '200' => '200',
    ),
    
    'nickname' => array(
        '50' => '60',
        '95' => '90',
        '200' => '120',
        '400' => '240',
    ),
    
    'slot' => array(
        '95' => '60',
        '200' => '90',
        '300' => '120',
        '500' => '240',
    ),
    
    'access' => array(
        '95' => '60',
        '200' => '90',
        '300' => '120',
        '500' => '240',
    ),
    
    'vip' => array(
        '95' => '60',
        '200' => '90',
        '300' => '120',
        '500' => '240',
    ),
    
    'accessvip' => array(
        '95' => '60',
        '200' => '90',
        '300' => '120',
        '500' => '240',
    ),
    
);


/**
 * Cenas formātam jabūt obligāti ar punktu!
 * Piemērs:
 * '2.00' => '60',
 */
$config['amx_prices_ibank']['lv'] = array(
    
    'unban' => array(
        '2.00' => '200',
    ),
    
    'nickname' => array(
        '1.00' => '100',
        '2.00' => '120',
        '4.00' => '240',
    ),
    
    'slot' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'access' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'vip' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'accessvip' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
);


/**
 * Cenas formātam jabūt obligāti ar punktu!
 * Cenu valūta: EUR
 * Piemērs:
 * '2.00' => '60',
 */
$config['amx_prices_paypal']['eu'] = array(
    
    'unban' => array(
        '2.00' => '200',
    ),
    
    'nickname' => array(
        '1.00' => '100',
        '2.00' => '120',
        '4.00' => '240',
    ),
    
    'slot' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'access' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'vip' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
    'accessvip' => array(
        '1.00' => '60',
        '2.00' => '90',
        '3.00' => '120',
        '5.00' => '240',
    ),
    
);