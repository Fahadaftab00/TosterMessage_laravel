

 


{{-- Include this file whereever you want to use it and pass it to controller file but keep in mind return should be only redirect not return view. --}}


{{-- like this 


      return redirect('/show')->with('success', 'Record updated successfully!'); 

--}}



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
 
  @if(Session::has('success') || Session::has('error') || Session::has('fail') || Session::has('failed'))
  {
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('fail'))
    toastr.error("{{ Session::get('fail') }}");
    @endif

    @if(Session::has('failed'))
    toastr.error("{{ Session::get('failed') }}");
    @endif
  }
  @endif
    
  </script>




