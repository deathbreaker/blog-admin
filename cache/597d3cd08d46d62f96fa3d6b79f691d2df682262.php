<?php $__env->startSection('title', 'Vypsání článků'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>Hello from articles</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>