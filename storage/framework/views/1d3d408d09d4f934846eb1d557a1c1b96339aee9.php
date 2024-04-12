
<?php $__env->startSection('content'); ?>
    <div>

<p>Dealer </p>
<p><?php echo e($detail_dealer['jumlah']); ?></p>
<p><?php echo e($detail_dealer['info']); ?></p>  
<p><?php echo e($detail_dealer['harga']); ?></p>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Collect\resources\views/detail_dealer.blade.php ENDPATH**/ ?>