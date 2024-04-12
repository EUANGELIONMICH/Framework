 

<?php $__env->startSection('content'); ?> 
    <div> 
        Dealer 
        <p> 

<?php $__currentLoopData = $data_dealer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Membuat looping data dealer -->
    <a href="<?php echo e(route('detail_dealer', ['jenis'=>$dp['jenis'] ])); ?>" >  <!-- Tautan ke detail dealer -->
        Dealer : <?php echo e($dp['jenis']); ?> <!-- Menampilkan jenis dealer -->
    </a> 
    <p><?php echo e($dp['jumlah']); ?></p> <!-- Menampilkan jumlah dealer -->
    <p><?php echo e($dp['info']); ?></p> <!-- Menampilkan informasi dealer -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- Akhir dari perulangan data dealer -->
    </div> 
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Collect\resources\views/list_dealer.blade.php ENDPATH**/ ?>