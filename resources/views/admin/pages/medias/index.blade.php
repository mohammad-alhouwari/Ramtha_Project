@extends('admin.layouts.master')
@section('title', 'Media')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h4>Manage Medias</h4>

                    @if (isset($newsId))
                        <a href="{{ route('medias-admin.create.news', ['news_id' => $newsId]) }}"
                            class="mb-1 btn btn-outline-primary">
                            <i class="mdi mdi-checkbox-marked-outline mr-1"></i>Create Media
                        </a>
                    @elseif (isset($projectId))
                        <a href="{{ route('medias-admin.create.project', ['project_id' => $projectId]) }}"
                            class="mb-1 btn btn-outline-primary">
                            <i class="mdi mdi-checkbox-marked-outline mr-1"></i>Create Media
                        </a>
                    @elseif (isset($eventId))
                        <a href="{{ route('medias-admin.create.event', ['event_id' => $eventId]) }}"
                            class="mb-1 btn btn-outline-primary">
                            <i class="mdi mdi-checkbox-marked-outline mr-1"></i>Create Media
                        </a>
                    @elseif (isset($landmarkId))
                        <a href="{{ route('medias-admin.create.landmark', ['landmark_id' => $landmarkId]) }}"
                            class="mb-1 btn btn-outline-primary">
                            <i class="mdi mdi-checkbox-marked-outline mr-1"></i>Create Media
                        </a>
                    @endif

                </div>
                <div class="card-body table-responsive">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
