<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$gallery = new FieldsBuilder('gallery', ['label'=>'Galeria']);

$gallery
    ->addGallery('galeria', ['label' => 'Galeria']);
return $gallery;
