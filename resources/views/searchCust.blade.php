<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <br/>
            @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
            </div>
            @endif
            <table class="table table-hover">
                <form method="GET" action="{{ route('addCust') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Add Cust</button>
                </form>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer IC</th>
                        <th>Phone No</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)
                    <tr>
                        <td>{{$users['cusID']}}</td>
                        <td>{{$users['cusName']}}</td>
                        <td>{{$users['cusIC']}}</td>
                        <td>{{$users['phone']}}</td>
                        <td>{{$users['email']}}</td>
                        <td>
                            <a href="{{action('App\Http\Controllers\CustController@edit', $users['cusID'])}}" 
                               class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
