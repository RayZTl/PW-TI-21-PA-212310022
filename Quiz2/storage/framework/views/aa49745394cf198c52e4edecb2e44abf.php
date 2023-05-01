<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>
    <body>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                <tr>
            </thead>
    <tbody>
        <?php $__currentLoopData = $biodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($b -> id); ?></td>
            <td><?php echo e($b -> npm); ?></td>
            <td><?php echo e($b -> nama); ?></td>
            <td><?php echo e($b -> alamat); ?></td>
            <td><?php echo e($b -> kontak); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    </body>
</html><?php /**PATH D:\PW-212310022\Quiz2\resources\views/profile.blade.php ENDPATH**/ ?>