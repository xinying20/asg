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
        <link rel="stylesheet" href="<?php echo e(url('/css/staff.css')); ?>" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                Staff Profile
            </div>
            <div class="form">
                <form method="post" action="<?php echo e(route('custEdit', ['custID' => $id])); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="inputfield">
                        <label>Customer ID</label>
                        <input type="text" class="input" name="id" required value="<?php echo e($cust->cusID); ?>">
                    </div>  

                    <div class="inputfield">
                        <label>Customer Name</label>
                        <input type="text" class="input" name="name" required value="<?php echo e($cust->cusName); ?>">
                    </div>  
                    <div class="inputfield">
                        <label>Customer IC</label>
                        <input type="text" class="input" name="ic" required value="<?php echo e($cust->cusIC); ?>">
                    </div>  
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="phone" required value="<?php echo e($cust->phone); ?>">
                    </div>  
                    <div class="inputfield">
                        <label>Email</label>
                        <input type="email" class="input" name="email" required value="<?php echo e($cust->email); ?>"> 
                    </div>  
                    <div class="inputfield">
                        <input type="submit" value="Update " class="btn">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/editCust.blade.php ENDPATH**/ ?>