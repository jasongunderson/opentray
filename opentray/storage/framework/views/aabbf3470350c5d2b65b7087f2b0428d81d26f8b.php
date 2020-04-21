<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update Resident
            <a href="<?php echo e(route('residents.index')); ?>" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <form method="post" action="<?php echo e(route('residents.update', $resident->id)); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value="<?php echo e($resident->fname); ?>" dusk="input_fname" />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value="<?php echo e($resident->lname); ?>" dusk="input_lname" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <select class="form-control col-3" name="facility" value="<?php echo e(old('facility')); ?>" dusk="input_facility">
                    <?php $__currentLoopData = $facilities->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=<?php echo e($facility['id']); ?>><?php echo e($facility['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="room" class="col-1">Room:</label>
                <input type="text" class="form-control col-3" name="room" value="<?php echo e($resident->room); ?>" dusk="input_room" />
                <label for="dine" class="col-1">Dining Area:</label>
                <input type="text" class="form-control col-3" name="dine" value="<?php echo e($resident->dine); ?>" dusk="input_dine" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="likes" class="col-1">Likes:</label>
                <input type="text" class="form-control col-3" name="likes" value="<?php echo e($resident->likes); ?>" dusk="input_likes" />
                <label for="dislikes" class="col-1">Dislikes:</label>
                <input type="text" class="form-control col-3" name="dislikes" value="<?php echo e($resident->dislikes); ?>" dusk="input_dislikes" />
                <label for="allergies" class="col-1">Allergies:</label>
                <input type="text" class="form-control col-3" name="allergies" value="<?php echo e($resident->allergies); ?>" dusk="input_allergies" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="comment col-1" class="col-1">Comments:</label>
                <input type="text" class="form-control col-11" name="comment" value="<?php echo e($resident->comment); ?>" dusk="input_comment" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/residents/edit.blade.php ENDPATH**/ ?>