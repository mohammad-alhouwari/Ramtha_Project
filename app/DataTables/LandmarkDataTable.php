<?php

namespace App\DataTables;

use App\Models\Landmark;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LandmarkDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $mediaBtn = "<a href='" . route('medias-admin.index', ['landmark_id' => $query->id]) . "' class='btn btn-info my-2'><i class='far fa-image'></i></a>";
                $editBtn = "<a href='" . route('landmarks-admin.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('landmarks-admin.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $mediaBtn . $editBtn . $deleteBtn;
            })
            ->addColumn('preview_image', function ($query) {
                return "<img width='100px' src='" . asset($query->preview_image) . "'></img>";
            })

            ->addColumn('status', function ($query) {
                $checked = $query->status == 'on' ? 'on' : 'off';
                if ($checked == 'on') {
                    return "<span class='badge badge-success'>Active</span>";
                } else {
                    return "<span class='badge badge-danger'>Inactive</span>";
                }
            })
            ->rawColumns(['action', 'preview_image', 'status'])

            ->setRowId('id');
    }


    public function query(Landmark $model): QueryBuilder
    {
        return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('landmark-table')
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


    public function getColumns(): array
    {
        return [
            Column::make('title'),
            Column::make('preview_image'),
            Column::make('description'),
            Column::make('location'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }


    protected function filename(): string
    {
        return 'Landmark_' . date('YmdHis');
    }
}
