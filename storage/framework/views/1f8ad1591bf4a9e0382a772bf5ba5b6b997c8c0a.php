<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>اسم المنتج</th>
            <th>سعر الشراء</th>
            <th>السعر</th>
            <th>الكمية</th>
            <th>القسم</th>
            <th>المخزون</th>
            <th>الاجراءات</th>
        </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td style="cursor: pointer" data-toggle="tooltip"
            data-placement="right" title="للتفاصيل اضغط هنا"
             wire:click="ProductDetails(<?php echo e($product->id); ?>)" ><?php echo e($product->product_name); ?></td>
            <td><?php echo e($product->buy); ?></td>
            <td><?php echo e(number_format($product->price,2)); ?></td>
            <td><?php echo e($product->quantity); ?></td>
            <td ><?php echo e($product->section->section_name); ?></td>
            <td> 
                <?php if($product->alert_stock >= $product->quantity): ?> 
                <span class="badge bg-danger"> <?php echo e($product->alert_stock); ?> </span>
                <?php else: ?> 
                <span class="badge bg-success"><?php echo e($product->alert_stock); ?></span>
            <?php endif; ?> 
        </td>
           
          
            
            <td>
              <div class="btn-group">
                <a href="#"  class="btn btn-info btn-sm" data-toggle="modal" 
                data-target="#editproduct<?php echo e($product->id); ?>"><i class="fas fa-edit"></i> تعديل</a>
                
                <a href="#" data-toggle="modal" 
                data-target="#deleteproduct<?php echo e($product->id); ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> حذف </a>
              </div>
            </td>
        </tr>

        
        <!-- Modal of Edit product Detail -->

    <?php echo $__env->make('products.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('products.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </tbody>
    
</table><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/products/table.blade.php ENDPATH**/ ?>