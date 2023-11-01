<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offser-md-4" style="margin-top: 45px;">
                <h1>User Login</h1>
                <form action="{{route('user.check')}}" method="POST" autocomplete="off">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div> 
                    @endif       
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="{{old('email')}}">
                    </div>
                    <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="********" value="{{old('password')}}">
                    </div>
                    <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="form-group">
                        <a href="{{route('user.register')}}">
                             Register here
                        </a>
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>