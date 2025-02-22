@extends('layouts.adminmaster')
@section('admin_contents')
<section class="">
    <div class="container mt-5 mb-5">
        <div class="col-lg-8 offset-lg-2 card p-5">
            <form action="{{route('newses.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>File Upload Form</h3>
                
                <div class="mb-3">
                    <label for="title" class="form-label">News Title </label>
                    <input type="text" name="news_title" id="teacher_phone"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label"> News Description</label>
                    <input type="text" name="news_desc" id="teacher_email"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>
    </div>
</section>
    
@endsection