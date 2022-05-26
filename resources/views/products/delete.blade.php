<div class="modal center fade" id="deleteproduct{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">حذف منتج</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <form action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf 
            @method('delete')
            <p> هل انت متاكد من حذف هذا المنتج {{ $product->product_name }} ؟</p>
         
            <div class="modal-footer">
              <button class="btn btn-info " data-dismiss="modal">إالغاء</button>
              <button type="submit" class="btn btn-danger">حذف</button>
            </div>
          </form>
        
        </div>
         
      </div>
    </div>
  </div>