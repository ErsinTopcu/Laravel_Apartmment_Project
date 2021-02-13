@extends('layouts.admin')

@section('title','Edit Setting Page')

@section('content')
    <!-- Page setting -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Setting</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <form class="form-horizontal" action="{{route('admin_setting_update')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Settins Tab
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#general" data-toggle="tab">General Settings</a>
                                        </li>
                                        <li><a href="#smtp" data-toggle="tab">SMTP Settings</a>
                                        </li>
                                        <li><a href="#social" data-toggle="tab">Social Media</a>
                                        </li>
                                        <li><a href="#aboutuspage" data-toggle="tab">About Us Page</a>
                                        </li>
                                        <li><a href="#contactpage" data-toggle="tab">Contact Page</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="general">
                                            <h4>General Settings</h4>
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}"
                                                   class="form-control"
                                                   placeholder="Id">

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Title</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->title}}"
                                                           name="title"
                                                           placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Keywords</label>
                                                <div class="col-sm-11">

                                                    <input type="text" class="form-control" value="{{$data->keywords}}"
                                                           name="keywords"
                                                           placeholder="keywords">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Description</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control"
                                                           value="{{$data->description}}"
                                                           name="description"
                                                           placeholder="Description">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Company</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->company}}"
                                                           name="company"
                                                           placeholder="company">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Adress</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->adress}}"
                                                           name="adress"
                                                           placeholder="adress">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Phone
                                                    Number</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->phone}}"
                                                           name="phone"
                                                           placeholder="phone">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Email</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->email}}"
                                                           name="email"
                                                           placeholder="email">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="smtp">
                                            <h4>SMTP Settings</h4>
                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Smtpserver</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control"
                                                           value="{{$data->smtpserver}}" name="smtpserver"
                                                           placeholder="smtpserver">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Smtpemail</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->smtpemail}}"
                                                           name="smtpemail"
                                                           placeholder="smtpemail">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Smtppassword</label>
                                                <div class="col-sm-11">
                                                    <input type="password" class="form-control"
                                                           value="{{$data->smtppassword}}"
                                                           name="smtppassword"
                                                           placeholder="smtppassword">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Smtpport</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->smtpport}}"
                                                           name="smtpport"
                                                           placeholder="smtpport">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="social">
                                            <h4>Social Media </h4>
                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Facebook</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->facebook}}"
                                                           name="facebook"
                                                           placeholder="facebook">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Instagram</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->instagram}}"
                                                           name="instagram"
                                                           placeholder="instagram">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Twitter</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->twitter}}"
                                                           name="twitter"
                                                           placeholder="twitter">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname"
                                                       class="col-sm-1 text-right control-label col-form-label">Youtube</label>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control" value="{{$data->youtube}}"
                                                           name="youtube"
                                                           placeholder="youtube">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="aboutuspage">
                                            <h4>About Us Page</h4>
                                            <div class="form-group row">
                                                <div class="col-sm-11">
                            <textarea class="form-control" id="summary-ckeditor"
                                      name="aboutus">{{$data->aboutus}}
                            </textarea>
                                                </div>
                                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                <script>
                                                    CKEDITOR.replace('aboutus', {
                                                        filebrowserUploadUrl: "{{route('admin_setting_upload', ['_token' => csrf_token() ])}}",
                                                        filebrowserUploadMethod: 'form'
                                                    });
                                                </script>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="contactpage">
                                            <h4>Contact Page</h4>
                                            <div class="form-group row">

                                                <div class="col-sm-11">
                            <textarea class="form-control" id="summary-ckeditor"
                                      name="contact">{{$data->contact}}
                            </textarea>
                                                </div>
                                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                <script>
                                                    CKEDITOR.replace('contact', {
                                                        filebrowserUploadUrl: "{{route('admin_setting_upload', ['_token' => csrf_token() ])}}",
                                                        filebrowserUploadMethod: 'form'
                                                    });
                                                </script>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">Update setting</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-body -->

                            </div>
                            <!-- /.panel -->
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
