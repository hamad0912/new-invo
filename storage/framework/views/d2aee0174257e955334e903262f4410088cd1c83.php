<?php $__env->startSection('content'); ?>


<div class="container-fluid">
   
    <div  class="row">

        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div style="text-align: center" class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                اكثر طرق الدفع</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">CASH</div>
                            
                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hand-holding-magic fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-info shadow h-100 py-2">
                <div style="text-align: center" class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                اكثر الموظفين بيعا</div>
                                <?php $__currentLoopData = $top_sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tops): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($tops->user_id); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

        <div class="row">
            
                <div class="card">
                    <div style="text-align: center" class="card-header text-white">
                        <h4>تقارير المبيعات </h4> 
                        
                       </div>
                        <div class="card-body">
                            <form method="GET" class="col-sm-3">
                                
                                <i class="fa fa-search"></i>
                                <label for="">بحث عن عملية</label>
                                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                              </form>
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم الطلب</th>
                                    <th>مبلغ الشراء</th>
                                    <th>مبلغ الدفع</th>
                                    <th>الباقي</th>
                                    <th>طريقة الدفع</th>
                                    <th>تاريخ العملية</th>
                                    <th>الموظف</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $tranc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    
                                    <td style="color: #337ab7;"><?php echo e($tran->order_id); ?></td>
                                    <td><?php echo e($tran->transac_amount); ?></td>
                                    <td><?php echo e($tran->paid_amount); ?></td>
                                    <td><?php echo e($tran->balance); ?></td>
                                    <td><?php echo e($tran->payment_method); ?></td>
                                    <td><?php echo e($tran->transac_date); ?></td>
                                
                                    <td><?php echo e($tran->user_id); ?></td>
                                    
                                    <td>
                                     
                                    </td>
                                </tr>

                                
                               
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 

                               
                               
                                 
                            </tbody>
                            
                            </table>
                            <div class="d-felx justify-content-center">
                            <?php echo e($tranc->links('pagination::bootstrap-4')); ?> 
                            </div>
                        </div>
                

            </div>
            
        
        
    </div>
  
  
</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/trans/index.blade.php ENDPATH**/ ?>