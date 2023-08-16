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
      <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="lg:w-44 w-32 m-5">
    </div>

    <!-- LOGIN CARD -->
    <div class="absolute w-[80%] md:w-[56%] lg:w-[45%] xl:w-[38%] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white h-auto py-6 px-10 rounded-3xl drop-shadow-lg">
      <div>Welcome, please register first.</div>
      <div class="text-[#18A8D8] text-[2.1rem] font-bold mt-2 mb-5">Sign up</div>
      <form action="" method="" class="flex flex-col">
        
        <div class="flex justify-between">
          <div class="w-1/2 mr-4">
            <label for="name">Enter your name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">    
          </div>
          <div class="w-1/2">
            <label for="username">Enter your username</label>
            <input type="text" name="username" id="username" placeholder="Username" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">    
          </div>
        </div>
        
        <label for="email">Enter your email address</label>
        <input type="email" name="email" id="email" placeholder="email address" class="mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
        
        <label for="password">Create password</label>
        <div class="relative flex items-center justify-end mb-1">
          <input type="password" name="password" id="password" placeholder="Password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg>
        </div>
        <div class="relative flex items-center justify-end mb-3">
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
          </svg>
        </div>
          
        <div class="flex justify-between">
          <div class="w-1/2 mr-4">
            <label for="status_user">Are you new / old user</label>
            <select name="status_user" id="status_user" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
              <option value="">User Baru</option>
              <option value="">User Lama</option>
            </select>
          </div>
          <div class="w-1/2">
            <label for="project">Choose your project</label>
            <select name="project" id="project" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8]">
              <option value="">Projek 1</option>
              <option value="">Projek 2</option>
              <option value="">Projek 3</option>
            </select>    
          </div>
        </div>

        <div class="flex justify-between">
          <div> Already have an account? <a href="<?php echo base_url(); ?>kb/login" class="text-[#18A8D8]">Login here.</a></div>
        </div>

        <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Sign up</button>
        <div class="my-3 text-gray-400 text-center flex justify-center items-center">
          <hr class="h-[1px] w-full mr-4">
          <span>OR</span>
          <hr class="h-[1px] w-full ml-4">
        </div>
        
        <button class="flex justify-center py-2 rounded-md bg-[#FFF4E3] hover:bg-[#f7ead5]">
          <div class="mr-3"><img src="<?php echo base_url(); ?>src/images/google.png" alt=""  class="w-[83%]"></div>
          <div>Sign up with Google</div>
        </button>
      </form>
    </div>

  </div>
</body>

</html>