<div class="modal right fade" id="productPreview<?php echo e($product->id); ?>" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel"><?php echo e($product->product_name); ?></h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <div class="">
            <img src="<?php echo e(asset('products/images/' .$product->product_image)); ?>" 
            width="280" height="200" style=" cursor: pointer;" alt="">

          </div>
        <img src="<?php echo e(asset('products/barcodes/' .$product->barcode)); ?>" 
            width="290" style=" cursor: pointer;" alt="">
        </div>
         
      </div>
    </div>
  </div><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/products/product_preview.blade.php ENDPATH**/ ?>