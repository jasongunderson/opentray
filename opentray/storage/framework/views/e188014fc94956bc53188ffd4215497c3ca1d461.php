<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update A Facility
            <a href="<?php echo e(route('facilities.index')); ?>" class="btn btn-primary">Back</a>
        </h1>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><br />
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('facilities.update', $facility->id)); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-inline row">
                <span class="col-3"></span>
                <label for="fname" class="col-1">Name</label>
                <input type="text" class="form-control col-5" name="name" value="<?php echo e($facility->name); ?>" />
                <span class="col-3"></span>
            </div>
            <br>
            <button type="submit" class="btn btn-primary col">Update Facility</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/facilities/edit.blade.php ENDPATH**/ ?>