@extends("layout")
@section("content-header")
    <h1>Students List
        <a href="{{url("/admin/studentForm")}}" class="btn btn-outline-info float-right">
            Create Student
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
                        <form class="form-inline ml-3" method="get" action="{{url("/admin/studentList")}}">
                            <div class="input-group input-group-sm">
                                <select style="margin-left: 10px" class="form-control float-right" name="classID">
                                    <option value="">Select Class...</option>
                                    @foreach($classesList as $item)
                                        <option @if(app("request")->input("classID")==$item->cid) selected @endif value="{{$item->cid}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <input style="margin-left: 10px" value="{{app("request")->input("name")}}" class="form-control float-right" placeholder="Search by name" type="text" name="name">
                                <input style="margin-left: 10px" value="{{app("request")->input("date")}}" class="form-control float-right" placeholder="Birthday from" type="date" name="date" >
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
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Birthday</th>
                                <th>Class Id</th>
                                <th>Class Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $item)
                                <tr>
                                    <td>{{$item->sid}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{$item->getImage()}}" class="img-circle" width="80"/></td>
                                    <td>{{$item->birthday}}</td>
                                    <td>{{$item->cid}}</td>
                                    <td>{{$item->classes->name}}</td>
                                    <td><a href="{{url("/admin/studentEdit",['id'=>$item->sid])}}" class="btn btn-outline-info">Edit</a></td>
                                    <td>
                                        <form action="{{url("/admin/studentDelete",['student'=>$item->sid])}}" method="post">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" onclick="return confirm('Delete Student {{$item->name}}')" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>{!! $student->appends(app("request")->input())->links() !!}</div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
