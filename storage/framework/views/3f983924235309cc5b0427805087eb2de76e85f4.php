<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->yieldContent('title'); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\test\resources\views/layout.blade.php ENDPATH**/ ?>