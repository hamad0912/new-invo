
<div>
  <div class="container-fluid">
   
      <div class="col-lg-12">
          <div class="row">
            <div class="col-xl-4 col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center"><h4>تفاصيل الشراء</h4></div>
                      <div class="card-body">
                         @include('report.table')
                          
                      </div>
                  
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
            <div class="card">
                  <div class="card-header" style="text-align: center"><h4>تفاصيل العمليات</h4></div>
                      <div class="card-body">
                         @include('report.tablle')
                          
                      </div>
                  
              </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                  <div class="card-header" style="text-align: center">
                    <h4>الفاتورة</h4>
                  </div>
                      <div class="card-body">
                         @include('report.order_detail')
                      </div>
                  {{-- @include('products.product_preview') --}}
              </div>
            </div>
          </div>
      </div>
  </div>
</div>