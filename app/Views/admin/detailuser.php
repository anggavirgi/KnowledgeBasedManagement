<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
      <a href="<?php echo base_url(); ?>kb/administrator/user">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
      </a>
      <div class="font-medium">
          <a href="<?php echo base_url(); ?>kb/administrator/user" class="text-main hover:text-sky-600">User</a>
          <span> / </span>
          <span>Detail User</span>
      </div>
  </div>

  <div class="flex justify-center items-center w-1/3 border rounded shadow-lg py-10 px-10">
    <div>
      <img src="<?php echo base_url() ?>src/images/profilepic.png" alt="" class="w-32 rounded-full object-cover">
    </div>
    <div></div>
  </div>

  <!-- <div class="flex mt-10 px-5">
    <div class="w-1/5">
      <div class="font-bold text-2xl">John Doe</div>
      <div class="text-sm">User</div>
    </div>

    <div class="w-4/5 pt-3">
      <div class="font-semibold text-main">Detail User</div>
      <hr class="w-1/2 my-3">
      <div class="text-sm">
        <div class="flex items-center border">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-main">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
            </svg>
          </div>
          <div class="">
            <div>Level</div>
            <div>Admin</div>
          </div>
        </div>
        <div class="flex">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-main">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
          </div>
          <div>
            <div>Level</div>
            <div>Admin</div>
          </div>
        </div>
        <div class="flex">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-main">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
          </div>        
          <div>
            <div>Level</div>
            <div>Admin</div>
          </div>
        </div>        
        <div class="flex">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-main">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
            </svg>
          </div>
          <div>
            <div>Level</div>
            <div>Admin</div>
          </div>
        </div>
        <div class="flex">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-main">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>
          </div>
          <div>
            <div>Level</div>
            <div>Admin</div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

</div>


<?php echo $this->endSection(); ?>