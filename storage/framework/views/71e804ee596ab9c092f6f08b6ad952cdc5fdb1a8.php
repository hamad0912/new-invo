<?php $__env->startSection('content'); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('section')->html();
} elseif ($_instance->childHasBeenRendered('J5EUKz5')) {
    $componentId = $_instance->getRenderedChildComponentId('J5EUKz5');
    $componentTag = $_instance->getRenderedChildComponentTagName('J5EUKz5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('J5EUKz5');
} else {
    $response = \Livewire\Livewire::mount('section');
    $html = $response->html();
    $_instance->logRenderedChild('J5EUKz5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/sections/index.blade.php ENDPATH**/ ?>