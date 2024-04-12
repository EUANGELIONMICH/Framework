<?php $__env->startSection('content'); ?>
    <div>
        Dealer
        <p>
<?php $__currentLoopData = $data_dealer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p>Dealer : <?php echo e($dd['jenis']); ?></p>
<p><?php echo e($dd['jumlah']); ?></p>
<p><?php echo e($dd['info']); ?></p>  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Collect\resources\views/welcome.blade.php ENDPATH**/ ?>