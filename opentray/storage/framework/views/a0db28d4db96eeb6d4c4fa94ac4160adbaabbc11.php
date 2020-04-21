<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenTray</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row bg-secondary text-light" style="height: 50px;">
            <div class="col-1">
            </div>
            <div class="col-5" style="margin: auto;">
                <div class="row">
                    <?php if(session()->get('permission', 'default') < 3 && strcmp(session()->get('permission', 'default'), 'default')): ?>
                    <a href="<?php echo e(route('residents.index')); ?>" class="col btn btn-outline-light" dusk="button_residents">
                        Residents
                    </a>
                    <?php endif; ?>
                    <?php if(session()->get('permission', 'default') < 2 && strcmp(session()->get('permission', 'default'), 'default')): ?>
                    <a href="<?php echo e(route('staff.index')); ?>" class="col btn btn-outline-light" dusk="button_staff">
                        Staff
                    </a>
                    <?php endif; ?>
                    <?php if(session()->get('permission', 'default') < 2 && strcmp(session()->get('permission', 'default'), 'default')): ?>
                    <a href="<?php echo e(route('foods.index')); ?>" class="col btn btn-outline-light" dusk="button_foods">
                        Foods
                    </a>
                    <?php endif; ?>
                    <?php if(session()->get('permission', 'default') < 1 && strcmp(session()->get('permission', 'default'), 'default')): ?>
                    <a href="<?php echo e(route('facilities.index')); ?>" class="col btn btn-outline-light" dusk="button_facilities">
                        Facilities
                    </a>
                    <?php endif; ?>
                    <?php if(strcmp(session()->get('permission', 'default'), 'default')): ?>
                    <a href="<?php echo e(route('print')); ?>" class="col btn btn-outline-light" dusk="button_print">
                        Print
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2" style="margin: auto; text-align: right">
                <?php echo e(session()->get('fname')); ?>

                <?php echo e(session()->get('lname')); ?>

            </div>
            <?php if(!strcmp(session()->get('permission', 'default'), 'default')): ?>
            <a href="<?php echo e(route('index')); ?>" class="col-1 btn btn-outline-light" style="margin: auto;" dusk="button_signout">
                Sign In
            </a>
            <?php else: ?>
            <a href="<?php echo e(route('signout')); ?>" class="col-1 btn btn-outline-light" style="margin: auto;" dusk="button_signout">
                Sign Out
            </a>
            <?php endif; ?>
            <div class="col-1">
            </div>
        </div>
        <?php if($errors->any()): ?>
        <div class="row">
            <div class="col-3"></div>
            <div class="alert alert-danger col">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-3"></div>
        </div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('main'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
</body>

</html><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/base.blade.php ENDPATH**/ ?>