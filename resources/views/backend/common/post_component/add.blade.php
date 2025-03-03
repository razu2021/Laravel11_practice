@extends('layouts.adminmaster')
@section('admin_contents')
<section class="">
    <div class="container mt-5 mb-5">
    
       


        <div class="col-lg-8 offset-lg-2 card p-5">

 
            @if(Session::has('success_messages'))
                <x-comon_com.post-component type="success" :messages="Session::get('success_messages')" id="successAlert" class="successAlert"/>
            @elseif(Session::has('error_messages'))
                <x-comon_com.post-component type="danger" :messages="Session::get('error_messages')"/>
            @endif




            

    

        <!-- component load here  -->
        


        

            <form action="{{route('post_component.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>File Upload Form</h3>
                
                <div class="mb-3">
                    <label for="title" class="form-label">News Title </label>
                    <input type="text" name="post_title" id="post_title"  class="form-control"  aria-describedby="name" value ="{{old('post_title')}}">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                    <span class="text-danger">@error('post_title'){{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label"> News Description</label>
                    <input type="text" name="post_desc" id="teacher_email"  class="form-control"  aria-describedby="name" value="{{old('post_desc')}}">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                    <span class="text-danger">@error('post_desc'){{$message}} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>
    </div>
</section>
@endsection