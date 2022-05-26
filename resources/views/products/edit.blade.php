<div class="modal center fade" id="editproduct{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">تعديل منتج</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">
              @csrf 
              @method('put')
              <div class="form-group">
                <label for="">اسم المنتج</label>
                <input type="text" name="product_name" id="" value="{{ $product->product_name }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الباركود</label>
                <input type="text" name="product_code" id="" value="{{ $product->product_code }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">سعر الشراء</label>
                <input type="text" name="buy" id="" value="{{ $product->buy }}" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="">السعر</label>
                <input type="number" name="price" id="" value="{{ $product->price }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الكمية</label>
                <input type="number" name="quantity" id="" value="{{ $product->quantity }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">المخزون</label>
                <input type="number" name="alert_stock" id="" value="{{ $product->alert_stock}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الوصف</label>
                <textarea name="description" id="" cols="30" rows="2"  class="form-control">{{ $product->description}}</textarea>
              </div>

              <div class="form-group">
                <label for="">القسم</label>
                <select name="section_id" id="" readonly class="form-control">
                  <option value="">{{$product->section->section_name}}</option>
                 
                </select>
              </div>

              <div class="form-group">
                <label for="">الصورة</label>
                <img width="40" src="{{ asset('products/images/' .$product->product_image) }}" >
                <input type="file" name="product_image" id="" 
                 class="form-control">
              </div>
              
              <div class="modal-footer">
                <button class="btn btn-primary btn-block">حفظ</button>
              </div>
            </form>
        
        </div>
        
      </div>
    </div>
  </div>

  