@extends('.welcome')
@section('home')
  
    <div class="container">
        <div class="row">
            <div class="col-sm-4 my-4  mx-auto p-4 bg-light" style="border-radius: 20px;">           
                <form action="{{route('register-user')}}" method="post">

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
                    <h3 class="text-center"><strong>Create An Account</strong></h3><hr>
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name : </label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{old('name')}}" class="form-control">
                        <span class='text-danger'>@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email : </label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" value="{{old('email')}}" class="form-control">
                        <span class='text-danger'>@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password : </label>
                        <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}" class="form-control">
                        <span class='text-danger'>@error('password') {{$message}} @enderror</span>
                    </div>
                    {{-- <div class="form-group">
                        <label for="confirm_password" class="form-label">Confirm Password : </label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" value="{{old('confirm_password')}}" class="form-control">
                        <span class='text-danger'>@error('confirm_password') {{$message}} @enderror</span>
                    </div> --}}
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="signup"> Register</button>
                    </div>
                    <div class="text-center"><hr>
                        <p>Have already an account? <a class="text-center" href="/">Login here</a></p>
                     </div>
                </form>
            </div>
        </div>
    </div>
  

@endsection



    