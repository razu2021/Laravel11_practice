@extends('layouts.adminmaster')
@section('admin_contents')
<style>
    .errors{
        height: 80vh;
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        justify-content: center;
        align-items: center;
        align-content: center;
        text-align: center;
        background-color: white;
    }
    .errors h2{
        color:rgb(202, 200, 200);
    }
</style>
<section class="m-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="errors">
                    <h2> 403 || THIS ACTION IS UNAUTHORIZED. </h2>
                    <button class="btn btn-success"> <a class="text-white" href="#" onclick="goBack()">Go Back </a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>
@endsection