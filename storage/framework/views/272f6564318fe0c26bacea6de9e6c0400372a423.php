<?php $__env->startSection('content'); ?>
<h2><?php echo e($obj->name); ?></h2>
	<div><?php echo $obj->body; ?></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\localhost\resources\views/static.blade.php ENDPATH**/ ?>