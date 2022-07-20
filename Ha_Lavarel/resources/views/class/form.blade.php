@extends("layout")
@section("content-header")
    <h1>Create a Class
        <a href="{{url("/classList")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
    <div class="content" style="min-height: 1299.69px;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" method="post" action="{{url("/classForm")}}" class="col-md-6">
                            @csrf
                            @method("post")
                            <div class="form-group">
                                <label>Class ID</label>
                                <input type="text" name="cid" value="" class="form-control" placeholder="Enter Class Id">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <input type="text" name="room" value="" class="form-control" placeholder="Enter name Room">
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
