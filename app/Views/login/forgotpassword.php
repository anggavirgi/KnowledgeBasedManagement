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
      <form action="" method="" class="flex flex-col">
        <label for="email">Enter your email address</label>
        <input type="email" name="email" id="email" placeholder="Email address" class="mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
        
        <div class="flex justify-between mt-2">
          <div> Don't have an account? <a href="<?php echo base_url(); ?>kb/register" class="text-[#18A8D8]">Register here.</a></div>
        </div>
        
        <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Send</button>
      </form>
    </div>

  </div>
</body>
</html>