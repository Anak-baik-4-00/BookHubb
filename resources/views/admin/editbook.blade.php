<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/css/admin/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="/css/admin/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('includes.adminheader')
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Book</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <form action="{{route('admin.book.save', $book->book_id)}}" style="display:inline;" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <div class="form-group"> <label class="form-control-label text-muted">Book Name</label>
                                    <input type="text" id="bname" name="bname" value="{{$book->book_name}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Author</label>
                                    <input type="text" id="bauthor" name="bauthor" value="{{$book->author}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Book cover</label>
                                    <input type="file" id="bcover" name="bcover" value="{{$book->book_cover}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Book file</label>
                                    <input type="file" id="bfile" name="bfile" value="{{$book->book_file}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Genre</label>
                                    <input type="text" id="bgenre" name="bgenre" value="{{$book->genre}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Description</label>
                                    <textarea id="bdesc" name="bdesc" value="{{$book->book_desc}}" class="form-control"></textarea>
                                </div>

                                <div class="form-group"> <label class="form-control-label text-muted">Publish Date</label>
                                    <input type="date" id="bpdate" name="bpdate" value="{{$book->published}}" class="form-control">
                                </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Total Page</label>
                                    <input type="number" id="btpage" name="btpage" value="{{$book->total_page}}" class="form-control">
                                </div>

                                <input type="submit" name="editBook" value="Save" class="btn btn-outline-primary text-center"></input>

                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{route('admin.book.delete', $book->book_id)}}" style="display:inline;" method="POST">
                    @csrf 
                    @method('DELETE')
                    <input type="submit" name="editBook" value="Delete" class="btn btn-outline-primary text-center"></input>
                </form>
                <a href="{{route('admin.book.manage')}}">
                    <div class="btn btn-outline-primary text-center">Back</div>
                </a>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 ?? BookHub brought to you by
                </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/css/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/css/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/css/admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/css/admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/css/admin/js/custom.js"></script>
</body>

</html>