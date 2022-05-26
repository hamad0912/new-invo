<div class="modal center fade" id="editproduct<?php echo e($product->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">تعديل منتج</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            
          </button>
          
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('products.update', $product->id)); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
              <?php echo csrf_field(); ?> 
              <?php echo method_field('put'); ?>
              <div class="form-group">
                <label for="">اسم المنتج</label>
                <input type="text" name="product_name" id="" value="<?php echo e($product->product_name); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الباركود</label>
                <input type="text" name="product_code" id="" value="<?php echo e($product->product_code); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الماركة</label>
                <input type="text" name="brand" id="" value="<?php echo e($product->brand); ?>" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="">السعر</label>
                <input type="number" name="price" id="" value="<?php echo e($product->price); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الكمية</label>
                <input type="number" name="quantity" id="" value="<?php echo e($product->quantity); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="">المخزون</label>
                <input type="number" name="alert_stock" id="" value="<?php echo e($product->alert_stock); ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="">الوصف</label>
                <textarea name="description" id="" cols="30" rows="2"  class="form-control"><?php echo e($product->description); ?></textarea>
              </div>

              <div class="form-group">
                <label for="">القسم</label>
                <select name="section_id" id="" readonly class="form-control">
                  <option value=""><?php echo e($product->section->section_name); ?></option>
                 
                </select>
              </div>

              <div class="form-group">
                <label for="">الصورة</label>
                <img width="40" src="<?php echo e(asset('products/images/' .$product->product_image)); ?>" >
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

  <?php /**PATH /Users/hamadotb/Sites/invo/resources/views/products/edit.blade.php ENDPATH**/ ?>