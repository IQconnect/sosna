<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$oferty = new FieldsBuilder('foods', ['label'=>'Oferta gastronomiczna']);

$oferty
    ->addText('title', ['label' => 'Tytuł'])
    ->addRelationship('food', ['label'=>'Pokoje', 'post_type'=>'oferty']);
return $oferty;
