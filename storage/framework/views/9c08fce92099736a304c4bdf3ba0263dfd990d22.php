<div class="modal fade closeModal " id="addSection" wire:ignore.self  data-backdrop="static">
    <div class="modal-dialog right-crud modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> اضافة قسم جديد</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" method="post" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $addMore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $more): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="form-row">
                            <div style="text-align: right" class="col">
                                <label for="">اسم القسم</label>
                                <input style="text-align: " type="text" wire:model="section_name.<?php echo e($more); ?>" class="form-control" autocomplete="off">
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
                                    <input class="form-check-input" type="checkbox" wire:model="section_status.<?php echo e($more); ?>" id="flexSwitchCheckDefault" >
                                    <span class="slider"></span>
                                </label>
                            </div>

                            
                            <div class="col-sm-1">
                                <button class="btn-success btn-sm" style="margin-top: 35px !important" wire:igore
                                    wire:click.prevent="AddMore">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <?php if($loop->index > 0): ?>
                                    <button class="btn-danger btn-sm" wire:igore
                                        wire:click.prevent="Remove(<?php echo e($loop->index); ?>)">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block">
                            إنشاء قسم 
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

<?php /**PATH /Users/hamadotb/Sites/invo/resources/views/sections/create.blade.php ENDPATH**/ ?>