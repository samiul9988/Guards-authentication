<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-color: antiquewhite">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top:45px;">
                <h4>Doctor Dashboard</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{Auth::guard('doctor')->user()->name}}</td>
                            <td>{{Auth::guard('doctor')->user()->email}}</td>
                            <td>{{Auth::guard('doctor')->user()->Hospital}}</td>
                            <td>
                                <a href="{{route('doctor.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{route('doctor.logout')}}" method="POST" id="logout-form">@csrf</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>