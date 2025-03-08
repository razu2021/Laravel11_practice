@extends('layouts.adminmaster')
@section('admin_contents')
<section class="">
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8 card p-5">
            @if(Session::has('success_messages'))
                <x-comon_com.post-component type="success" :messages="Session::get('success_messages')" id="successAlert" class="successAlert"/>
            @elseif(Session::has('error_messages'))
                <x-comon_com.post-component type="danger" :messages="Session::get('error_messages')"/>
            @endif
        <!-- component load here  -->
            <form action="{{route('email_setting.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3> Add your Email Credentials </h3>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Mail Mailer </label>
                        <input type="text" name="mail_mailer" id="mail_mailer"  class="form-control"  aria-describedby="name" value ="{{old('mail_mailer')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_mailer'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail Host</label>
                        <input type="text" name="mail_host" id="mail_host"  class="form-control"  aria-describedby="name" value="{{old('mail_host')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_host'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Mail Port</label>
                        <input type="text" name="mail_port" id="mail_port"  class="form-control"  aria-describedby="name" value="{{old('mail_port')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_port'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail UserName</label>
                        <input type="text" name="mail_username" id="mail_username"  class="form-control"  aria-describedby="name" value="{{old('mail_username')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_username'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail Password</label>
                        <input type="text" name="mail_password" id="mail_password"  class="form-control"  aria-describedby="name" value="{{old('mail_password')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('post_desc'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail Encryption</label>
                        <input type="text" name="mail_encryption" id="mail_encryption"  class="form-control"  aria-describedby="name" value="{{old('mail_encryption')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_encryption'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail From Address</label>
                        <input type="text" name="mail_from_address" id="mail_from_address"  class="form-control"  aria-describedby="name" value="{{old('mail_from_address')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_from_address'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label"> Mail From Name</label>
                        <input type="text" name="mail_from_name" id="mail_from_name"  class="form-control"  aria-describedby="name" value="{{old('mail_from_name')}}">
                        <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                        <span class="text-danger">@error('mail_from_name'){{$message}} @enderror</span>
                    </div>
                    {{-- end --}}
                    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        {{-- col end  --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="sidebar_content">
                        <h4>Total Eamil in Database </h4>
                        <h2>05</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem tenetur excepturi nam reprehenderit at illo vel ut perspiciatis tempore explicabo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection