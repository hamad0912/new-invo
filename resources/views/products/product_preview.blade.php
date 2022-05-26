<div class="modal right fade" id="productPreview{{ $product->id}}" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">{{ $product->product_name}}</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <div class="">
            <img src="{{ asset('products/images/' .$product->product_image) }}" 
            width="280" height="200" style=" cursor: pointer;" alt="">

          </div>
        <img src="{{ asset('products/barcodes/' .$product->barcode)}}" 
            width="290" style=" cursor: pointer;" alt="">
        </div>
         
      </div>
    </div>
  </div>