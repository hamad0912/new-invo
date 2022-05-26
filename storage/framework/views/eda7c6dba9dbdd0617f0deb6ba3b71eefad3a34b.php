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
              </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/hamadotb/Sites/invo/resources/views/livewire/products.blade.php ENDPATH**/ ?>