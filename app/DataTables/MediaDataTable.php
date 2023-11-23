<?php

namespace App\DataTables;

use App\Models\Media;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MediaDataTable extends DataTable
{

    protected $projectId;

    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        if (!is_null($this->projectId)) {
            $query->where('project_id', $this->projectId);
        }
    

        if (!is_null($this->newsId)) {
            $query->where('news_id', $this->newsId);
        }

        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('medias-admin.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('medias-admin.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $editBtn . $deleteBtn;
            })

            ->addColumn('media', function ($query) {
                return "<img width='100px' src='" . asset($query->media) . "' alt='" . $query->id . "'></img>";
            })

            ->rawColumns(['action', 'media'])
            ->setRowId('id');
    }



    public function query(Media $model): QueryBuilder
    {
        return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('media-table')
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
            Column::make('media'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }


    protected function filename(): string
    {
        return 'Media_' . date('YmdHis');
    }
}
