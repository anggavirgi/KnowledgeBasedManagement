<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<div class="bg-cover bg-center bg-no-repeat flex items-center justify-center h-screen" style="background-image: url('<?php echo base_url() ?>src/images/error404.png');">
    <div class="flex items-center justify-center ">
        <div class="text-center text-white font-mono">
            <h1 class="text-9xl mb-4 pt-80 font-bold">404</h1>
            <p class="text-3xl mb-2">Oops! The page you're looking for could not be found.</p>
            <p class="text-3xl">Return to <a href="/" class="text-yellow-500">home</a>.</p>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>