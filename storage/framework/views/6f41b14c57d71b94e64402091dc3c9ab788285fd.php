<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>طريقة الدفع</th>
            <th>رقم الموظف </th>
            <th>تاريخ العملية</th>
            
            
            
            
        </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $tranc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td style="font-size: 16px"><?php echo e($tran->payment_method); ?></td>
            <td><?php echo e($tran->user_id); ?></td>
            <td><?php echo e($tran->transac_date); ?></td>
            
            
        
           
          
            
       
        </tr>

        
        <!-- Modal of Edit product Detail -->


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </tbody>
    
</table><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/report/tablle.blade.php ENDPATH**/ ?>