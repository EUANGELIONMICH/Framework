 

<?php $__env->startSection('content'); ?> 
    <div> 
        Dealer 
        <p> 

<?php $__currentLoopData = $dealers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <p><?php echo e($item->title); ?></p> 
    <p><?php echo e($item->slug); ?></p> 
    <p><?php echo e($item->location); ?></p> 

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- Akhir dari perulangan data dealer -->
    </div> 
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Migratio\resources\views/list_dealer.blade.php ENDPATH**/ ?>