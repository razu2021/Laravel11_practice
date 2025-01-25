@extends('layouts.webmaster')
@section('web_content')


@if (session()->has('flasher'))
    @foreach (session('flasher') as $flasherMessage)
        <div class="alert alert-{{ $flasherMessage['type'] }}">
            {{ $flasherMessage['message'] }}
        </div>
    @endforeach
@endif



 @if(Session::has('success_messages'))
    <div>
        {{Session::get('success_messages')}}
    </div>
 @endif

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <div class="container mt-5">
        <div class="col-lg-8 offset-lg-2 card">
            <form action="flasher-form" method="post">
              <h3>User Contact Form</h3>
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" name="name" max="5" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                  <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
             
                <!-- end  -->
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>

</div>
@endsection
