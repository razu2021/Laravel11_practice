<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>    
toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };</script>


@if(Session::has('success_messages'))
  <script>
      toastr.success("{{ Session::get('success_messages') }}");
  </script>
@endif

@if(Session::has('error_messages'))
  <script>
      toastr.error("{{ Session::get('error_messages') }}");
  </script>
@endif

@if(Session::has('info'))
  <script>
      toastr.info("{{ Session::get('info') }}");
  </script>
@endif
@if(Session::has('warning'))
  <script>
      toastr.warning("{{ Session::get('warning') }}");
  </script>
@endif
