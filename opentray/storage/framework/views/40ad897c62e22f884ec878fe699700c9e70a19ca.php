<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add An Employee
            <a href="<?php echo e(route('staff.index')); ?>" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <div>
            <form method="post" action="<?php echo e(route('staff.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-inline row">
                    <label for="fname" class="col-1">First Name:</label>
                    <input type="text" class="form-control col-5" name="fname" value="<?php echo e(old('fname')); ?>" dusk="input_fname" />
                    <label for="lname" class="col-1">Last Name:</label>
                    <input type="text" class="form-control col-5" name="lname" value="<?php echo e(old('lname')); ?>" dusk="input_lname" />
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
                    <select class="form-control col-5" name="permission" value="<?php echo e(old('permission')); ?>" dusk="input_permission">
                        <option value="" selected disabled hidden></option>
                        <option value=3>3</option>
                        <option value=2>2</option>
                        <option value=1>1</option>
                        <option value=0>0</option>
                    </select>
                </div>
                <br>
                <div class="form-inline row">
                    <label for="uname" class="col-1">Username:</label>
                    <input type="text" class="form-control col-3" name="uname" value="<?php echo e(old('uname')); ?>" dusk="input_uname" />
                    <label for="password" class="col-1">Password:</label>
                    <input type="password" class="form-control col-3" name="password" value="" dusk="input_password" />
                    <label for="password_confirm" class="col-1">Confirm Password:</label>
                    <input type="password" class="form-control col-3" name="password_confirm" value="" dusk="input_password_confirm" />
                </div>
                <br>
                <button type="submit" class="btn btn-primary col" dusk="button_add">Add Employee</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/staff/create.blade.php ENDPATH**/ ?>