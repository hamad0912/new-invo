<div>
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
              <div class="col-md-8">
              <div class="card">
                    <div class="card-header">
                        <h4 style="float: left" >اضافة منتج </h4> 
                        <a href="#" style="float: right"class="btn btn-success" 
                        data-toggle="modal" data-target="#addproduct">
                        <i class="fa fa-plus"></i> اضافة منتج جديد </a></div>
                        <div class="card-body">
                           <?php echo $__env->make('products.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            
                        </div>
                    
                </div>
              </div>
              <div class="col-md-4">
              <div class="card">
                    <div class="card-header">
                      <h4>تفاصيل المنتج</h4>
                    </div>
                        <div class="card-body">
                           <?php echo $__env->make('products.product_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    
                </div>


               
                  
              
      <div class="card-header">
          اضافةالمنتجات بواسطة ملف إكسل
      </div>
      <div class="card-body">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-any', $product)): ?>
        <?php if($loop->first): ?>
          <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <input type="file" name="file" class="form-control">
              <br>
              
              
              <button class="btn btn-success">اضافة المنتجات </button>
              <a class="btn btn-warning" href="<?php echo e(route('export')); ?>">تحميل المنتجات</a>
              <?php endif; ?>
          </form>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    
  </div>
  
</div>
             
        </div>
    </div>
</div>
<?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/livewire/products.blade.php ENDPATH**/ ?>