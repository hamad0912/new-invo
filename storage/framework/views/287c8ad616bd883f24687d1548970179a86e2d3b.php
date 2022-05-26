<div class="row" style="text-align: center">
    <?php $__empty_1 = true; $__currentLoopData = $products_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    
    
    <div class="col-md-12">
        <div class="form-group">
            <img 
            data-toggle="modal" data-target="#productPreview<?php echo e($product->id); ?>" 
            src="<?php echo e(asset('products/images/' .$product->product_image)); ?>" 
            width="70" style=" cursor: pointer;" alt="">
        </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">رقم المنتج</label>
            <input type="text" class="form-control" value=" <?php echo e($product->id); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">اسم المنتج</label>
            
            <input type="text" class="form-control" value=" <?php echo e($product->product_name); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">كود المنتج</label>
            
            <input type="text" class="form-control" value=" <?php echo e($product->product_code); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">سعر المنتج</label>
            
            <input type="text" class="form-control" value=" <?php echo e($product->price); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">كمية المنتج</label>
            
            <input type="text" class="form-control" value=" <?php echo e($product->quantity); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">مخزون المنتج</label>
            
            <input type="text" class="form-control" value=" <?php echo e($product->alert_stock); ?>" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">وصف المنتج</label>
            <textarea class="form-control" readonly cols="10" rows="2"> <?php echo e($product->description); ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group" style="text-align: center !important; padding-left:8%">
            
            <span style="text-align: center; ">
                <img src="<?php echo e(asset('products/barcodes/' .$product->barcode)); ?>" 
            width="70" style=" cursor: pointer;" alt="">
            </span>
            <h4><?php echo e($product->product_code); ?></h4>
        </div>
    </div>

    <?php echo $__env->make('products.product_preview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
    <?php endif; ?>
</div>

<style>
    input:read-only{
        background: #fff !important;
        text-align: center

    }

    textarea:read-only{
        background: #fff !important;
        text-align: center
    }
</style><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/products/product_detail.blade.php ENDPATH**/ ?>