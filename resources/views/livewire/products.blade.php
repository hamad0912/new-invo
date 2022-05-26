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
                           @include('products.table')
                            
                        </div>
                    
                </div>
              </div>
              <div class="col-md-4">
              <div class="card">
                    <div class="card-header">
                      <h4>تفاصيل المنتج</h4>
                    </div>
                        <div class="card-body">
                           @include('products.product_detail')
                        </div>
                    {{-- @include('products.product_preview') --}}
                </div>


               
                  
              
      <div class="card-header">
          اضافةالمنتجات بواسطة ملف إكسل
      </div>
      <div class="card-body">
        @foreach ($products as $product)
                
        @can('view-any', $product)
        @if ($loop->first)
          <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="file" class="form-control">
              <br>
              
              
              <button class="btn btn-success">اضافة المنتجات </button>
              <a class="btn btn-warning" href="{{ route('export') }}">تحميل المنتجات</a>
              @endif
          </form>
          @endcan
          @endforeach
      </div>
    
  </div>
  
</div>
             
        </div>
    </div>
</div>
