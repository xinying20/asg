<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Login</title>
        <link rel="stylesheet" href="<?php echo e(url('/css/style.css')); ?>" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    </head>
    <body>
        <div class="blob"></div>
        <div class="wrapper"> 
            <form method="post" action="<?php echo e(url('Staff@login')); ?>">
                <?php echo csrf_field(); ?>
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="staffID" required >
                    <label>Staff ID</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password"  name="password" required> 
                    <label>Password</label>
                </div><br/>
                <?php if($errors->has('warning')): ?>
                <div class="alert alert-danger" role="alert"><?php echo e($errors->first('warning')); ?></div>
                <?php endif; ?>

                <br>
                <div class="remember-forgot">
                    <a href="<?php echo route('resetPass') ?>">Forgot Password</a>
                </div>
                <button type="submit">Login</button>

            </form>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/StaffLogin.blade.php ENDPATH**/ ?>