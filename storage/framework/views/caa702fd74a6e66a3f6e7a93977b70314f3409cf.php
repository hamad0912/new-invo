
<div>
  <div class="container-fluid">
   
      <div class="col-lg-12">
          <div class="row">
            <div class="col-xl-4 col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center"><h4>تفاصيل الشراء</h4></div>
                      <div class="card-body">
                         <?php echo $__env->make('report.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          
                      </div>
                  
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
            <div class="card">
                  <div class="card-header" style="text-align: center"><h4>تفاصيل العمليات</h4></div>
                      <div class="card-body">
                         <?php echo $__env->make('report.tablle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          
                      </div>
                  
              </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                  <div class="card-header" style="text-align: center">
                    <h4>الفاتورة</h4>
                  </div>
                      <div class="card-body">
                         <?php echo $__env->make('report.order_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                  
              </div>
            </div>
          </div>
      </div>
  </div>
</div><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/livewire/order-details.blade.php ENDPATH**/ ?>