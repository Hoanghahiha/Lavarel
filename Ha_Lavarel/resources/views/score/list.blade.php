@extends("layout")
@section("content-header")
    <h1>Score List
        <a href="{{url("/scoreForm")}}" class="btn btn-outline-info float-right">
            Create Score
        </a>
    </h1>
@endsection
@section("main")
    <div class="content" style="min-height: 1299.69px;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div style="margin-top: 10px">
                        <form class="form-inline ml-3" method="get" action="{{url("/scoreList")}}">
                            <div class="input-group input-group-sm">
                                <select style="margin-left: 10px" class="form-control float-right" name="studentID">
                                    <option value="">Select Student...</option>
                                    @foreach($studentList as $item)
                                        <option @if(app("request")->input("studentID")==$item->sid) selected @endif value="{{$item->sid}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <input style="margin-left: 10px" value="{{app("request")->input("math")}}" class="form-control float-right" placeholder="Search by mark" type="text" name="math">
                                <input style="margin-left: 10px" value="{{app("request")->input("result")}}" class="form-control float-right" placeholder="Search by result" type="text" name="result" >
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Danh sách</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Score ID</th>
                                <th>Math</th>
                                <th>Result</th>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Subject Id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($score as $item)
                                <tr>
                                    <td>{{$item->scid}}</td>
                                    <td>{{$item->math}}</td>
                                    <td>{{$item->result}}</td>
                                    <td>{{$item->sid}}</td>
                                    <td>{{$item->student->name}}</td>
                                    <td>{{$item->sbid}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>{!! $score->appends(app("request")->input())->links() !!}</div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
