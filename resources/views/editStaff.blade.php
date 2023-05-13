<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Staff</title>
        <link rel="stylesheet" href="{{url('/css/staff.css')}}" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Staff Profile
            </div>
            <div class="form">
                <form method="post" action="{{route('storeEdit', ['staffID' => $id])}}">
                    @csrf
                    <div class="inputfield">
                        <label>Staff ID</label>
                        <input type="text" class="input" name="id" required value="{{$staff->staffID}}">
                    </div>  

                    <div class="inputfield">
                        <label>Staff Name</label>
                        <input type="text" class="input" name="name" required value="{{$staff->staffName}}">
                    </div>  
                    <div class="inputfield">
                        <label>Staff IC</label>
                        <input type="text" class="input" name="ic" required value="{{$staff->staffIC}}">
                    </div>  
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="phone" required value="{{$staff->phone}}">
                    </div>  
                    <div class="inputfield">
                        <label>Email</label>
                        <input type="email" class="input" name="email" required value="{{$staff->email}}"> 
                    </div>  

                    <div class="inputfield">
                        <label>Status</label>
                        <div class="custom_select" value="{{$staff->status}}">
                            <select name="status">
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Token</label>
                        <div class="custom_select" value="{{$staff->token}}">
                            <select name="token">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Address</label>
                        <textarea class="textarea" name="address" required>{{$staff->address}}</textarea>
                    </div>
                    <div class="inputfield">
                        <input type="submit" value="Update " class="btn">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
