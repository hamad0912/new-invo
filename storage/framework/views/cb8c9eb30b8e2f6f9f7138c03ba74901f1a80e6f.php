<div class="modal fade closeModal " id="editSection" wire:ignore.self  data-backdrop="static">
    <div class="modal-dialog right-crud modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> تعديل قسم </h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update(<?php echo e($section->id); ?>)" method="post" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    
                        <div class="form-row">
                            <div style="text-align: right" class="col">
                                <label for="">اسم القسم</label>
                                <input style="text-align: " type="text" wire:model="section_name" class="form-control" autocomplete="off">
                                <?php $__errorArgs = ['section_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-check form-switch" data-toggle="tooltip" data-placement="top" title="status">
                                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-top: 2.2em !important; "> تفعيل
                                    <input class="form-check-input" type="checkbox" wire:model="section_status" id="flexSwitchCheckDefault" >
                                    <span class="slider"></span>
                                </label>
                            </div>

                            
                       
                        </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">
                            تعديل قسم 
                        </button>
                        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">
                            إغلاق
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /Users/hamadotb/Sites/invo/resources/views/sections/edit.blade.php ENDPATH**/ ?>