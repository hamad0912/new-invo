<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('section')->html();
} elseif ($_instance->childHasBeenRendered('UOnAfxS')) {
    $componentId = $_instance->getRenderedChildComponentId('UOnAfxS');
    $componentTag = $_instance->getRenderedChildComponentTagName('UOnAfxS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UOnAfxS');
} else {
    $response = \Livewire\Livewire::mount('section');
    $html = $response->html();
    $_instance->logRenderedChild('UOnAfxS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/sections/index.blade.php ENDPATH**/ ?>