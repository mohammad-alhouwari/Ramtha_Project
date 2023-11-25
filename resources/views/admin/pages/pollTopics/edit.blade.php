@extends('admin.layouts.master')
@section('title', 'Add Project')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit Poll</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('pollTopics-admin.update', $pollTopic->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl-2">
                                <label class="text-dark font-weight-medium" for="">Old Image</label>
                                <div class="mb-5">
                                    <img id="showImage" width="100px" src="{{ url($pollTopic->image) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="mb-5">

                                    <div class="mb-5">
                                        <label class="text-dark font-weight-medium">Image</label>
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
                                    <label class="text-dark font-weight-medium">Title</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-message-text" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $pollTopic->title }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Ending Date</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-message-text" id="mdi-account"></span>
                                        </div>
                                        <input type="date" class="form-control" name="end_date"
                                            value="{{ $pollTopic->end_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Description</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-clipboard-text" id="mdi-account"></span>
                                        </div>
                                        <textarea class="form-control" name="description" id="" rows="4" value="{{ $pollTopic->description }}">{{ $pollTopic->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="mb-5">
                                <label class="text-dark font-weight-medium">Poll Status</label>
                                <div class="input-group mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                            {{ $pollTopic->status == "on" ? 'Checked' : '' }}>
                                        <label class="custom-control-label" for="statusSwitch"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-footer pt-5 border-top">
                                <button type="submit" class="btn btn-primary btn-pill">Update</button>
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
