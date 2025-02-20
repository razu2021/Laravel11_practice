@extends('layouts.adminmaster')
@section('admin_contents')
<section class="">
    <div class="container mt-5 mb-5">
        <div class="col-lg-8 offset-lg-2 card p-5">
            <form action="{{route('student.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>Student Contact information</h3>
                <div class="mb-3">
                    <label for="title" class="form-label">Student Name </label>
                    <input type="text" name="student_name" id="student_name"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Father Name </label>
                    <input type="text" name="father_name" id="father_name" class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <label for="title" class="form-label">Mother Name </label>
                    <input type="text" name="mother_name" id="mother_name" class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-3">
                    <label for="title" class="form-label">Date of Birth </label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Upload Image</label>
                    <input type="file" name="image" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                    <div id="image" class="form-text">We'll never share your email with anyone else.</div>
                    <span class="text-danger">@error('image'){{$message}} @enderror</span>
                </div> -->
                <!-- end  -->
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>
    </div>
</section>
    
@endsection