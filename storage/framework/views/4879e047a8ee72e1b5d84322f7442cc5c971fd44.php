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
            <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div>
            <?php endif; ?>
            <table class="table table-hover">
                <form method="GET" action="<?php echo e(route('addCust')); ?>">
                    <?php echo csrf_field(); ?>
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
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($users['cusID']); ?></td>
                        <td><?php echo e($users['cusName']); ?></td>
                        <td><?php echo e($users['cusIC']); ?></td>
                        <td><?php echo e($users['phone']); ?></td>
                        <td><?php echo e($users['email']); ?></td>
                        <td>
                            <a href="<?php echo e(action('App\Http\Controllers\CustController@edit', $users['cusID'])); ?>" 
                               class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/searchCust.blade.php ENDPATH**/ ?>