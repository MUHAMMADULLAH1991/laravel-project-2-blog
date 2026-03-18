@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Messages</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Messages</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($messages as $message)
                                <tr class="align-middle">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone?? 'Not Found'}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>
                                        <a href="{{url('admin/contact-messages/delete/'.$message->id)}}" onclick="return confirm('Are you sure')" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- {{$blogs->links('pagination::bootstrap-5')}} --}}
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
    </div>
@endsection
