<html>
<head>
    <title>Image Gallery</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets')}}/admin/css/bootstrap.min.css" rel="stylesheet">



    <!-- Morris Charts CSS -->
    <link href="{{asset('assets')}}/admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('assets')}}/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>


<!-- Page images -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Image</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="card">
            <h3 class="page-header">Content: {{$data->title}}</h3>
            <form class="form-horizontal" action="{{route('admin_image_store',['content_id'=>$data->id])}}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="lname" class="col-sm-1 text-right control-label col-form-label">Title</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-1 text-right control-label col-form-label">Image</label>
                        <div class="col-sm-11">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Add images</button>
                    </div>
                </div>
            </form>
            <table class="table table-striped table-bordered table-hover"
                   id="dataTables-example">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $images as $rs)
                    <tr class="odd gradeX">
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td style="text-align:center">
                            @if ($rs->image)
                                <img src="{{ Storage::url($rs->image)}}" height="100" alt="">
                            @endif
                        </td>
                        <td style="text-align:center"><a
                                href="{{route('admin_image_delete', ['id' => $rs->id,'content_id'=>$data->id])}}"
                                onclick="return confirm('Delete ! Are You Sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
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
</body>
</html>


