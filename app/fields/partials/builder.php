<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.movie'))
            ->addLayout('contact')
            ->addLayout(get_field_partial('components.rooms'))
            ->addLayout(get_field_partial('components.food'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout('map')
            ->addLayout('content')
    ;
return $builder;
