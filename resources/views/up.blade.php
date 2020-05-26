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
 <div class="row">
          <div class="col-lg-12">
            
            <h2 class="text-center"> Upload your profile picture</h2>
                   
              <br>
            
<div class="card-body">

@if(session()->has('message'))


<div class="alert alert-success">{{session()->get('message')}} </div>
@elseif(session()->has('error'))

<div class="alert alert-danger">{{session()->get('error')}} </div>


@endif
                    
<form action="/upload" method="post"enctype="multipart/form-data">

  @csrf

  <input type="file" name="image" />
  <input type="submit" value="upload"  >
</form>





                        </div>


 

 
  <body>
                
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
