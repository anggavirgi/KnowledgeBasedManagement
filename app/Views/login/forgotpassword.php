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
      <div>we will send email for reset password</div>
      <div class="text-[#18A8D8] text-[2.1rem] font-bold mt-2 mb-5">Forgot password</div>
      <?php if (session()->has('error')) : ?>
        <p class="p-3 bg-[#2C0B0E] text-[#EA7759] border-[#DD0606] rounded-md"><?php echo session('error') ?></p>
      <?php endif; ?>
      <form action="<?= url_to('forgot') ?>" method="post" class="flex flex-col">
        <?= csrf_field() ?>
        <label for="email">Enter your email address</label>
        <input type="email" name="email" id="email" placeholder="Email address" class="mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.email')) : ?>border-red-600<?php endif ?>" value="<?php echo old('email'); ?>">
        <?php if (session('errors.email')) : ?>
          <small class=" text-red-600 text-sm"><?php echo session('errors.email'); ?></small>
        <?php endif; ?>
        <div class="flex justify-between mt-2">
          <div> Don't have an account? <a href="<?= url_to('register') ?>" class="text-[#18A8D8]">Register here.</a></div>
        </div>

        <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Send</button>
      </form>
    </div>

  </div>
</body>

</html>