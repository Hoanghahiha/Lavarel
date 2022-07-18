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
                            <li class="breadcrumb-item active">Simple Tables</li>
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
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Student Id</label>
                                <input type="text" name="sid" value="" class="form-control" placeholder="studentId">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="" class="form-control" placeholder="Tên sinh vien">
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday" value="" class="form-control" placeholder="Ngay sinh">
                            </div>
                            <div class="form-group">
                                <label>Class ID</label>
                                <input type="text" name="cid" value="" class="form-control" placeholder="classId">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>

@endsection
