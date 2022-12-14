<?php

return [
    'baseModel' => \App\Modules\BlogCategory\Models\BlogCategory::query(),
    'dataModel' => \App\Modules\BlogCategory\Models\BlogCategoryData::query(),
    'allow_edit' => true,
    'base_route' => route('dashboard.blog-category.index'),
    'route' => 'blog-category',
    'form' => 'admin.components.blog-category.form',
    'title' => _i('Blog Categories'),
    'createTitle' => _i('Create Blog Category'),
    'editTitle' => _i('Edit Blog Category'),
    'uploads' => \App\Bll\Constants::BlogCategoryPath,
    'columns' => [
        'id' => [
            'label' => _i('ID'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => false,
            'model' => 'base',
        ],
        'image' => [
            'label' => _i('Image'),
            'type' => 'image',
            'searchable' => false,
            'sortable' => false,
            'editable' => true,
            'model' => 'base',
        ],
        'slug' => [
            'label' => _i('Slug'),
            'type' => 'text',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
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
        'description' => [
            'label' => _i('Description'),
            'type' => 'description',
            'searchable' => true,
            'sortable' => true,
            'editable' => true,
            'model' => 'data',
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
            'label' => _i('Options'),
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
    'validation' => [
        'rules' => [
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255|min:3',
            'image' => 'required|image|mimetypes:image/jpeg,image/png,image/gif,image/jpg',
            'lang_id' => 'required|integer',
        ],
        'messages' => [
            'title.required' => _i('Title is required'),
            'description.required' => _i('Description is required'),
            'image.required' => _i('Image is required'),
            'image.image' => _i('Image is not valid'),
        ]
    ]
];
