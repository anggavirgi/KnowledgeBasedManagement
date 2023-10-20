<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>src/images/favicon.png" type="image/x-icon">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
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
    <div class="absolute w-[85%] md:w-[55%] lg:w-[43%] xl:w-[38%] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white h-auto py-10 px-10 rounded-3xl drop-shadow-lg">
      <div>Welcome, please login to your account.</div>
      <div class="text-[#18A8D8] text-[2.1rem] font-bold mt-2 mb-5">Sign in</div>
      <?php if (session()->has('message')) : ?>
        <p class="p-3 bg-[#CFF2DE] text-[#1F9254]"><?php echo session('message') ?></p>
      <?php endif; ?>
      <?php if (session()->has('error')) : ?>
        <p class="p-3 bg-[#F8D7DA] text-[#721C24] border-[#DD0606] rounded-md"><?php echo session('error') ?></p>
      <?php endif; ?>
      <form action="<?= url_to('login'); ?>" method="post" class="flex flex-col">
        <?= csrf_field() ?>
        <label for="login">Enter your username or email address</label>
        <input type="text" name="login" id="login" placeholder="Username or email address" class="mt-2 mb-4 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.login')) : ?>border-red-600<?php endif ?>" value="<?php echo old('login'); ?>">
        <?php if (session('errors.login')) : ?>
          <small class=" text-red-600 text-sm"><?php echo session('errors.login'); ?></small>
        <?php endif; ?>
        <label for="password">Enter your password</label>
        <div class="relative flex items-center justify-end">
          <input type="password" name="password" id="password" placeholder="Password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.password')) : ?>border-red-600<?php endif ?>">
          <i id="password-toggle" class="bi bi-eye-slash absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]"></i>
        </div>
        <?php if (session('errors.password')) : ?>
          <small class=" text-red-600 text-sm"><?php echo session('errors.password'); ?></small>
        <?php endif; ?>
        <div class="flex justify-between mt-2">
          <div> Don't have an account? <a href="<?= url_to('register') ?>" class="text-[#18A8D8]">Register here.</a></div>
          <a href="<?= url_to('forgot') ?>" class="text-red-600">Forgot Password?</a>
        </div>

        <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Sign in</button>
        <div class="my-3 text-gray-400 text-center flex justify-center items-center">
          <hr class="h-[1px] w-full mr-4">
          <span>OR</span>
          <hr class="h-[1px] w-full ml-4">
        </div>

      </form>

      <div id="g_id_onload" data-client_id="68235445122-vho58k8ute13dv50g1s2m8jbcc5ufga5.apps.googleusercontent.com" data-context="signin" data-ux_mode="popup" data-login_uri="http://localhost:8080/kb/login" data-itp_support="true"></div>

      <div class="g_id_signin flex justify-center" data-type="standard" data-shape="rectangular" data-theme="filled_blue" data-text="signin_with" data-size="large" data-locale="en" data-logo_alignment="left"></div>
    </div>
  </div>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url(); ?>/src/js/script.js"></script>
</body>

</html>