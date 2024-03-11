@extends('.welcome')
@section('home')
  
    <div class="container">
        <div class="row">
            <div class="col-sm-4 my-4 mx-auto p-4 bg-light" style="border-radius: 20px;">
                <form action="{{route('login-user')}}" method="post">
                    <!-- Start Alert Message -->  
                    @if($message=Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show ">
                        <strong>Success </strong>{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if($message=Session::get('fail'))
                    <div class="alert alert-danger alert-dismissible fade show ">
                        <strong>Fail</strong>{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                
                    </div>
                    @endif
                    <!-- End Alert Message --> 
                    
                    @csrf
                    <h3 class="text-center"><strong>Login</strong></h3><hr>
                    <div class="form-group">
                        <label for="email" class="form-label">Email : </label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" value="{{old('email')}}" class="form-control">
                        <span class='text-danger'>@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password : </label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" value="{{old('password')}}" class="form-control">
                        <span class='text-danger'>@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="signup">Login</button>
                    </div>
                    <div class="text-center"><hr>
                        <p> Don't have an account? <a href="register"> Register here</a></p>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </div>
  

@endsection








       

    