<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$rooms = new FieldsBuilder('rooms');

$rooms
    ->addText('title', ['label' => 'Tytuł'])
    ->addRelationship('rooms', ['label'=>'Pokoje', 'post_type'=>'pokoje']);
return $rooms;
