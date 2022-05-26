<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card" style="width:24rem;margin:auto;">
        <div class="card-body">
            <form action="<?php echo e(route('store.plan')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="plan name">اسم الخطة:</label>
                    <input type="text" class="form-control" name="name" placeholder="ادخل اسم الخطة">
                </div>
                <div class="form-group">
                    <label for="cost">التكلفة:</label>
                    <input type="text" class="form-control" name="cost" placeholder="ادخل التكلفة">
                </div>
                <div class="form-group">
                    <label for="cost">وصف الخطة:</label>
                    <input type="text" class="form-control" name="description" placeholder="ادخل الوصف">
                </div>
                <button type="submit" class="btn btn-primary">انشاء</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/plans/create.blade.php ENDPATH**/ ?>