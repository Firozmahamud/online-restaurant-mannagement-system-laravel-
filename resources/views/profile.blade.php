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
                    <h2>
Hello  {{ Auth::user()->name }}, <br>

                </h2>



              <br>
            



  <!DOCTYPE html>
  <html lang="en">

 
  <body>


    

    
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center">
              Welcome to MaMa's kitchen
            </h1><br>
            <h2 class="text-center">Profile information</h2>
            

   <font color="cyan">           
              <table class="table table-bordered table-stripped table-hover text-center">
                <tr>
                  <td>
                    <h4><strong>Username</strong></h4>
                  </td>
                  <td>
                    <h4><strong>{{ Auth::user()->name }} </strong></h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    
                    <h4><strong>Email</strong></h4>
                  </td>
                  <td>
                    <h4><strong>{{ Auth::user()->email }}</strong></h4>
                  </td>
                </tr>
                
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
