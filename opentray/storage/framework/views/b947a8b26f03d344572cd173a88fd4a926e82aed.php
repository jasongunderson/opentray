<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Resident</h1>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <br />
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('residents.update', $resident->id)); ?>">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="fname" value=<?php echo e($resident->fname); ?> />
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" name="lname" value=<?php echo e($resident->lname); ?> />
            </div>
            <div class="form-group">
                <label for="facility">Facility:</label>
                <input type="text" class="form-control" name="facilty" value=<?php echo e($resident->facility); ?> />
            </div>
            <div class="form-group">
                <label for="room">Room:</label>
                <input type="text" class="form-control" name="room" value=<?php echo e($resident->room); ?> />
            </div>
            <div class="form-group">
                <label for="dine">Dining Area:</label>
                <input type="text" class="form-control" name="dine" value=<?php echo e($resident->dine); ?> />
            </div>
            <div class="form-group">
                <label for="likes">Likes:</label>
                <input type="text" class="form-control" name="likes" value=<?php echo e($resident->likes); ?> />
            </div>
            <div class="form-group">
                <label for="dislikes">Dislikes:</label>
                <input type="text" class="form-control" name="dislikes" value=<?php echo e($resident->dislikes); ?> />
            </div>
            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <input type="text" class="form-control" name="allergies" value=<?php echo e($resident->allergies); ?> />
            </div>
            <div class="form-group">
                <label for="comment">Comments:</label>
                <input type="text" class="form-control" name="comment" value=<?php echo e($resident->comment); ?> />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/test/resources/views/residents/edit.blade.php ENDPATH**/ ?>