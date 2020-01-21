<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addGallery('hero');
    
return $hero;