@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/admin/studentList")}}" class="btn btn-outline-info float-right">
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
                        <form role="form" method="post" action="{{url("/admin/studentForm")}}" enctype="multipart/form-data">
                            @csrf
                            @method("post")

                            <div class="form-group">
                                <label>Student Id</label>
                                <input type="text" name="sid" value="{{old("sid")}}" class="form-control" placeholder="Enter Student Id">
                                @error('sid')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{old("name")}}" class="form-control" placeholder="Enter Student Name">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday" value="{{old("birthday")}}" class="form-control" placeholder="Enter Date Of Birth">
                                @error('birthday')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Class ID</label>
                                <select name="cid" class="form-control">
                                    @foreach($classesList as $item)
                                    <option @if(old("cid")==$item->cid) selected @endif value="{{$item->cid}}">{{$item->name}}</option>
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
