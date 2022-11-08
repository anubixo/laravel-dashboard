<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Modules\Admin\Models\Country\Country;
use App\Modules\Admin\Controllers\DashboardController;

class CountryController extends DashboardController
{
    public function __construct()
    {
        parent::$model = Country::query();
        parent::$dataModel = Country::query();
        parent::$columns = [
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
            'code' => [
                'label' => _i('Code'),
                'type' => 'text',
                'searchable' => true,
                'sortable' => true,
                'editable' => true,
                'model' => 'base',
            ],
            'dialing_code' => [
                'label' => _i('Phone Code'),
                'type' => 'text',
                'searchable' => true,
                'sortable' => true,
                'editable' => true,
                'model' => 'base',
            ],
            'status' => [
                'label' => _i('Status'),
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
            ],
        ];
        parent::__construct();
    }

    protected function index(Request $request, $pageTitle = null)
    {
        $pageTitle = _i('Countries');
        return parent::index($request, $pageTitle);
    }

    protected function create(Request $request)
    {
        return parent::create($request);
    }

    protected function store(Request $request)
    {
    }

    protected function show(Request $request)
    {
        return parent::show($request);
    }

    protected function edit(Request $request)
    {
        return parent::edit($request);
    }

    protected function update(Request $request)
    {
    }

    protected function destroy(Request $request)
    {
        return parent::destroy($request);
    }

    protected function restore(Request $request)
    {
        return parent::restore($request);
    }

    protected function forceDelete(Request $request)
    {
        return parent::forceDelete($request);
    }

    protected function getTranslation(Request $request)
    {
        return parent::getTranslation($request);
    }

    protected function setTranslation(Request $request)
    {
        return parent::setTranslation($request);
    }
}