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
      <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="lg:w-44 w-32 m-5">
    </div>


    <!-- LOGIN CARD -->
    <div class="absolute w-[80%] md:w-[56%] lg:w-[45%] xl:w-[38%] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white h-auto py-6 px-10 rounded-3xl drop-shadow-lg">
      <div>Welcome, please register first.</div>
      <div class="text-[#18A8D8] text-[2.1rem] font-bold mt-2 mb-5">Sign up</div>
      <?php if (session()->has('error')) : ?>
        <p class="p-3 bg-[#CFF2DE] text-[#1F9254]"><?php echo session('error') ?></p>
      <?php endif; ?>
      <form action="<?= url_to('register') ?>" method="post" class="flex flex-col">
        <?= csrf_field() ?>
        <?php if (!isset($user)) : ?>
          <div class="flex justify-between">
            <div class="w-1/2 mr-4">
              <label for="name">Enter your name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.name')) : ?> border-red-600<?php endif; ?> " value="<?= old('name') ?>">
              <?php if (session('errors.name')) : ?>
                <small class=" text-red-600 text-sm"><?php echo session('errors.name') ?></small>
              <?php endif; ?>
            </div>
            <div class="w-1/2">
              <label for="username">Enter your username</label>
              <input type="text" name="username" id="username" placeholder="Username" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.username')) : ?> border-red-600<?php endif; ?> " value="<?= old('username') ?>">
              <?php if (session('errors.username')) : ?>
                <small class=" text-red-600 text-sm"><?php echo session('errors.username') ?></small>
              <?php endif; ?>
            </div>
          </div>

          <label for=" email">Enter your email address</label>
          <input type="email" name="email" id="email" placeholder="email address" class="mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.email')) : ?> border-red-600<?php endif; ?>" value="<?= old('email') ?>" value="<?= old('email'); ?>">
          <?php if (session('errors.email')) : ?>
            <small class=" text-red-600 text-sm"><?php echo session('errors.email') ?></small>
          <?php endif; ?>


          <label for=" password">Create password</label>
          <div class="relative flex items-center justify-end mb-1">
            <input type="password" name="password" id="password" placeholder="Password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.password')) : ?> border-red-600<?php endif; ?>">
            <i id="password-toggle" class="bi bi-eye-slash absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]"></i>
          </div>
          <?php if (session('errors.password')) : ?>
            <small class=" text-red-600 text-sm"><?php echo session('errors.password') ?></small>
          <?php endif; ?>
          <div class="relative flex items-center justify-end mb-3">
            <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirm Password" class="w-full mt-2 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.pass_confirm')) : ?> border-red-600<?php endif; ?>">
            <i id="cpassword-toggle" class="bi bi-eye-slash absolute mt-2 mr-4 cursor-pointer text-gray-400 hover:text-[#18A8D8]"></i>
          </div>
          <?php if (session('errors.pass_confirm')) : ?>
            <small class=" text-red-600 text-sm"><?php echo session('errors.pass_confirm') ?></small>
          <?php endif; ?>
          <input type="hidden" name="level" id="level" value="user">
          <div class="flex justify-between">
            <div class="w-1/2 mr-4">
              <label for="status_user">Choose User Status</label>
              <select name="status_user" id="status_user" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.status_user')) : ?> border-red-600<?php endif; ?>">
                <option value="">Select user status</option>
                <option value="new_user" <?php if (old('status_user') == "new_user") {
                                            echo "selected";
                                          } ?>>New User</option>
                <option value="old_user" <?php if (old('status_user') == "old_user") {
                                            echo "selected";
                                          } ?>>Old User</option>
              </select>
              <?php if (session('errors.status_user')) : ?>
                <small class=" text-red-600 text-sm"><?php echo session('errors.status_user') ?></small>
              <?php endif; ?>
            </div>
            <div class="w-1/2">
              <label for="id_project">Choose your project</label>
              <select disabled name="id_project" id="id_project" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.id_project')) : ?> border-red-600<?php endif; ?>">
                <option value="">Select project</option>
                <?php foreach ($project as $project) : ?>
                  <option value="<?= $project['id'] ?>" <?php echo old('project') == $project['id'] ? "selected" : "" ?>><?= $project['name_project'] ?></option>
                <?php endforeach; ?>
              </select>
              <?php if (session('errors.id_project')) : ?>
                <small class=" text-red-600 text-sm"><?php echo session('errors.id_project') ?></small>
              <?php endif; ?>
            <?php else : ?>
              <?php d($user); ?>
              <input type="hidden" name="level" id="level" value="user">
              <input type="hidden" name="name" id="name" value="<?= $user['given_name']; ?>">
              <input type="hidden" name="email" id="email" value="<?= $user['email']; ?>">
              <label for="name">Enter your name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.name')) : ?> border-red-600<?php endif; ?> " value="<?= old('name') ?>">
              <?php if (session('errors.name')) : ?>
                <small class=" text-red-600 text-sm"><?php echo session('errors.name') ?></small>
              <?php endif; ?>
              <div class="flex justify-between">
                <div class="w-1/2 mr-4">
                  <label for="status_user">Choose User Status</label>
                  <select name="status_user" id="status_user" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.status_user')) : ?> border-red-600<?php endif; ?>">
                    <option value="">Select user status</option>
                    <option value="new_user" <?php if (old('status_user') == "new_user") {
                                                echo "selected";
                                              } ?>>New User</option>
                    <option value="old_user" <?php if (old('status_user') == "old_user") {
                                                echo "selected";
                                              } ?>>Old User</option>
                  </select>
                  <?php if (session('errors.status_user')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.status_user') ?></small>
                  <?php endif; ?>
                </div>
                <div class="w-1/2">
                  <label for="id_project">Choose your project</label>
                  <select disabled name="id_project" id="id_project" class="w-full mt-2 mb-3 px-4 py-2 rounded-md border border-gray-400 outline-[#18A8D8] <?php if (session('errors.id_project')) : ?> border-red-600<?php endif; ?>">
                    <option value="">Select project</option>
                    <?php foreach ($project as $project) : ?>
                      <option value="<?= $project['id'] ?>" <?php echo old('project') == $project['id'] ? "selected" : "" ?>><?= $project['name_project'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <?php if (session('errors.id_project')) : ?>
                    <small class=" text-red-600 text-sm"><?php echo session('errors.id_project') ?></small>
                  <?php endif; ?>
                <?php endif; ?>
                </div>
              </div>

              <div class="flex justify-between">
                <div> Already have an account? <a href="<?= url_to('login') ?>" class="text-[#18A8D8]">Login here.</a></div>
              </div>

              <button class="mt-4 py-2 text-center text-white rounded-md bg-[#115da5] hover:bg-[#0c5091]">Sign up</button>
              <div class="my-3 text-gray-400 text-center flex justify-center items-center">
                <hr class="h-[1px] w-full mr-4">
                <span>OR</span>
                <hr class="h-[1px] w-full ml-4">
              </div>

              <button class="flex justify-center py-2 rounded-md bg-[#FFF4E3] hover:bg-[#f7ead5]">
                <div class="mr-3"><img src="<?php echo base_url(); ?>src/images/google.png" alt="" class="w-[83%]"></div>
                <div>Sign up with Google</div>
              </button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url(); ?>/src/js/script.js"></script>
</body>

</html>