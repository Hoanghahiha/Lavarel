@extends("layout")
@section("main")
    <div class="content" style="min-height: 1299.69px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
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
                                <th>Birthday</th>
                                <th>Class Id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $item)
                                <tr>
                                    <td>{{$item->sid}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->birthday}}</td>
                                    <td>{{$item->cid}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>{!! $student->links() !!}</div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
