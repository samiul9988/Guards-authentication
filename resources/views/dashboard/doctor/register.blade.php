<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h4>Doctor Registration</h4>
                <form action="{{route('doctor.create')}}" method="POST">
                    @if(Session::get('success'))
                        <div class="alert alert-danger">
                            {{(Session::get('success'))}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{(Session::get('fail'))}}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{old('name')}}">
                        <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="{{old('email')}}">
                        <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Hospital</label>
                        <input type="text" name="hospital" class="form-control" placeholder="Enter Hospital Name" value="{{old('hospital')}}">
                        <span class="text-danger">@error ('hospital') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Your Password" value="{{old('password')}}">
                        <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="text" name="cpassword" class="form-control" placeholder="Enter Your Confirm Password" value="{{old('cpassword')}}">
                        <span class="text-danger">@error ('cpassword') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    <div class="form-group">
                        <a href="{{route('doctor.login')}}">I already have an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>