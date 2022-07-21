@extends("layout")
@section("title","add-score")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADD SCORE</h1>
                    <a href="{{url("/score/list")}}" class="btn btn-outline-info float-right">
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
                <h3 class="card-title">ADD SCORE</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{"/score/create"}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mark</label>
                        <input type="text" name="mark" class="form-control" id="examplemark" placeholder="Enter Mark">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Result</label>
                        <input type="text" name="result" class="form-control" id="exampleresult" placeholder="Enter Result">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student</label>
                        <select name="sid" class="form-control">
                            @foreach($studentList as $item)
                                <option value="{{$item->sid}}"> {{$item->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <select name="sbid" class="form-control">
                            @foreach($subjectList as $item)
                                <option value="{{$item->sbid}}"> {{$item->name}} </option>
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

