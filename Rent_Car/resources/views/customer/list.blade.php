@extends("layout")
@section("main")
    <div class="content" style="min-height: 1299.69px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer Tables</li>
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
                                <th>Phone</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Create At</th>
                                <th>Update At</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customer as $item)
                                <tr>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->birthday}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>

@endsection
