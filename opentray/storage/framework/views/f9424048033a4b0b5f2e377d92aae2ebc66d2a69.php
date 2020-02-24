<?php $__env->startSection('main'); ?>
<script>
    queue = [];

    function addQueue(id) {
        if (!queue.includes(id)) {
            queue.push(id);
            document.getElementById("row" + id).style.backgroundColor = "lightgreen";
            document.getElementById("formQueue").value = queue;
            document.getElementById("queueButton").disabled = false;
        }
    }

    function removeQueue(id) {
        if (queue.includes(id)) {
            queue.splice(queue.indexOf(id), 1);
            document.getElementById("row" + id).style.backgroundColor = "";
            document.getElementById("formQueue").value = queue;
            if (queue.length == 0) {
                document.getElementById("queueButton").disabled = true;
            }
        }
    }
</script>
<div class="row">
    <div class="col-sm-12">
        <form method="get" action="<?php echo e(route('print/cards')); ?>">
            <h1 class="display-3">Print
                <a href="<?php echo e(route('print/cards')); ?>" class="btn btn-primary">Print All</a>
                <div class="form-group d-none">
                    <label for="queue">Queue</label>
                    <input type="text" class="form-control" name="queue" id="formQueue" required />
                </div>
                <button type="submit" class="btn btn-primary" id="queueButton" disabled>Print Queue</button>
                <a href="<?php echo e(route('print')); ?>" class="btn btn-primary">Reset</a>
            </h1>
        </form>
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
                <tr id="row<?php echo e($resident->id); ?>">
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
                        <a class="btn btn-primary" onclick=addQueue("<?php echo e($resident->id); ?>")>Queue</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" onclick=removeQueue("<?php echo e($resident->id); ?>")>Unqueue</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/print/index.blade.php ENDPATH**/ ?>