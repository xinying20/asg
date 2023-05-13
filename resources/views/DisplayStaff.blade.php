<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display Staff List</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br/>
            @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success')}}</p>
            </div><br/>
            @endif
            <table class="table table-hover">
                <form method="GET" action="{{ route('addStaff') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Add Staff</button>
                </form>
                <form method="GET" action="{{ route('staffs.xsl') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Generate XSL</button>
                </form>
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>IC</th>
                        <th>Phone No</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staff as $staff)
                    <tr>
                        <td>{{$staff['staffID']}}</td>
                        <td>{{$staff['staffName']}}</td>
                        <td>{{$staff['staffIC']}}</td>
                        <td>{{$staff['phone']}}</td>
                        <td>{{$staff['status']}}</td>
                        <td>
                            <a href="{{action('App\Http\Controllers\StaffController@edit', $staff['staffID'])}}" 
                               class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
