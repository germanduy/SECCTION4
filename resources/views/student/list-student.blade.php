@extends("layout")
@section("title","list-student")
@section("main")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Student</h1>
                    <a href="{{url("/student/create")}}" class="btn btn-outline-info float-right">
                        Add Student
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
{{--                            <h3 class="card-title">List Student</h3>--}}
                            <form method="get" action="{{url("/student/list")}}">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" >
                                    <select name="classID" class="form-control float-right">
                                        <option value="">--Select Class--</option>
                                        @foreach($classeslist as $item)
                                            <option @if(app("request")->input("classID")==$item->cid)  selected @endif value="{{$item->cid}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="date" value="{{app("request")->input("date1")}}"  name="date1" class="form-control float-right" >
                                    <input type="date" value="{{app("request")->input("date2")}}"  name="date2" class="form-control float-right" >
                                    <input type="text" value="{{app("request")->input("name")}}"  name="name" class="form-control float-right" placeholder="Search by name">
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
                                    <th>Student ID</th>
                                    <th>Full Name</th>
                                    <th>Birthday</th>
                                    <th>Class Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                <tr>
                                    <td>{{$item->sid}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->birthday}}</td>
                                    <td>{{$item->classes->name}}</td>
                                </tr>
                                </tbody>
                                @endforeach
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
    {!! $students-> appends(app("request")->input())-> links() !!}
    </div>
@endsection
