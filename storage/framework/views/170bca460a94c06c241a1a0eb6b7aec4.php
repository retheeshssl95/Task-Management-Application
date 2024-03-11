
<?php $__env->startSection('home'); ?>
  
    <div class="container">
        <div class="row">
            <div class="col-sm-4 my-4 mx-auto p-4 bg-light" style="border-radius: 20px;">
                <form action="<?php echo e(route('login-user')); ?>" method="post">
                    <!-- Start Alert Message -->  
                    <?php if($message=Session::get('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show ">
                        <strong>Success </strong><?php echo e($message); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <?php if($message=Session::get('fail')): ?>
                    <div class="alert alert-danger alert-dismissible fade show ">
                        <strong>Fail</strong><?php echo e($message); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                
                    </div>
                    <?php endif; ?>
                    <!-- End Alert Message --> 
                    
                    <?php echo csrf_field(); ?>
                    <h3 class="text-center"><strong>Login</strong></h3><hr>
                    <div class="form-group">
                        <label for="email" class="form-label">Email : </label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" value="<?php echo e(old('email')); ?>" class="form-control">
                        <span class='text-danger'><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password : </label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" value="<?php echo e(old('password')); ?>" class="form-control">
                        <span class='text-danger'><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="signup">Login</button>
                    </div>
                    <div class="text-center"><hr>
                        <p> Don't have an account? <a href="register"> Register here</a></p>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </div>
  

<?php $__env->stopSection(); ?>








       

    
<?php echo $__env->make('.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/auth/login.blade.php ENDPATH**/ ?>