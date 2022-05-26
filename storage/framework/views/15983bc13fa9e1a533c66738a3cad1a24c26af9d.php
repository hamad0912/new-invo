<div class="tbale-responsive mt-2">
    <div class="btn-group flex-wrapper">
   
   <?php if(count($checked) > 1): ?>
        <a href="#" class="btn btn-outline-danger btn-sm" wire:click.prevnet="confirmBulkDelete">
        ( <?php echo e(count($checked)); ?>  حذف <b>الصفوف المحددة</b>  )
    </a>
   <?php endif; ?>
    </div>
</div>

<table class="table  text-left mt-3" width="100%">
    <thead>
        <tr>
            <th><input class="h-5 w-5" type="checkbox" wire:model="selectAll"></th>
            <th>اسم القسم</th>
            <th> الحالة</th>
            <th>الاجراءات</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <tr class="">
                 <td><input value="<?php echo e($section->id); ?>" wire:model="checked" class="h-5 w-5" type="checkbox"></td>
                <td><?php echo e($section->section_name); ?></td>
                <td> <label for="" class="badge <?php echo e($section->status == 1 ? 'badge bg-success' : 'badge bg-danger'); ?> }}"><?php echo e($section->status == 1 ? 'مفعل' : 'غير مفعل'); ?></label> </td>
                <td>
                    <div class="btn-group">
                        <a href="#editSection" data-toggle="modal" wire:click.prevent="editSection(<?php echo e($section->id); ?>)" class="btn btn-outline-info btn-rounded"> <i class="fa fa-edit"></i></a>
                       <?php if(count($checked) < 2): ?>
                        <a href="#" wire:click.prevent="ConfirmDelete(<?php echo e($section->id); ?>, '<?php echo e($section->section_name); ?>')" class="btn btn-outline-danger btn-rounded"> <i class="fa fa-trash"></i></a>
                       <?php endif; ?>
                    </div>
                </td>
            </tr>
            <?php echo $__env->make('sections.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
        <?php endif; ?>
      
    </tbody>

</table><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/sections/table.blade.php ENDPATH**/ ?>