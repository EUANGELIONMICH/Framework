
<?php $__env->startSection('content'); ?>
    <div>

<p>Anime List</p>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Rating</th>
        <th>Description</th>
        <th>Genre</th>
        <th>Published At</th>
    </tr>
    <tr>
        <td><?php echo e($item->title); ?></td>
        <td><?php echo e($item->slug); ?></td>
        <td><?php echo e($item->location); ?></td>
        <td><?php echo e($item->body); ?></td>
        <td><?php echo e($item->author); ?></td>
        <td><?php echo e($item->published_at); ?></td>
    </tr>
</table>
<div>
    <a href="<?php echo e(route('dealer.edit',['dealer' => $item->slug])); ?>" >
        <button class="btn btn-primary">Edit</button>
    </a>
</div>
<br /br>
<form action="<?php echo e(route('dealer.destroy',['dealer' => $item->slug])); ?>" method="POST">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger" onclick="return confirm('anda yakin ?')">Delete</button>
</form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Migratio\resources\views/detail_dealer.blade.php ENDPATH**/ ?>