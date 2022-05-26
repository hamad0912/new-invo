<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('order-details')->html();
} elseif ($_instance->childHasBeenRendered('pH4Qfax')) {
    $componentId = $_instance->getRenderedChildComponentId('pH4Qfax');
    $componentTag = $_instance->getRenderedChildComponentTagName('pH4Qfax');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pH4Qfax');
} else {
    $response = \Livewire\Livewire::mount('order-details');
    $html = $response->html();
    $_instance->logRenderedChild('pH4Qfax', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/report/index.blade.php ENDPATH**/ ?>