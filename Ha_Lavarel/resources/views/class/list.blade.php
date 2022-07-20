@extends("layout")
@section("content-header")
    <h1>Students List
        <a href="{{url("/classForm")}}" class="btn btn-outline-info float-right">
            Create Class
        </a>
    </h1>
@endsection
@section("main")
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div style="margin-top: 10px">
                        <form class="form-inline ml-3" method="get" action="{{url("/classList")}}">
                            <div class="input-group input-group-sm">
                                <input style="margin-left: 10px" value="{{app("request")->input("classID")}}" class="form-control float-right" placeholder="Search by class ID" type="text" name="classID">
                                <input style="margin-left: 10px" value="{{app("request")->input("name")}}" class="form-control float-right" placeholder="Search by name" type="text" name="name">
                                <input style="margin-left: 10px" value="{{app("request")->input("room")}}" class="form-control float-right" placeholder="Search by room" type="text" name="room" >
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
                                <th>Class ID</th>
                                <th>Name</th>
                                <th>Room</th>
                                <th>Student Count</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $item)
                                <tr>
                                    <td>{{$item->cid}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->room}}</td>
                                    <td>{{$item->students_count}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="margin-left: 800px">{!! $classes->appends(app("request")->input())->links() !!}</div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>

@endsection
