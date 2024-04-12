
<?php $__env->startSection('content'); ?>
<p>Edit</p>
<form action="<?php echo e(route('dealer.update',['dealer' => $edit->slug])); ?>" method="POST">
<?php echo method_field('PUT'); ?>
<?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo e($edit->title); ?>">
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($edit->slug); ?>">
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Rating</label>
        <input type="text" class="form-control" id="location" name="location" value="<?php echo e($edit->location); ?>">
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Description</label>
        <input type="text" class="form-control" id="body" name="body" value="<?php echo e($edit->body); ?>">

    <div class="mb-3">
        <label for="owner" class="form-label">Genre</label>
        <input type="text" class="form-control" id="author" name="author" value="<?php echo e($edit->author); ?>">
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Published At</label>
        <input type="text" class="form-control" id="published_at" name="published_at" value="<?php echo e($edit->published_at); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
<?php if($errors->any()): ?>
<div class="alert alert-danger mt-2">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\Framework\Migratio\resources\views/edit.blade.php ENDPATH**/ ?>