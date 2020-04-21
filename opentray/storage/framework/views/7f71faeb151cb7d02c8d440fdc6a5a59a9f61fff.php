<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add A Facility
            <a href="<?php echo e(route('facilities.index')); ?>" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <div>
            <form method="post" action="<?php echo e(route('facilities.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-inline row">
                    <span class="col-3"></span>
                    <label for="fname" class="col-1">Name:</label>
                    <input type="text" class="form-control col-5" name="name" value="<?php echo e(old('name')); ?>" dusk="input_name" />
                    <span class="col-3"></span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary col" dusk="button_add">Add Facility</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/facilities/create.blade.php ENDPATH**/ ?>