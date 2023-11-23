@extends('admin.layouts.master')
@section('title', 'Edit Partner')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit Partner</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('partners-admin.update', $partners->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl-2">
                                <div class="mb-5">
                                    <img id="showImage" width="100px"
                                        src="{{ $partners->logo == '' ? url('no-image.jpg') : asset($partners->logo) }}">
                                </div>
                            </div>
                            <div class="col-xl-10">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium" for="">Logo</label>
                                    <div class="mb-5">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mdi mdi-folder-image" id="mdi-account"></span>
                                            </div>
                                            <input type="file" class="form-control" name="logo" id="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                       
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Partner Link</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi  mdi-clipboard-text" id="mdi-account"></span>
                                        </div>
                                        <input type="text" class="form-control" name="link"
                                            value="{{ $partners->link }}">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-xl-12">
                                <div class="mb-5">
                                    <label class="text-dark font-weight-medium">Partners Status</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="hidden" name="status" value="off">
                                            <input type="checkbox" class="custom-control-input" id="statusSwitch"
                                                name="status" value="on" {{ old('status') ? 'checked' : '' }}
                                                {{ $partners->status == 'on' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="statusSwitch"></label>
                                        </div>
                                    </div>
                                </div>
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
