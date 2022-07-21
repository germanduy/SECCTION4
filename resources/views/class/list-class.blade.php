@extends("layout")
@section("title","list-class")
@section("main")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Class</h1>
                    <a href="{{url("/class/create")}}" class="btn btn-outline-info float-right">
                        Add Class
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{url("/class/list")}}">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 400px;">
                                    <input type="text" value="{{app("request")->input("name")}}" name="name" class="form-control float-right" placeholder="Search by name">
                                    <input type="text" value="{{app("request")->input("room")}}" name="room" class="form-control float-right" placeholder="Search by room">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>Class ID</th>
                                    <th>Name</th>
                                    <th>Room</th>
                                    <th>Students</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($classes as $item)
                                <tr>
                                    <td>{{$item->cid}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->room}}</td>
                                    <td>{{$item->students_count}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    {!! $classes-> appends(app("request")->input())-> links() !!}
    </div>
@endsection
