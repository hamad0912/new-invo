<div class="modal center fade" id="deleteproduct<?php echo e($product->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">حذف منتج</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('delete'); ?>
            <p> هل انت متاكد من حذف هذا المنتج <?php echo e($product->product_name); ?> ؟</p>
         
            <div class="modal-footer">
              <button class="btn btn-info " data-dismiss="modal">إالغاء</button>
              <button type="submit" class="btn btn-danger">حذف</button>
            </div>
          </form>
        
        </div>
         
      </div>
    </div>
  </div><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/products/delete.blade.php ENDPATH**/ ?>