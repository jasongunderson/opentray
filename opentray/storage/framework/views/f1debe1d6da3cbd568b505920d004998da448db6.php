<?php $__env->startSection('main'); ?>
<div class="row justify-content-md-center">
    <div class="col-sm-6">
        <h1 class="display-3">Sign In</h1>
        <div>
            <form method="post" action="">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" name="uname" />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/welcome.blade.php ENDPATH**/ ?>