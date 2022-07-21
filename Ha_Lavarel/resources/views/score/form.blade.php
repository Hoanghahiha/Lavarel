@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/scoreList")}}" class="btn btn-outline-info float-right">
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
                        <form role="form" method="post" action="{{url("/scoreForm")}}">
                            @csrf
                            @method("post")

                            <div class="form-group">
                                <label>Score Id</label>
                                <input type="text" name="scid" value="" class="form-control" placeholder="Enter Score Id">
                            </div>
                            <div class="form-group">
                                <label>Mark</label>
                                <input type="number" name="math" value="" class="form-control" placeholder="Enter Mark">
                            </div>
                            <div class="form-group">
                                <label>Result</label>
                                <input type="number" name="result" value="" class="form-control" placeholder="Enter Result">
                            </div>
                            <div class="form-group">
                                <label>Student Name</label>
                                <select type="text" name="sid" class="form-control">
                                    @foreach($studentList as $item)
                                    <option value="{{$item->sid}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Subject Name</label>
                                <select type="text" name="sbid" class="form-control">
                                    @foreach($subjectList as $item)
                                        <option value="{{$item->sbid}}">{{$item->name}}</option>
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
