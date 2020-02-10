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
                    <a href="<?php echo e(route('residents.index')); ?>" class="col btn btn-outline-light">
                        Residents
                    </a>
                    <a href="<?php echo e(route('index')); ?>" class="col btn btn-outline-light">
                        Staff
                    </a>
                    <a href="<?php echo e(route('print')); ?>" class="col btn btn-outline-light">
                        Print
                    </a>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2" style="margin: auto; text-align: right">

            </div>
            <a href="<?php echo e(route('index')); ?>" class="col-1 btn btn-outline-light" style="margin: auto;">
                Sign Out
            </a>
            <div class="col-1">
            </div>
        </div>
        <?php echo $__env->yieldContent('main'); ?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
</body>

</html><?php /**PATH /home/jon/Documents/CS4900/opentray/opentray/resources/views/base.blade.php ENDPATH**/ ?>