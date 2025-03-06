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


            <form action="{{route('user_contact.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>User Contact Form</h3>
               
                <div class="mb-3">
                    <label for="title" class="form-label">User Name </label>
                    <input type="text" name="user_name" id="teacher_name"  class="form-control"  aria-describedby="name" >
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->
                <div class="mb-3">
                    <label for="title" class="form-label">User Email </label>
                    <input type="email" name="user_email" id="teacher_name"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->
                <div class="mb-3">
                    <label for="title" class="form-label">User phone </label>
                    <input type="text" name="user_phone" id="teacher_name"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->
                <div class="mb-3">
                    <label for="title" class="form-label">Subject</label>
                    <input type="text" name="subject" id="teacher_name"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->
                <div class="mb-3">
                    <label for="title" class="form-label">messages</label>
                    <textarea name="messages" id="messages"class="form-control" ></textarea>
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->
                <div class="mb-3">
                    <label for="title" class="form-label">Upload File</label>
                    <input type="file" name="file" id="file"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- end  -->




                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>
    </div>
</section>
@endsection