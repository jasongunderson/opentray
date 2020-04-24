<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Food
            <a href="<?php echo e(route('foods.create')); ?>" class="btn btn-primary" dusk="button_create">Add Food</a>
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($food->id); ?></td>
                    <td><?php echo e($food->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('foods.edit',$food->id)); ?>" class="btn btn-primary" dusk="button_edit">Edit</a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('foods.destroy', $food->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" type="submit" dusk="button_delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/foods/index.blade.php ENDPATH**/ ?>