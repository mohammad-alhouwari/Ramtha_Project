@extends('admin.layouts.master')
@section('title', 'Edit Investment Opportunities')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit Job Opportunity</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('jobs-admin.update', $job->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl-2">
                                <div class="mb-5">
                                    <img id="showImage" width="100px"
                                        src="{{ $job->image == '' ? url('no-image.jpg') : asset($job->image) }}">
                                </div>
                            </div>
                            <div class="col-xl-10">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Image</label>
                                    <div class="mb-5">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-folder-image" id="mdi-account"></span>
                                            </div>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Investment opportunity Name</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-message-text" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $job->title }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Status</label>
                                    <div class="input-group mb-3 d-flex gap-3">
                                        <div class="d-flex align-items-center gap-1">
                                            <label for="show" class="m-0">Show</label>
                                            <input id="show" type="radio" name="status" value="1" {{$job->status ? 'checked' : ''}}>
                                        </div>
                                        <div class="d-flex align-items-center gap-1">
                                            <label for="hide" class="m-0">Hide</label>
                                            <input id="hide" type="radio" name="status" value="0" {{!$job->status ? 'checked' : ''}}>
                                        </div>
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
