<?php $__env->startSection('content'); ?>



<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-white">
                        <h4 style="float: right">الموردين </h4> 
                        <a href="#" style="float: left" class="btn btn-success" 
                        data-toggle="modal" data-target="#addsupplier">
                        <i class="fa fa-plus"></i> اضافة مورد جديد </a> </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم</th>
                                    <th>رقم التواصل</th>
                                    <th>الرابط</th>
                                    <th>الايميل</th>
                                    <th>نوع المنتجات</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td style="color: #337ab7;"><?php echo e($supplier->compony); ?></td>
                                    <td><a href="https://wa.me/<?php echo e($supplier->phone); ?>" > <i class="fab fa-whatsapp " style="font-size:20px;color:green"></i></a> , <a href="tel:<?php echo e($supplier->phone); ?>" > <i class="fas fa-phone-alt" style="font-size:20px;color:green"></i>  </a></td>
                                    <td><a href="<?php echo e($supplier->url); ?>">زيارة الموقع</a></td>
                                    <td><a href="mailto:<?php echo e($supplier->emmail); ?>"><i class='fa fa-envelope-square' style="font-size:20px;color:teal"></i> <?php echo e($supplier->emmail); ?></a></td>
                                    <td style="color: #337ab7;"><?php echo e($supplier->kind); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#editsupplier<?php echo e($supplier->id); ?>"><i class="fas fa-edit"></i> تعديل</a>
                                                <a href="#" data-toggle="modal"
                                                data-target="#deletesupplier<?php echo e($supplier->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>حذف</a>

                                        </div>
                                    </td>
                                </tr>
                                
                                <div class="modal center fade" id="editsupplier<?php echo e($supplier->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="staticBackdropLabel">تعديل</h5>
                                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            
                                          </button>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo e(route('suppliers.update', $supplier->id)); ?>" method="post">
                                              <?php echo csrf_field(); ?> 
                                              <?php echo method_field('put'); ?>
                                              <div class="form-group">
                                                <label for="">الاسم</label>
                                                <input type="text" name="compony" id="" value="<?php echo e($supplier->compony); ?>" class="form-control" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">رقم التواصل</label>
                                                <input type="tel" name="phone" id="" value="<?php echo e($supplier->phone); ?>" class="form-control" placeholder="+966" required>
                                              </div>
                                              
                                              <div class="form-group">
                                                <label for="">الرابط</label>
                                                <input type="text" name="url" id="" value="<?php echo e($supplier->url); ?>" class="form-control" placeholder="https://example.com" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">الايميل</label>
                                                <input type="text" name="emmail" id="" value="<?php echo e($supplier->emmail); ?>" class="form-control" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">نوع المنتج</label>
                                                <input type="text" name="kind" id="" value="<?php echo e($supplier->kind); ?>" class="form-control" required>
                                              </div>
                                             
                                              
                                              <div class="modal-footer">
                                                <button class="btn btn-primary btn-block">حفظ</button>
                                              </div>
                                            </form>
                                        
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal center fade" id="deletesupplier<?php echo e($supplier->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="staticBackdropLabel">حذف مورد</h5>
                                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            
                                          </button>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <form action="<?php echo e(route('suppliers.destroy', $supplier->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?> 
                                            <?php echo method_field('delete'); ?>
                                            <p> هل انت متاكد من حذف هذا المنتج <?php echo e($supplier->compony); ?> ؟</p>
                                         
                                            <div class="modal-footer">
                                              <button class="btn btn-info " data-dismiss="modal">إالغاء</button>
                                              <button type="submit" class="btn btn-danger">حذف</button>
                                            </div>
                                          </form>
                                        
                                        </div>
                                         
                                      </div>
                                    </div>
                                  </div>
                               
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            </table>
                            
                        </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h6 class="text-center"><i class="bi-bell"></i> التنبيهات</h6></div>
                        <div class="card-body">
                           <ul>  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->alert_stock >= $product->quantity): ?> 
                            <li><?php echo e($product->product_name); ?></li>
                    <span class="badge bg-danger">انخفاض المخزون<?php echo e($product->alert_stock); ?> </span>
                    
                    
                    
                <?php endif; ?> 
                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
                            
                                               
                                      
                                           
                                            
                        </div>
                    
                </div>
              </div>
                
            </div>
        </div>
        
    </div>

</div>

    <div class="modal center fade" id="addsupplier" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">اضافة مورد جديد</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('suppliers.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">الاسم</label>
                        <input type="text" name="compony" id="" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="">رقم التواصل</label>
                        <input type="tel" name="phone" id=""  class="form-control" placeholder="+966" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="">الرابط</label>
                        <input type="text" name="url" id=""  class="form-control" placeholder="https://example.com" required>
                      </div>
                      <div class="form-group">
                        <label for="">الايميل</label>
                        <input type="email" name="emmail" id=""  class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="">نوع المنتج</label>
                        <input type="text" name="kind" id="" class="form-control" required>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-block">حفظ</button>
                      </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

    
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/supplier/index.blade.php ENDPATH**/ ?>