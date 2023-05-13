<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Reset Password</title>
        <link rel="stylesheet" href="<?php echo e(url('/css/staff.css')); ?>" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Reset Password
            </div>
            <div class="form">
                <form method="post" action="<?php echo e(route('updatePassword')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="inputfield">
                        <label>Email</label>
                        <input type="text" class="input" name="email" required value="<?php echo e($email); ?>">
                    </div>  
                    <div class="inputfield">
                        <label>Password</label>
                        <input type="text" class="input" name="password" required>
                    </div>  
                    <div class="inputfield">
                        <label>Confirm Password</label>
                        <input type="text" class="input" name="cpassword" required>
                    </div>  
                    <?php if($errors->has('confirm')): ?>
                    <div class="alert alert-danger" role="alert"><?php echo e($errors->first('confirm')); ?></div>
                    <?php endif; ?>

                    <div class="inputfield">
                        <input type="submit" value="Register" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/ResetPass.blade.php ENDPATH**/ ?>