@extends('layouts.admin')

@section('title','Content List')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Content</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-outline btn-success"><a
                                        href="{{route('admin_content_add')}}">Add Content</a></button>
                            </div>

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                           id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Menu</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Keywords</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ( $datalist as $rs)
                                            <p></p>

                                            <tr class="odd gradeX">
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->menu->title}}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{{ $rs->type }}</td>
                                                <td>{{ $rs->keywords }}</td>
                                                <td style="text-align:center">
                                                    @if ($rs->image)
                                                        <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                                                    @endif
                                                </td>
                                                <td style="text-align:center"><a
                                                        href="{{route('admin_image_add',['content_id'=>$rs->id])}}"
                                                        onclick="return !window.open(this.href,'','top=50 left=100,height=700')">
                                                        <img src="{{asset('assets/admin/images')}}/gallery.png" height="25"></a></td>
                                                <td class="center">{{ $rs->status }}</td>
                                                <td style="text-align:center"><a
                                                        href="{{route('admin_content_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                                <td style="text-align:center"><a
                                                        href="{{route('admin_content_delete', ['id' => $rs->id])}}"
                                                        onclick="return confirm('Delete ! Are You Sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.row -->
                        </div>
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
            @section('footer')

                <!-- jQuery -->
                    <script src="{{asset('assets')}}/admin/js/jquery.min.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>

                    <!-- Metis Menu Plugin JavaScript -->
                    <script src="{{asset('assets')}}/admin/js/metisMenu.min.js"></script>

                    <!-- DataTables JavaScript -->
                    <script src="{{asset('assets')}}/admin/js/dataTables/jquery.dataTables.min.js"></script>
                    <script src="{{asset('assets')}}/admin/js/dataTables/dataTables.bootstrap.min.js"></script>

                    <!-- Custom Theme JavaScript -->
                    <script src="{{asset('assets')}}/admin/js/startmin.js"></script>

                    <script>
                        $(document).ready(function () {
                            $('#dataTables-example').DataTable({
                                responsive: true
                            });
                        });
                    </script>
@endsection
