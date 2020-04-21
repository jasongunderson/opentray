<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update An Employee
            <a href="<?php echo e(route('staff.index')); ?>" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <form method="post" action="<?php echo e(route('staff.update', $staff->id)); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value="<?php echo e($staff->fname); ?>" dusk="input_fname" />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value="<?php echo e($staff->lname); ?>" dusk="input_lname" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <select class="form-control col-5" name="facility" value="<?php echo e(old('facility')); ?>" dusk="input_facility">
                    <option value="" selected disabled hidden></option>
                    <?php $__currentLoopData = $facilities->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=<?php echo e($facility['id']); ?>><?php echo e($facility['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="permission" class="col-1">Permission:</label>
                <select class="form-control col-5" name="permission" value=<?php echo e(old('permission')); ?> dusk="input_permission">
                    <option value="" selected disabled hidden></option>
                    <option value=3>3</option>
                    <option value=2>2</option>
                    <option value=1>1</option>
                    <option value=0>0</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update Employee</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/staff/edit.blade.php ENDPATH**/ ?>