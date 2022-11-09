<?php

return [
    'baseModel' => \App\Modules\City\Models\City::query(),
    'dataModel' => \App\Modules\City\Models\CityData::query(),
    'parentModel' => \App\Modules\Country\Models\Country::query(),
    'parentDataModel' => \App\Modules\Country\Models\CountryData::query(),
    'allow_edit' => true,
    'base_route' => route('dashboard.city.index'),
    'route' => 'city',
    'form' => 'admin.components.city.form',
    'title' => _i('Cities'),
    'createTitle' => _i('Create City'),
    'editTitle' => _i('Edit City'),
    'columns' => [
        'id' => [
            'label' => _i('ID'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => false,
            'model' => 'base',
        ],
        'title' => [
            'label' => _i('Title'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'data',
        ],
        'country_id' => [
            'label' => _i('Country'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'parentData',
        ],
        'status' => [
            'label' => _i('Status'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'base',
        ],
        'lat' => [
            'label' => _i('Latitude'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'base',
        ],
        'lng' => [
            'label' => _i('Longitude'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'base',
        ],
        'created_at' => [
            'label' => _i('Created At'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => false,
            'model' => 'base',
        ],
        'action' => [
            'label' => _i('Action'),
            'type' => 'action',
            'searchable' => false,
            'sortable' => false,
            'editable' => false,
            'model' => 'action',
            'data' => [
                'edit' => 'admin.components.buttons.edit',
                'delete' => 'admin.components.buttons.delete',
            ],
        ],
    ],
];
