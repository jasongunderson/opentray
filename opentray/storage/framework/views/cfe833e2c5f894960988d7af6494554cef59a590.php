<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add Resident
            <a href="<?php echo e(route('residents.index')); ?>" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('residents.store')); ?>">

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
                <input type="text" class="form-control col-3" name="facility" value="<?php echo e(old('facility')); ?>" dusk="input_facility" />
                <label for="room" class="col-1">Room:</label>
                <input type="text" class="form-control col-3" name="room" value="<?php echo e(old('room')); ?>" dusk="input_room" />
                <label for="dine" class="col-1">Dining Area:</label>
                <input type="text" class="form-control col-3" name="dine" value="<?php echo e(old('dine')); ?>" dusk="input_dine" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="likes" class="col-1">Likes:</label>
                <input type="text" class="form-control col-3" name="likes" value="<?php echo e(old('likes')); ?>" dusk="input_likes" />
                <label for="dislikes" class="col-1">Dislikes:</label>
                <input type="text" class="form-control col-3" name="dislikes" value="<?php echo e(old('dislikes')); ?>" dusk="input_dislikes" />
                <label for="allergies" class="col-1">Allergies:</label>
                <input type="text" class="form-control col-3" name="allergies" value="<?php echo e(old('allergies')); ?>" dusk="input_allergies" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="comment" class="col-1">Comments:</label>
                <input type="text" class="form-control col-11" name="comment" value="<?php echo e(old('comment')); ?>" dusk="input_comment" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_add">Add Resident</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/residents/create.blade.php ENDPATH**/ ?>