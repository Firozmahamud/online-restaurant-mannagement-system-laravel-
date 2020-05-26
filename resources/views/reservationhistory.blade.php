<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>reservation details</title>

        

        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datetimepicker.min.css')}}">


        <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
        <script type="{{asset('frontend/text/javascript')}}" src="{{asset('frontend/js/jquery.flexslider.min.js')}}"></script>
        <script type="{{asset('frontend/text/javascript')}}">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

     


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{asset('frontend/images/Logo_main.png')}}" class="logo img-responsive">
                    </a>
                </div>








                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">

                       
                    
              
                         @if (Route::has('login'))


                           @auth
                           <li><a href="{{ url('/home') }}">home </a></li>
                           <li><a href="{{ url('/profile') }}">profile</a></li>
                            <li><a href="{{ url('/reservation') }}">reservation</a></li>
                            <li><a href="{{ url('/reservationhistory') }}">reservation history</a></li>
                            <li><a href="{{ url('/edit') }}">edit profile</a></li>
                            <li><a href="{{ url('/up') }}">upload picture</a></li>
                        
                       

                       @endauth

                          @endif
                   



                    
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                            @if(auth::user()->img)
                            
                                    <img src="{{'/storage/images/'.Auth::user()->img}}" alt="img" width="20"/>
                            @endif

                                    {{ Auth::user()->name }} 

                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

       
 <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">
              Welcome to MaMa's kitchen
            </h1><br>
            <h2 class="text-center">Reservation History</h2>
            

   <font color="cyan">           
              <table class="table table-bordered table-stripped table-hover text-center">
              
              <tr>
                  <th width="150px"> Name</th>
                  <th width="150px">email address</th>
                  <th width="150px">phone number</th>
                  <th width="150px">date and time</th>
                  <th width="150px">cancelation</th>
                </tr>
                <tr>
                    @foreach($product as $pro)

                    
                  <td>{{ $pro->name }}</td>
                  <td>{{ $pro->email }}</td>
                  <td>{{ $pro->phone }}</td>
                  <td>{{ $pro->dateandtime }}</td>
                  <td>
                      <a class="btn btn-danger" href="{{ URL::to('delete/product/'.$pro->id) }}" onclick="return confirm('are you sure to cancel reservation?')">cancel</a>

                     
                  </td>
                   @endforeach
                  
              </tr>




               
              </table>
  </font>  

            </div>
          </div>
        </div>

      </div>

    </div>

    




    

        



























        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                               

                                 &copy; Copyright, 2020 </a> Theme by Firoz</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.mixitup.min.js')}}" ></script>
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.hoverdir.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jQuery.scrollSpeed.js')}}"></script>
        <script src="{{asset('frontend/js/script.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>

        <script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
        

    </body>
</html>