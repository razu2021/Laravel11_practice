@extends('layouts.adminmaster')
@section('admin_contents')
<section class="">
    <div class="container mt-5 mb-5">
        <div class="row">
        <div class="col-lg-8 ">
           <div class="card">
            <div class="card-body">
                <h4> student information</h4>
                <hr>
                <div class="student_info">
                    <h3>{{$alldata->student_name}}</h3>
                    <p>{{ optional($alldata->student_contact)->phone }}</p>
                    <p>{{ optional($alldata->student_contact)->email }}</p>
                </div>
                <hr>
                <div class="student_info">
                 @if($alldata)
                  @foreach ($alldata->student_hobby as $hobbys)
                      <p>{{$hobbys->hobby}}</p>
                     
                  @endforeach
                 @endif

 
                </div>

            </div>
           </div>
        </div>
        <!-- col end  -->
        <div class="col-lg-4">
           <div class="card">
            <div class="card-body">
                <h4>Student Sidebar</h4>
                <hr>
                <div class="student_menu">
                    <ul>
                        <li><a href="#" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Father Information</a></li>
                        <li><a href="#" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$alldata->student_id}}">student Contact Information</a></li>
                        
                    </ul>
                </div>
            </div>
           </div>
        </div>
        <!-- col end  -->
        </div>
    </div>
</section>
    

<!--  add information modla  -->
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$alldata->studentid}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section>
        <form action="{{route('student_contact.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>File Upload Form</h3>
                <input type="hidden" name="student_unique_id" id="phone"  class="form-control"  aria-describedby="name" value="{{$alldata->studentid}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Student Phone Number </label>
                    <input type="text" name="phone" id="phone"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Father Email Number </label>
                    <input type="text" name="email" id="email" class="form-control"  aria-describedby="name">
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
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  add information modla  -->
<!--  add information modla  -->



<!-- Modal student hobby  -->
<div class="modal fade" id="exampleModal{{$alldata->student_id}}hobby" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section>
        <form action="{{route('student_hobby.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <h3>Student Hobby</h3>
                <input type="hidden" name="student_unique_id" id="phone"  class="form-control"  aria-describedby="name" value="{{$alldata->student_id}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Student Phone Number </label>
                    <input type="text" name="student_hobby" id="phone"  class="form-control"  aria-describedby="name">
                    <div id="title" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Father Email Number </label>
                    <input type="text" name="email" id="email" class="form-control"  aria-describedby="name">
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
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  add information modla  -->




@endsection