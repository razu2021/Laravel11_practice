@extends('layouts.webmaster')
@section('web_content')

    <div class="container section-padding">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Table Information </h3>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary"><a class="text-white" href="{{route('file_upload.add')}}">Add New Information</a></button>
                            </div>
                        </div>
                        <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First</th>
                            <th scope="col">File </th>
                            <th scope="col">Created </th>
                            <th scope="col">Updated</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $data)
                            <tr>
                            <th scope="row">{{$data->file_id}}</th>
                            <td>{{$data->file_title}}</td>
                            <td> <img src="{{asset('storage/uploads/images/'.$data->file_name)}}" alt="" class="" height="80px" width="auto"></td>
                            <td>Created</td>
                            <td>updated </td>
                            <td>Active</td>
                            <!-- action  -->
                             <td>
                             <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                    Manage
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Restor</a></li>
                                    <li><a class="dropdown-item" href="{{route('file_upload.softdelete',$data->file_id)}}">Delete</a></li>
                                </ul>
                                </div>
                             </td>
                            <!-- action end  -->
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- card end  -->
            </div>
            <!-- col end  -->
        </div>
    </div>

@endsection