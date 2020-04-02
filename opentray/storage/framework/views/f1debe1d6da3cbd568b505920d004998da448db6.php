<?php $__env->startSection('main'); ?>
<div class="row justify-content-md-center">
    <div class="col-sm-6">
        <h1 class="display-3">Sign In</h1>
        <div>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <form method="get" action="<?php echo e(route('auth')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" name="uname" dusk="input_uname" />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" dusk="input_password" />
                </div>
                <button type="submit" class="btn btn-primary" dusk="button_signin">Sign In</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/welcome.blade.php ENDPATH**/ ?>