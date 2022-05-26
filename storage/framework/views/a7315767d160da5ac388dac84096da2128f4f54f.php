<div class="col-lg-12">
    <div class="row">
      <div class="col-md-8">
      <div class="card">
       

               
            <div class="card-header">
                <h4 style="float: left">طلبات المنتجات </h4> 
                <a href="#" style="float: right" class="btn btn-success" 
                data-toggle="modal" data-target="#addproduct">
                <i class="fa fa-plus"></i> اضافة منتج جديد </a></div>
                
                
                <div class="card-body">
                    <div class="my-2">
                        <form wire:submit.prevent="InsertoCart">
                        <input type="text" name="" wire:model="product_code" id="" class="form-control" placeholder="ادخل رقم المنتج">  
                    </form>  
                        </div> 

                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success text-light bg-success" style="background: #38C172 !important">
                            <?php echo e(session('success')); ?>

                        </div>
                     <?php elseif(session()->has('info')): ?>
                     <div class="alert alert-info text-light" style="background:#3490DC !important">
                            <?php echo e(session('info')); ?>

                        </div>
                     <?php elseif(session()->has('error')): ?>
                     <div class="alert alert-danger text-light" style="background :#E3342F !important">
                            <?php echo e(session('error')); ?>

                        </div>
                     <?php endif; ?>

                    <table class="table table-bordered table-left">
                        <thead>
                            <tr>
                                <th></th>
                                <th>name</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th style="color: red">dis (٪)</th>
                                <th colspan="6">Total</th>
                                
                            </tr>
                        </thead>
                            <tbody class="addMoreProduct">
                                <?php $__currentLoopData = $productIncart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                <tr>
                                    <td class="no"><?php echo e($key + 1); ?></td>
                                    <td width="30%">
                                        <input type="text" class="form-control" value="<?php echo e($cart->product->product_name); ?>">
                                        
                                    </td>
                                    <td width="15%">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <button wire:click.prevent="IncrementQty(<?php echo e($cart->id); ?>)" 
                                                    class="btn btn-sm btn-success"> + </button>
                                            </div>

                                            <div  class="col-md-1">
                                                <label  for=""><?php echo e($cart->product_qty); ?> </label>
                                            </div>

                                            <div class="col-md-2">
                                                <button wire:click.prevent="DecrementQty(<?php echo e($cart->id); ?> )"  
                                                    class="btn btn-sm btn-danger"> - </button>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <input type="number" 
                                        value="<?php echo e($cart->product->price); ?>" class="form-control">
                                    </td>
                                   
                                    <td width="15%">

                                      <div class="row">
                                          

                                          

                                          <div class="col-md-2">
                                              <button wire:click.prevent="DecrementDis(<?php echo e($cart->id); ?> )"  
                                                  class="btn btn-sm btn-danger"> - </button>
                                          </div>
                                      </div>
                                      
                                  </td>
                                    <td>
                                        <input type="number"  
                                        value="<?php echo e($cart->product_qty * $cart->product->price); ?>" class="form-control total_amount">
                                    </td>
                                    <td><a href="#" class="btn btn-sm btn-danger rounded-circle"><i 
                                        class="fa fa-times" wire:click="removeProduct (<?php echo e($cart->id); ?>)"></i>
                                    </a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                                
                            </table>
                    
                </div>
            
        </div>
      </div>
      

                          <?php $__currentLoopData = $productIncart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                        <input type="hidden" class="form-control" name="product_id[]" value="<?php echo e($cart->product->id); ?>">
                                        
                                    
                 
                                            
                                               <input type="hidden" name="quantity[]" value="<?php echo e($cart->product_qty); ?>">
                                            
                                       
                                    
                                        <input type="hidden" name="price[]" 
                                        value="<?php echo e($cart->product->price); ?>" class="form-control price">
                                    
                                        <input type="hidden" name="discount[]" 
                                        value="<?php echo e($cart->discount); ?>"
                                        class="form-control discount">
                                    
                                        <input type="hidden" name="total_amount[]" 
                                        value="<?php echo e($cart->product_qty * $cart->product->price); ?>" class="form-control total_amount">
                                   
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      <div class="col-md-4">
      <div class="card">
            <div class="card-header">
                <h4>الاجمالي <b class="total"><?php echo e($productIncart->sum('product_price')); ?> </b></h4>
            </div>
            <form action="<?php echo e(route('orders.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $productIncart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="product_id[]"  value="<?php echo e($cart->product->id); ?>">
                <input type="hidden" name="quantity[]"  value="<?php echo e($cart->product_qty); ?>">
                <input type="hidden" name="price[]" 
                value="<?php echo e($cart->product->price); ?>" class="form-control price">
                <input type="hidden" name="discount[]" 
                value="<?php echo e($cart->discount); ?>"
                    class="form-control discount">
                <input type="hidden" name="total_amount[]" id="total_amount" 
                value="<?php echo e($cart->product_qty *  $cart->product->price  - $cart->discount); ?>"
                    class="form-control total_amount">
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    <div class="btn-group">
                        <button type="button" 
                        onclick="PrintReceiptContent('print')" 
                        class="btn btn-dark">طباعة <i class="fa fa-print"></i>
                        </button>
                        <button type="button" 
                        onclick="PrintReceiptContent('print')" 
                        class="btn btn-primary">السجل <i class="fa fa-print"></i>
                        </button>
                        <button type="button" 
                        onclick="PrintReceiptContent('print')" 
                        class="btn btn-danger">التقارير <i class="fa fa-print"></i>
                        </button>
                    </div>
                   <div class="panel"> 
                       <div class="row">
                           <table class="table table-striped">
                               <tr>
                                   <td>
                                    <label for="">اسم العميل</label>
                                    
                                     <input type="text" name="customer_name" id="" class="form-control">
                                 
                                   </td>
                                   <td>
                                    <label for="">جوال العميل</label>
                                     <input type="phone" name="phone" id="" class="form-control">
                                   </td>
                               </tr>
                           </table>
                          </div>
                          <td>طرق الدفع <br>
                             
                            <span class="radio-item pull-right">
                                <input type="radio" name="payment_method" id="payment_method" 
                                class="true" value="كاش" checked= "checked">
                                <label for="payment_method"> <i class="fas fa-hand-holding-usd text-success"></i> نقدا </label>
                            </span>
                            <span class="radio-item pull-right">
                                <input type="radio" name="payment_method" id="payment_method" 
                                class="true" value="تحويل بنكي">
                                <label for="payment_method"> <i class="fa fa-university text-danger"></i> تحويل بنكي </label>  
                            </span>
                            <span class="radio-item pull-right">
                                <input type="radio" name="payment_method" id="payment_method" 
                                class="true" value="شبكة">
                                <label for="payment_method"> <i class="fa fa-credit-card text-info"></i> دفع الكتروني</label>
                            </span>
                          </td><br>
                          <td> 
                              الدفع 
                              <input type="number" wire:model="pay_money" name="paid_amount" id="paid_amount" class="form-control">
                            </td>
                            <td> 
                                الصرف 
                                <input type="number" readonly wire:model="balance" name="balance" id="balance" class="form-control">
                              </td>
                              <td>
                                <button class="btn-primary btn-lg btn-block mt-3">حفظ</button>
                              </td>
                              <td>
                                
                              </td>
                             <div class="text-center">
                               <a href="#" class="text-danger"> <i class="fa fa-sign-out-alt"></i></a>
                             </div>
                            </form>
                   </div>
                </div>
            
        </div>
      </div>
    </form>
    </div>
</div>
</div>

<!-- model of addproduct -->
<div class="modal right fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="staticBackdropLabel">اضافة منتج</h5>
    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <form action="<?php echo e(route('products.store')); ?>" method="post">
      <?php echo csrf_field(); ?> 
      
      <div class="form-group">
        <label for="">اسم المنتج</label>
        <input type="text" name="product_name" id="" class="form-control">
      </div>
      <div class="form-group">
        <label for="">الماركة</label>
        <input type="text" name="brand" id="" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="">السعر</label>
        <input type="number" name="price" id="" class="form-control">
      </div>
      <div class="form-group">
        <label for="">الكمية</label>
        <input type="number" name="quantity" id="" class="form-control">
      </div>
      <div class="form-group">
        <label for="">المخزون</label>
        <input type="number" name="alert_stock" id="" class="form-control">
      </div>
      <div class="form-group">
        <label for="">الوصف</label>
        <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary btn-block">حفظ</button>
      </div>
    </form>
  
  </div>
   
</div>
</div>
</div>
<?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/livewire/order.blade.php ENDPATH**/ ?>