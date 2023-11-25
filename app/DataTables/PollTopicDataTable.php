<?php

namespace App\DataTables;

use App\Models\PollTopic;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PollTopicDataTable extends DataTable
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
                $editBtn = "<a href='" . route('pollTopics-admin.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('pollTopics-admin.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";
                $showBtn = "<a href='" . route('pollTopics-admin.show', $query->id) . "' class='btn btn-info my-2 show-item'><i class='fa-solid fa-circle-info'></i></a>";
                return $showBtn . $editBtn . $deleteBtn;
            })
            ->addColumn('image', function ($query) {
                return "<img width='100px' src='" . asset($query->image) . "'></img>";
            })
            ->addColumn('description', function ($query) {
                return \Illuminate\Support\Str::limit($query->description, 120, ' . . . ');
            })
            ->addColumn('status', function ($query) {
                $checked = $query->status == 'on' ? 'on' : 'off';

                if ($checked == 'on') {
                    return "<span class='badge badge-success'>Active</span>";
                } else {
                    return "<span class='badge badge-danger'>Inactive</span>";
                }
            })
            ->rawColumns(['action', 'image', 'status'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PollTopic $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PollTopic $model): QueryBuilder
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
            ->setTableId('polltopic-table')
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
            Column::make('image'),
            Column::make('title'),
            Column::make('description'),
            Column::make('end_date'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(230)
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
        return 'PollTopic_' . date('YmdHis');
    }
}
