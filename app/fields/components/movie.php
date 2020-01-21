<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$movie = new FieldsBuilder('movie');

$movie
    ->addUrl('movie', ['label' => "Link do filmu"])
    ->addImage('img1', ['label' => "img1", 'wrapper'=>['width'=>'50%']])
    ->addImage('img2', ['label' => "img2", 'wrapper'=>['width'=>'50%']]);

return $movie;
