<?php

namespace App\DataTables;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PartnersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('partners-admin.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('partners-admin.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $editBtn . $deleteBtn;
            })
            ->addColumn('logo', function ($query) {
                return "<img width='100px' src='" . asset($query->logo) . "'></img>";
            })
            ->addColumn('link', function ($query) {
                return "<a href='" . $query->link . "'>" . $query->link . "</a>";
            })


            ->addColumn('status', function ($query) {
                $checked = $query->status == 'on' ? 'on' : 'off';

                if ($checked == 'on') {
                    return "<span class='badge badge-success'>Active</span>";
                } else {
                    return "<span class='badge badge-danger'>Inactive</span>";
                }
            })
            ->rawColumns(['action', 'logo', 'status'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Partner $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Partner $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('partners-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [

            Column::make('logo'),
            Column::make('link'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Partners_' . date('YmdHis');
    }
}
