<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>رقم الفاتورة</th>
            <th>رقم المنتج </th>
            <th>قيمة الشراء</th>
            <th>الكمية</th>
            <th>التفاصيل</th>
            
            
        </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $order_detaill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td ><?php echo e($order->order_id); ?></td>
            <td><?php echo e($order->product); ?></td>
            <td><?php echo e($order->amount); ?></td>
            <td><?php echo e($order->quantity_id); ?></td>
            <td style="cursor: pointer; text-align: center" data-toggle="tooltip"
            data-placement="right" title="للتفاصيل اضغط هنا"
             wire:click="OrdertDetails(<?php echo e($order->id); ?>)"><button type="button" class="btn btn-info">عرض الفاتورة</button></td>
        
           
          
            
       
        </tr>

        
        <!-- Modal of Edit product Detail -->


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </tbody>
    
</table><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/report/table.blade.php ENDPATH**/ ?>