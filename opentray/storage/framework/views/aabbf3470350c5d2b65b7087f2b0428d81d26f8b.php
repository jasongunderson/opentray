<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update Resident
            <a href="<?php echo e(route('residents.index')); ?>" class="btn btn-primary">Back</a>
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
        <form method="post" action="<?php echo e(route('residents.update', $resident->id)); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value=<?php echo e($resident->fname); ?> />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value=<?php echo e($resident->lname); ?> />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <input type="text" class="form-control col-3" name="facilty" value=<?php echo e($resident->facility); ?> />
                <label for="room" class="col-1">Room:</label>
                <input type="text" class="form-control col-3" name="room" value=<?php echo e($resident->room); ?> />
                <label for="dine" class="col-1">Dining Area:</label>
                <input type="text" class="form-control col-3" name="dine" value=<?php echo e($resident->dine); ?> />
            </div>
            <br>
            <div class="form-inline row">
                <label for="likes" class="col-1">Likes:</label>
                <input type="text" class="form-control col-3" name="likes" value=<?php echo e($resident->likes); ?> />
                <label for="dislikes" class="col-1">Dislikes:</label>
                <input type="text" class="form-control col-3" name="dislikes" value=<?php echo e($resident->dislikes); ?> />
                <label for="allergies" class="col-1">Allergies:</label>
                <input type="text" class="form-control col-3" name="allergies" value=<?php echo e($resident->allergies); ?> />
            </div>
            <br>
            <div class="form-inline row">
                <label for="comment col-1" class="col-1">Comments:</label>
                <input type="text" class="form-control col-11" name="comment" value=<?php echo e($resident->comment); ?> />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/residents/edit.blade.php ENDPATH**/ ?>