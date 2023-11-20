@extends('admin.layouts.master')
@section('title', 'Projects')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h4>Project {{ $project->name }} Photos</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
