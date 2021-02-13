@extends('layouts.admin')

@section('title','Edit Content Page')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Content</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="card">
                <form class="form-horizontal" action="{{route('admin_content_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-1 text-right control-label col-form-label">Parent</label>
                            <div class="col-sm-11">
                                <select class="select2 form-control custom-select select2-hidden-accessible"
                                        style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true" name="menu_id">
                                    @foreach ( $datalist as $rs)
                                        <option value="{{ $rs->id }}" @if ($rs->id == $data->menu_id) selected="selected" @endif>{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-1 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$data->title}}"name="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-1 text-right control-label col-form-label">Type</label>
                            <div class="col-sm-11">

                                <input type="text" class="form-control" value="{{$data->type}}" name="type" placeholder="Type">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-1 text-right control-label col-form-label">Detail</label>
                            <div class="col-sm-11">
                                <textarea class="form-control" id="summary-ckeditor"  name="detail">{{$data->detail}}</textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace( 'detail', {
                                        filebrowserUploadUrl: "{{route('admin_content_upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-1 text-right control-label col-form-label">Keywords</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control"  value="{{$data->keywords}}" name="keywords" placeholder="Keywords">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname"
                                   class="col-sm-1 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$data->description}}" name="description" placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-1 text-right control-label col-form-label">Slug</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$data->slug}}" name="slug" placeholder="Slug">
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-1  text-right control-label col-form-label">Image</label>
                                <div class="col-sm-11">
                                    <input type="file"  name="image" value="{{$data->image}}" class="form-control">

                                    @if ($data->image)
                                        <img src="{{ Storage::url($data->image)}}" height="60" alt="">
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="form-group row" data-select2-id="95">
                            <label class="col-sm-1 text-right control-label col-form-label">Select Status</label>
                            <div class="col-md-11" data-select2-id="94">
                                <select class="select2 form-control custom-select select2-hidden-accessible"
                                        style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update Content</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('assets')}}/admin/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets')}}/admin/js/startmin.js"></script>


@endsection
