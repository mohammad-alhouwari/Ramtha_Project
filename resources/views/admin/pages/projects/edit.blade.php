@extends('admin.layouts.master')
@section('title', 'Edit Project')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit Project</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('projects-admin.update', $project->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl-2">
                                <div class="mb-5">
                                    <img id="showImage" width="100px"
                                        src="{{ $project->preview_image == '' ? url('no-image.jpg') : asset($project->preview_image) }}">
                                </div>
                            </div>
                            <div class="col-xl-10">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Upload Image</label>
                                    <div class="mb-5">
                                        {{-- <label class="text-dark font-weight-medium">Prject Title</label> --}}
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-folder-image" id="mdi-account"></span>
                                            </div>
                                            <input type="file" class="form-control" name="preview_image" id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Project Title</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-message-text" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $project->title }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Project Description</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi  mdi-clipboard-text" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="description"
                                            value="{{ $project->description }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Project completion rate</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-numeric" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="percentage"
                                            value="{{ $project->percentage }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-footer pt-5 border-top">
                                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        });
    </script>
@endsection
