@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/studentList")}}" class="btn btn-outline-info float-right">
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
                        <form role="form" method="post" action="{{url("/studentForm")}}">
                            @csrf
                            @method("post")

                            <div class="form-group">
                                <label>Student Id</label>
                                <input type="text" name="sid" value="" class="form-control" placeholder="Enter Student Id">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="" class="form-control" placeholder="Enter Student Name">
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday" value="" class="form-control" placeholder="Enter Date Of Birth">
                            </div>
                            <div class="form-group">
                                <label>Class ID</label>
                                <select type="text" name="cid" class="form-control">
                                    @foreach($classList as $item)
                                        <option value="{{$item->cid}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
