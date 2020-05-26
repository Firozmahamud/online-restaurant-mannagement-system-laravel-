@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
              <br>
            



  <!DOCTYPE html>
  <html lang="en">

 
  <body>


    

    
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">
             Edit Your Profile
            </h1><br>
            <h2 class="text-center">Profile information</h2>

            
<form action="{{url('update/user/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
  @csrf
   <font color="cyan">           
              <table class="table table-bordered table-stripped table-hover text-center">
                <tr>
                  <td>
                    <h4><strong>Username</strong></h4>
                  </td>
                  <td>

                    <input type="text" class="form-control" value="{{ Auth::user()->name }} ">
                   
                  </td>
                </tr>
                <tr>
                  <td>
                    
                    <h4><strong>Email</strong></h4>
                  </td>
                  <td>
                     <input type="email" name="email" id="" value="{{ Auth::user()->email }}" class="form-control">
                    
                  </td>
                </tr>


                 <td>
                <h4><strong>Password</strong></h4>
              </td>
              <td>
                <input type="password" name="password" id="" class="form-control">
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <input type="submit" class="btn btn-success" name="signup" style="width: 40%;" value="Update">
               
              </td>
                
              </table>
  </font>  

            </div>
          </div>
        </div>

      </div>

    </div>

    

          
  </body>

  </html>

    </div>
  </div>

        </div>
    </div>
</div>
@endsection
