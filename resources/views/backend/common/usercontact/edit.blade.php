@extends('layouts.adminmaster')
@section('admin_contents')

<div class="container mt-5">
    <div class="col-lg-8 offset-lg-2 card p-5">

        <form action="{{route('post_component.update')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <h3>File Upload Form</h3>
           
        
                <input type="hidden" name="id" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$postComponent->id}}">
                <input type="hidden" name="slug" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$postComponent->slug}}">
                
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Title</label>
                <input type="text" name="title" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$postComponent->post_title}}">
                <div id="title" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Description</label>
                <input type="text" name="title" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$postComponent->post_desc}}">
                <div id="title" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
          
            <!-- end  -->
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

    </div>
    </div>
    
@endsection