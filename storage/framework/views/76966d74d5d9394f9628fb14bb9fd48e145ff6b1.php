<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://foogleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(url('/css/cust.css')); ?>" type="text/css">
        <title></title>
    </head>
    <body>
        <div class="formbold-main-wrapper">
            <div sclass="formbold-form-wrapper">
                <form method="post" action="<?php echo e(route('store')); ?>">
                     <?php echo csrf_field(); ?>
                    <div class="formbold-form-title">
                        <h2 class="">Add Customer</h2>
                    </div>

                   <div class="formbold-mb-3">
                        <label for="address2" class="formbold-form-label">
                            Customer Name
                        </label>
                        <input type="text" name="cusName" id="cusName" class="formbold-form-input" />
                    </div>
                   <div class="formbold-mb-3">
                        <label for="address2" class="formbold-form-label">
                            Customer IC
                        </label>
                        <input type="text" name="cusIC" id="cusIC" class="formbold-form-input" />
                    </div>
                   <div class="formbold-mb-3">
                        <label for="address2" class="formbold-form-label">
                            Phone Number
                        </label>
                        <input type="text" name="phone" id="phone" class="formbold-form-input" />
                    </div>
                    
                    <div class="formbold-mb-3">
                        <label for="address2" class="formbold-form-label">
                            Email
                        </label>
                        <input type="email" name="email" id="email" class="formbold-form-input" />
                    </div>

                    <button class="formbold-btn">Add</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asd\resources\views/addCust.blade.php ENDPATH**/ ?>