@extends('layouts.adminmaster')
@section('admin_contents')

<div class="container mt-5">
    <div class="col-lg-8 offset-lg-2 card">

        <form action="{{route('file_upload.update')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <h3>File Upload Form</h3>
           
        
                <input type="hidden" name="id" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$data->file_id}}">
                <input type="hidden" name="slug" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$data->slug}}">
                
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">File Title</label>
                <input type="text" name="title" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name" value="{{$data->file_title}}">
                <div id="title" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Upload Image</label>
                <input type="file" name="image" max="5" class="form-control" id="image" aria-describedby="image"
                onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])">
                <div id="image" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">@error('image'){{$message}} @enderror</span>
            </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="imges">
                   
                        @if($data->file_name !== "")
                            <img id="preview_image" src="{{asset('storage/uploads/images/'.$data->file_name)}}" alt="file" height="180px" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding:5px">
                        @else
                            <img src="{{asset('contents/assets/frontend/assets/images/logo.png')}}" alt="avatar image" height="100px" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;padding:5px">
                        @endif
                    </div>
                </div>
            </div>
            <!-- row end  -->



            <!-- end  -->
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

    </div>
    </div>
    
@endsection