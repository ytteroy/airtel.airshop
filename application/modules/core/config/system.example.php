<?php
/**
 * Core system.php konfigurācijas fails.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/**
 * Valūtu nosaukumi konkrētajās valstīs
 */
$config['currency'] = array(
    'lv' => 'EUR',
    'lt' => 'EUR',
    'ee' => 'EUR',
    
    // Temp fix.
    'eu' => 'EUR',
);


/**
 * @todo Nomainīt šo array ar pieprasījumu pie mūsu API servera
 */
$config['countries'] = array (
    'lv' => 'Latvia'
);


/**
 * API server address
 */
$config['api_url'] = 'https://sys.airtel.lv/';


/**
 * Payment method names
 */
$config['paymethod_names'] = array(
    'sms' => 'SMS',
    'paypal' => 'Payhub',
);


/**
 * Wizard form attributes
 */
$config['wizard_attr'] = array(
    'id' => 'validate_wizard', 
    'class' => 'form-horizontal well', 
    'autocomplete' => 'off'
);


/**
 * Fields for payment type: SMS
 */
$config['fields_sms'] = array(
    
    'countries' => array(
        'label' => 'Valsts',
        'type' => 'dropdown',
        'fill' => 'mandatory',
        'wizard_step' => 2,
        'php_validation' => 'xss_clean|alpha',
        'options' => 'class="chosen"',
        'value' => set_value('countries'),
    ),
    
    'prices_sms' => array(
        'label' => 'Cena',
        'type' => 'dropdown',
        'fill' => 'mandatory',
        'wizard_step' => 2,
        'php_validation' => 'numeric|xss_clean',
        'options' => 'id="prices_sms"',
        //'value' => set_value('prices_sms'),
        'value' => '',
    ),
    
    'smscode' => array(
        'label' => 'Atslēgas kods',
        'type' => 'input',
        'fill' => 'mandatory',
        'wizard_step' => 2,
        'ajax_validation' => 'required digits code',
        'php_validation' => 'trim|required|exact_length[9]|numeric|xss_clean',
        'options' => array(
            'name' => 'smscode',
            'value' => '',
            'maxlength' => '9',
            'minlength' => '9',
        ),
    ),  
);

/**
 * Fields for payment type: Paypal
 */
$config['fields_paypal'] = array(
    
    'prices_paypal' => array(
        'label' => 'Cena',
        'type' => 'dropdown',
        'fill' => 'mandatory',
        'wizard_step' => 2,
        'php_validation' => 'xss_clean',
        'options' => 'id="prices_paypal"',
        'value' => set_value('prices_paypal'),
    ),
    
    'paypalcode' => array(
        'label' => 'Atslēgas kods',
        'type' => 'input',
        'fill' => 'mandatory',
        'wizard_step' => 2,
        'ajax_validation' => 'required digits code',
        'php_validation' => 'trim|required|xss_clean|numeric|exact_length[9]',
        'options' => array(
            'name' => 'paypalcode',
            'value' => '',
            'maxlength' => '9',
            'minlength' => '9',
        ),
    ),  
);