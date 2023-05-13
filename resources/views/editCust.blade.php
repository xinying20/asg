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
                <form method="post" action="{{route('custEdit', ['custID' => $id])}}">
                    @csrf
                    <div class="inputfield">
                        <label>Customer ID</label>
                        <input type="text" class="input" name="id" required value="{{$cust->cusID}}">
                    </div>  

                    <div class="inputfield">
                        <label>Customer Name</label>
                        <input type="text" class="input" name="name" required value="{{$cust->cusName}}">
                    </div>  
                    <div class="inputfield">
                        <label>Customer IC</label>
                        <input type="text" class="input" name="ic" required value="{{$cust->cusIC}}">
                    </div>  
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="phone" required value="{{$cust->phone}}">
                    </div>  
                    <div class="inputfield">
                        <label>Email</label>
                        <input type="email" class="input" name="email" required value="{{$cust->email}}"> 
                    </div>  
                    <div class="inputfield">
                        <input type="submit" value="Update " class="btn">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
