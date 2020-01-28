<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$gallery = new FieldsBuilder('gallery', ['label'=>'Galeria']);

$gallery
    ->addSelect('type', ['label' => 'Typ'])
        ->addchoice('full')
        ->addchoice('small')
    ->addGallery('galeria', ['label' => 'Galeria'])
    ;
return $gallery;
