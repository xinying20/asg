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
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br/>
            <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div><br/>
            <?php endif; ?>
            <table class="table table-hover">
                <form method="GET" action="<?php echo e(route('addStaff')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-secondary">Add Staff</button>
                </form>
                <form method="GET" action="<?php echo e(route('staffs.xsl')); ?>">
                    <?php echo csrf_field(); ?>
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
                    <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($staff['staffID']); ?></td>
                        <td><?php echo e($staff['staffName']); ?></td>
                        <td><?php echo e($staff['staffIC']); ?></td>
                        <td><?php echo e($staff['phone']); ?></td>
                        <td><?php echo e($staff['status']); ?></td>
                        <td>
                            <a href="<?php echo e(action('App\Http\Controllers\StaffController@edit', $staff['staffID'])); ?>" 
                               class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/DisplayStaff.blade.php ENDPATH**/ ?>