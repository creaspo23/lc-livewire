<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ContactForm')->html();
} elseif ($_instance->childHasBeenRendered('8f4bU1A')) {
    $componentId = $_instance->getRenderedChildComponentId('8f4bU1A');
    $componentTag = $_instance->getRenderedChildComponentTagName('8f4bU1A');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8f4bU1A');
} else {
    $response = \Livewire\Livewire::mount('ContactForm');
    $html = $response->html();
    $_instance->logRenderedChild('8f4bU1A', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /home/creaspo/Projects/lc-Livewire/resources/views/welcome.blade.php ENDPATH**/ ?>