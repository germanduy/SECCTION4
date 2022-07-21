@extends("layout")
@section("title","list-score")
@section("main")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Score</h1>
                    <a href="{{url("/score/create")}}" class="btn btn-outline-info float-right">
                        Add Score
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
                            <form method="get" action="{{url("score/list")}}">
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" value="{{app("request")->input("mark")}}" name="mark" class="form-control float-right" placeholder="Search by Mark">
                                    <input type="text" value="{{app("request")->input("result")}}" name="result" class="form-control float-right" placeholder="Search by Result">
                                    <select name="sid" class="form-control float-right">
                                        <option value="">--Select Name--</option>
                                        @foreach($studentList as $item)
                                            <option @if(app("request")->input("sid")==$item->sid)  selected @endif value="{{$item->sid}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <select name="sbid" class="form-control float-right">
                                        <option value="">--Select Subject--</option>
                                        @foreach($subjectList as $item)
                                            <option @if(app("request")->input("sbid")==$item->sbid)  selected @endif value="{{$item->sbid}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

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
                                    <th>Mark</th>
                                    <th>Result</th>
                                    <th>Student ID</th>
                                    <th>Subject ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($scores as $item)
                                    <tr>
                                        <td>{{$item->mark}}</td>
                                        <td>{{$item->result}}</td>
                                        <td>{{$item->students->name}}</td>
                                        <td>{{$item->subjects->name}}</td>
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
    {!! $scores-> appends(app("request")->input())-> links() !!}
    </div>
@endsection
