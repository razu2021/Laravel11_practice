@extends('layouts.webmaster')
@section('web_content')

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
    </script>
@endif

<form id="deleteForm" action="{{ route('delete-form') }}" method="POST">
    @csrf <!-- Include CSRF Token for Laravel -->
    @method('DELETE') <!-- Use DELETE method if needed -->
    <button type="button" class="btn btn-danger mt-4" id="deleteButton">Delete</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('deleteButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form programmatically if confirmed
                document.getElementById('deleteForm').submit();
            }
        });
    });
</script>




    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->

    <div class="container mt-5">
        <div class="col-lg-8 offset-lg-2 card">
            <form action="sweet-form" method="post">
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
