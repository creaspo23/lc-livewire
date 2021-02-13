<?php $__env->startSection('content'); ?>
    <div>
        <div class="h-96"></div>
        <div class="h-96"></div>
    </div>

    <h2 class="text-lg font-semibold">Standard Contact Form</h2>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-form', [])->html();
} elseif ($_instance->childHasBeenRendered('8zCQiG6')) {
    $componentId = $_instance->getRenderedChildComponentId('8zCQiG6');
    $componentTag = $_instance->getRenderedChildComponentTagName('8zCQiG6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8zCQiG6');
} else {
    $response = \Livewire\Livewire::mount('contact-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('8zCQiG6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/creaspo/Projects/lc-Livewire/resources/views/exampels.blade.php ENDPATH**/ ?>