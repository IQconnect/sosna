<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$rooms = new FieldsBuilder('rooms');

$rooms
    ->addText('title', ['label' => 'Tytuł'])
    ->addTextarea('content', ['label' => 'Treść'])
    ->addRelationship('rooms', ['label'=>'Pokoje', 'post_type'=>'pokoje']);
return $rooms;
