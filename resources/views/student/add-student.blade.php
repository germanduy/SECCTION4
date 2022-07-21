@extends("layout")
@section("title","add-student")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADD STUDENT</h1>
                    <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
                        Back to List
                    </a>
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
                <h3 class="card-title">ADD STUDENT</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{"/student/create"}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student ID</label>
                        <input type="text" name="sid" class="form-control" id="examplesid" placeholder="Enter Id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="examplename" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthday</label>
                        <input type="date" name="birthday" class="form-control" id="examplebirthday" placeholder="Enter Birthday">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Class ID</label>
                        <select name="cid" class="form-control">
                            @foreach($classesList as $item)
                                <option value="{{$item->cid}}"> {{$item->name}} </option>
                            @endforeach
                        </select>
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

