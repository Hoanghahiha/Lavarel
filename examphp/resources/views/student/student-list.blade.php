@section("title")
    Students List
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Students List</h1>
                    <a href="{{url("student/create")}}" class="btn btn-outline-info float-right">
                        Create Student
                    </a>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Students List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
{{--                            <h3 class="card-title">Students List</h3>--}}
                            <form method="get" action="{{url("student/list")}}">
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->age}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->telephone}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

