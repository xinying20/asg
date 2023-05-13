<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Reset Password</title>
        <link rel="stylesheet" href="{{url('/css/staff.css')}}" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Reset Password
            </div>
            <div class="form">
                <form method="post" action="{{route('updatePassword')}}">
                    @csrf

                    <div class="inputfield">
                        <label>Email</label>
                        <input type="text" class="input" name="email" required value="{{$email}}">
                    </div>  
                    <div class="inputfield">
                        <label>Password</label>
                        <input type="text" class="input" name="password" required>
                    </div>  
                    <div class="inputfield">
                        <label>Confirm Password</label>
                        <input type="text" class="input" name="cpassword" required>
                    </div>  
                    @if($errors->has('confirm'))
                    <div class="alert alert-danger" role="alert">{{ $errors->first('confirm') }}</div>
                    @endif

                    <div class="inputfield">
                        <input type="submit" value="Register" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
