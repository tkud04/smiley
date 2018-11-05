@include('head')
@include('nav')

<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif   
                    
@if(Session::has('contact-status') && Session::get('contact-status') == "ok")
			 <center><div class="alert alert-success">Message sent!  We will respond shortly. </div></center>
			@endif

@yield('slider')

@yield('content')



@include('cta')
@include('footer')
@include('foot')