<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex = new FieldsBuilder('flex');

$flex
    ->addWysiwyg('content', ['label'=>'Treść'])
    ->addImage('img1', ['label'=>'Zdjęcie główne', 'wrapper'=>['width'=>'33%']])
    ->addImage('img2', ['label'=>'Zdjęcie w tle', 'wrapper'=>['width'=>'33%']])
;
return $flex;