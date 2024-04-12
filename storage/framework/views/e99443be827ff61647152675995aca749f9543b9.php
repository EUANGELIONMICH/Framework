<?php $__env->startSection('content'); ?>
<div>
    <h2>Anime List</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px;">Judul</th>
                <th style="border: 1px solid black; padding: 8px;">Rating</th>
                <th style="border: 1px solid black; padding: 8px;">Genre</th>
                <th style="border: 1px solid black; padding: 8px;">Published At</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="border: 1px solid black; padding: 8px;">
                    <a href="<?php echo e(route('dealer.show', ['dealer' => $item])); ?>"><?php echo e($item->title); ?></a>
                </td>
                <td style="border: 1px solid black; padding: 8px;"><?php echo e($item->location); ?></td>
                <td style="border: 1px solid black; padding: 8px;"><?php echo e($item->author); ?></td>
                <td style="border: 1px solid black; padding: 8px;"><?php echo e($item->published_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Migratio\resources\views/dealers.blade.php ENDPATH**/ ?>