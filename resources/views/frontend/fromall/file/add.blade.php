@extends('layouts.webmaster')
@section('web_content')

<div class="container mt-5">
    <div class="col-lg-8 offset-lg-2 card">

        <form action="{{route('file_upload.submit')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <h3>File Upload Form</h3>
           
            <div class="mb-3">
                <label for="title" class="form-label">File Title</label>
                <input type="text" name="title" max="5" class="form-control" id="title" aria-describedby="name">
                <div id="title" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Upload Image</label>
                <input type="file" name="image" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                <div id="image" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">@error('image'){{$message}} @enderror</span>
            </div>
            <!-- end  -->
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
    </div>
    
@endsection