<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpenTray</title>
  <link href="<?php echo e(asset('css/cards.css')); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php $__currentLoopData = $residents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <table>
    <tr>
      <td>Name</td>
      <td class="info"><?php echo e($resident->fname); ?> <?php echo e($resident->lname); ?></td>
      <td>Room</td>
      <td class="info"><?php echo e($resident->room); ?></td>
    </tr>
    <tr>
      <td>Diet</td>
      <td class="info"><?php echo e($resident->dine); ?></td>
      <td>Preferences</td>
      <td class="info"><?php echo e($resident->likes); ?></td>
    </tr>
    <td>Dislikes</td>
    <td class="info"><?php echo e($resident->dislikes); ?></td>
    <td>Allergies</td>
    <td class="info"><?php echo e($resident->allergies); ?></td>
    </tr>
    <tr>
      <td>Comments</td>
      <td colspan="3" class="info"> <?php echo e($resident->comment); ?></td>
    </tr>
  </table>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/print/cards.blade.php ENDPATH**/ ?>