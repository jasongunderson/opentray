<?php $__env->startSection('main'); ?>
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Residents
      <a href="<?php echo e(route('residents.create')); ?>" class="btn btn-primary" dusk="button_create">Add Resident</a>
    </h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Facility</td>
          <td>Room</td>
          <td>Dining Area</td>
          <td>Likes</td>
          <td>Dislikes</td>
          <td>Allergies</td>
          <td>Comments</td>
          <td colspan=2>Actions</td>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $residents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($resident->id); ?></td>
          <td><?php echo e($resident->fname); ?> <?php echo e($resident->lname); ?></td>
          <td><?php echo e($resident->facility); ?></td>
          <td><?php echo e($resident->room); ?></td>
          <td><?php echo e($resident->dine); ?></td>
          <td><?php echo e($resident->likes); ?></td>
          <td><?php echo e($resident->dislikes); ?></td>
          <td><?php echo e($resident->allergies); ?></td>
          <td><?php echo e($resident->comment); ?></td>
          <td>
            <a href="<?php echo e(route('residents.edit',$resident->id)); ?>" class="btn btn-primary" dusk="button_edit">Edit</a>
          </td>
          <td>
            <form action="<?php echo e(route('residents.destroy', $resident->id)); ?>" method="post">
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/residents/index.blade.php ENDPATH**/ ?>