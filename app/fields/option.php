<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');
  
$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%']])
        ->addImage('sygnet', ['wrapper'=>['width'=>'33%']])
        ->addImage('logo-madeby', ['label'=>'Wykonanie logo','wrapper'=>['width'=>'33%']])
    ;
        
return $option_page;