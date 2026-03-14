@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Blogs</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Sub-Title</th>
                                    <th>Author Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($blogs as $blog)
                                <tr class="align-middle">
                                    <td>{{$loop->index+1}}</td>
                                    <td><img src="{{$blog->image}}" width="200" height="100"></td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->subtitle}}</td>
                                    <td>{{$blog->author_name}}</td>
                                    <td>
                                        <a href="{{url('/admin/edit-blog/'.$blog->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{url('/admin/delete-blog/'.$blog->id)}}" onclick="return confirm('Are you sure')" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$blogs->links('pagination::bootstrap-5')}}
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
    </div>
@endsection
