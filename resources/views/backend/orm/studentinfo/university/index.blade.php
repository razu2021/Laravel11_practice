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
                            <a href="{{route('university.recycle')}}">
                            <button type="button" class="btn btn-warning position-relative mx-2">
                                Recycle <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><span class="visually-hidden">unread messages</span>
                                </span>
                             </button>
                             </a>
                                <button class="btn btn-success"><a class="text-white" href="{{route('university.add')}}">Add New Information</a></button>
                            </div>
                        </div>
                        <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Father Name </th>
                            <th scope="col">Mother Name </th>
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
                            <th scope="row">{{$data->university_id}}</th>
                            <td>{{$data->university_name}}</td>
                            <td>xxxxxxx</td>
                            <td>xxxxx</td>
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
                                    <li><a class="dropdown-item" href="">Edit</a></li>
                                    <li><a class="dropdown-item" href="{{route('university.view',$data->university_id)}}">View</a></li>
                                    <li><a class="dropdown-item" href="{{route('university.softdelete',$data->university_id)}}" >Delete</a></li>
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


<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card">
                <h3 class="pb-2 pt-2">All Teacher Information </h3>
                <div class="tablearea">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">email</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($all as $university)
                            @foreach ($university->teachers as $teacher)
                                @if($university->TeacherContact)
                                    @foreach ($university->TeacherContact as $teachercontact)
                                        <tr>
                                            <td>{{ $university->university_name }}</td>
                                            <td>{{ $teacher->teacher_name }}</td>
                                            <td>{{ $university->TeacherContact->teacher_phone }}</td>
                                            <td>{{ $university->TeacherContact->teacher_email }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection