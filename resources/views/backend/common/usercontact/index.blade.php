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
                                <button class="btn btn-success"><a class="text-white" href="{{route('user_contact.add')}}">Add New Information</a></button>
                            </div>
                        </div>
                        <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email  </th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">messages</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $data)
                            <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->user_name}}</td>
                            <td>{{$data->user_email}}</td>
                            <td>{{$data->user_phone}}</td>
                            <td>{{$data->subject}}</td>
                            <td>{{$data->messages}}</td>
                           
                            
                            <td>Active</td>
                            <!-- action  -->
                             <td> 
                             <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                    Manage
                                </button>
                                <ul class="dropdown-menu">
                              
                                    <li><a class="dropdown-item" href="{{route('user_contact.edit',$data->id)}}">Edit</a></li>
                            
                                    <li><a class="dropdown-item" href="{{route('user_contact.view',$data->id)}}">View</a></li>
                                    <li><a class="dropdown-item" href="{{route('user_contact.softdelete',$data->id)}}" >Delete</a></li>
                                    <li><a class="dropdown-item" href="{{route('user_contact.restor',$data->id)}}" >Delete</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="{{route('user_contact.messages_reply',$data->id)}}" >Send Mail with Reply</a></li>


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