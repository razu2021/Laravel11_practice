@extends('layouts.adminmaster')
@section('admin_contents')

<div class="container section-padding mt-5 mb-5 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Table Information </h3>
                            </div>
                            <div class="col-lg-6 text-end">
                            <a href="{{route('post_component.recycle')}}">
                            <button type="button" class="btn btn-warning position-relative mx-2">
                                Recycle <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><span class="visually-hidden">unread messages</span>
                                </span>
                             </button>
                             </a>
                                <button class="btn btn-success"><a class="text-white" href="{{route('post_component.add')}}">Add New Information</a></button>
                            </div>
                        </div>
                        <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Post Des  </th>
                            <th scope="col">Creator Id</th>
                            <th scope="col">DoB </th>
                            <th scope="col">Created </th>
                            <th scope="col">Updated</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $data)
                            <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->post_title}}</td>
                            <td>{{$data->post_desc}}</td>
                            <td>{{$data->creator}}</td>
                            
                            <td> <img src="" alt="" class="" height="80px" width="auto"></td>
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
                              
                                    <li><a class="dropdown-item" href="{{route('post_component.edit',$data->id)}}">Edit</a></li>
                            
                                    <li><a class="dropdown-item" href="{{route('post_component.view',$data->id)}}">View</a></li>
                                    <li><a class="dropdown-item" href="{{route('post_component.softdelete',$data->id)}}" >Delete</a></li>
                                    <li><a class="dropdown-item" href="{{route('post_component.testmail',$data->id)}}" >Delete</a></li>
                                    <hr>

                                    @if(Gate::allows('isUserid'))
                                    <li><a class="dropdown-item" href="#">Gete with Permission </a></li>
                                    @endif

                                    @cannot('isUserid')
                                    <li><a class="dropdown-item" href="#">Gete without Permission </a></li>
                                    @endcan
                                    <li><a class="dropdown-item" href="{{route('post_component.testmail',$data->id)}}" >Test Mail send</a></li>


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