<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forgot Password</title>
        <link rel="stylesheet" href="<?php echo e(url('/css/staff.css')); ?>" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Forgot Password
            </div>
            <div class="form">
                <form method="post" action="<?php echo e(url('Staff@reset')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="inputfield">
                        <label>Email</label>
                        <input type="email" class="input" name="email" required> 
                    </div>  
                    <?php if($errors->has('confirm')): ?>
                    <div class="alert alert-danger"><?php echo e($errors->first('confirm')); ?></div>
                    <?php endif; ?>
                    <div class="inputfield">
                        <input type="submit" value="Reset" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/ForgotPass.blade.php ENDPATH**/ ?>