<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>src/images/favicon.png" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/style.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
</head>

<body class="m-0 p-0 h-full text-sm">
    <!-- WARNA BG SEBELAH KIRI -->
    <div class="h-screen flex justify-end">
        <div class="flex items-center justify-end w-1/2 bg-gradient-to-r from-[#18A8D8] to-[#18A8D8]">
            <img src="<?php echo base_url(); ?>src/images/pana.png" alt="" class="hidden xl:block mr-[6%]">
        </div>

        <!-- NAVBAR -->
        <div class="absolute inset-0">
            <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="w-44 m-5">
        </div>

        <!-- LOGIN CARD -->
        <div class="absolute w-[80%] md:w-[55%] lg:w-[43%] xl:w-[38%] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white h-auto py-10 px-10 rounded-3xl drop-shadow-lg">
            <div class="text-[#18A8D8] text-[2.1rem] font-bold mt-2 mb-5">Reset password</div>
            <?php if (session()->has('error')) : ?>
                <p class="p-3 bg-[#2C0B0E] text-[#EA7759] border-[#DD0606] rounded-md"><?php echo session('error') ?></p>
            <?php endif; ?>
            <?php if (session()->has('message')) : ?>
                <p class="p-3 bg-[#CFF2DE] text-[#1F9254]"><?php echo session('message') ?></p>
            <?php endif; ?>
            <div><?= lang('Auth.enterEmailForInstructions') ?></div>
            <form action="<?= url_to('reset-password') ?>" method="post" class="flex flex-col">
                <?= csrf_field() ?>
                <label for="token" class="mt-4">Token</label>
                <input type="text" name="token" id="token" placeholder="Token" class="mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.token')) : ?>border-red-600<?php endif ?>" value="<?php echo old('token', $token ?? ''); ?>">
                <?php if (session('errors.token')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.token'); ?></small>
                <?php endif; ?>
                <label for="email" class="mt-4">Enter your email address</label>
                <input type="email" name="email" id="email" placeholder="Email address" class="mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.email')) : ?>border-red-600<?php endif ?>" value="<?php echo old('email'); ?>">
                <?php if (session('errors.email')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.email'); ?></small>
                <?php endif; ?>
                <label for="password" class="mt-4">New password</label>
                <div class="relative flex items-center justify-end">
                    <input type="password" name="password" id="password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.password')) : ?>border-red-600<?php endif ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div>
                <?php if (session('errors.password')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.password'); ?></small>
                <?php endif; ?>
                <label for="pass_confirm" class="mt-4">Repeat new password</label>
                <div class="relative flex items-center justify-end">
                    <input type="password" name="pass_confirm" id="pass_confirm" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.pass_confirm')) : ?>border-red-600<?php endif ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div>
                <?php if (session('errors.pass_confirm')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.pass_confirm'); ?></small>
                <?php endif; ?>
                <div class="flex justify-between mt-2">
                    <div> Don't have an account? <a href="<?= url_to('register') ?>" class="text-[#18A8D8]">Register here.</a></div>
                </div>

                <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Reset Password</button>
            </form>
        </div>

    </div>
</body>

</html>