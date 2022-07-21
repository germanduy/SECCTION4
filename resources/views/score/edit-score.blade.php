@extends("layout")
@section("title","edit-score")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT SCORE</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT SCORE</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Score ID</label>
                        <input type="text" class="form-control" id="examplescid" placeholder="Enter Score ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mark</label>
                        <input type="text" class="form-control" id="examplemark" placeholder="Enter Mark">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Result</label>
                        <input type="text" class="form-control" id="exampleresult" placeholder="Enter Result">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student ID</label>
                        <input type="text" class="form-control" id="examplesid" placeholder="Enter Student ID">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject ID</label>
                        <input type="text" class="form-control" id="examplesbid" placeholder="Enter Subject ID">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

