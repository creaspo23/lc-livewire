<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Examples</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <main class="container mx-auto">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /home/creaspo/Projects/lc-Livewire/resources/views/layouts/app.blade.php ENDPATH**/ ?>