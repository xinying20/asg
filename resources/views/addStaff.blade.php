<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Staff</title>
        <link rel="stylesheet" href="{{url('/css/staff.css')}}" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">Registration Form</div>
            <div class="form">
                <form method="post" action="{{url('Staff@store')}}">
                    @csrf
                    <div class="inputfield">
                        <label>Staff Name</label>

                        <input type="text" class="input" name="name" required value="{{old('name')}}">

                    </div>  
                    <div class="inputfield">
                        <label>Staff IC</label>
                        <input type="text" class="input" name="ic" required value="{{old('ic')}}">
                    </div>  
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="phone" required value="{{old('phone')}}">
                    </div>  
                    <div class="inputfield">
                        <label>Email</label>

                        <input type="email" class="input" name="email" required value="{{old('email')}}"> 
                    </div>  
                    <div class="inputfield">
                        <label>Status</label>
                        <div class="custom_select">
                            <select name="status">
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                    </div> 
                    <div class="inputfield">
                        <label>Address</label>
                        <textarea class="textarea" name="address"></textarea>
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
