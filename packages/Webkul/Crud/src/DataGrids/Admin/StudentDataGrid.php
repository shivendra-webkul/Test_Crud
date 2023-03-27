<?php

namespace Webkul\Crud\DataGrids\Admin;

use DB;
use Webkul\Ui\DataGrid\DataGrid;

/**
 * Order DataGrid Class
 *
 * @author Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class StudentDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('students')
            ->select('id')
            ->addSelect('id', 'name', 'phone_number', 'email', 'gender', 'date_of_birth', 'status', 'full_address', 'password');
    
        $this->setQueryBuilder($queryBuilder);
    }

     /**
     * Add columns.
     *
     * @return void
     */
    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('admin::app.datagrid.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('admin::app.datagrid.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);


        $this->addColumn([
            'index'      => 'phone_number',
            'label'      => trans('admin::app.datagrid.phone_number'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => false,
            'closure'    => function ($row) {
                if (! $row->phone_number) {
                    return '-';
                } else {
                    return $row->phone_number;
                }
            },
        ]);

        $this->addColumn([
            'index'      => 'email',
            'label'      => trans('admin::app.datagrid.email'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'gender',
            'label'      => trans('admin::app.datagrid.gender'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => false,
            'closure'    => function ($row) {
                if (! $row->gender) {
                    return '-';
                } else {
                    return $row->gender;
                }
            },
        ]);


        $this->addColumn([
            'index'      => 'date_of_birth',
            'label'      => trans('admin::app.datagrid.date_of_birth'),
            'type'       => 'date',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('admin::app.datagrid.status'),
            'type'       => 'boolean',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'       => 'full_address',
            'label'       => trans('admin::app.customers.customers.full_address'),
            'type'        => 'string',
            'searchable'  => false,
            'sortable'    => true,
            'filterable'  => true,
            'visibility'  => false,
        ]);

        $this->addColumn([
            'index'       => 'password',
            'label'       => trans('admin::app.customers.customers.password'),
            'type'        => 'password',
            'searchable'  => false,
            'sortable'    => true,
            'filterable'  => true,
            'visibility'  => false,
        ]);
    }


       /**
     * Prepare mass actions.
     *
     * @return void
     */

    public function prepareActions()
    {
        $this->addAction([
            'title' => trans('admin::app.datagrid.edit'),
            'method' => 'GET',
            'route' => 'admin.catalog.attributes.edit',
            'icon' => 'icon pencil-lg-icon'
        ]);

        $this->addAction([
            'title' => trans('admin::app.datagrid.delete'),
            'method' => 'POST',
            'route' => 'admin.catalog.attributes.delete',
            'icon' => 'icon trash-icon'
        ]);
    }

}