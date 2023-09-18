<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
    <a href="<?php echo base_url(); ?>kb/administrator/complain">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
    <div class="font-medium">
      <a href="<?php echo base_url(); ?>kb/administrator/complain" class="text-main hover:text-sky-600">Complain</a>
      <span> / </span>
      <span>Reply Complain</span>
    </div>
  </div>
  <div class="flex mt-6 gap-3">
    <h2 class="font-bold text-xl">Subject Complain</h2>
    <div class="rounded-[15px] bg-progress-status text-progress-status-text py-1 px-3 text-xs">
      In Progress
    </div>
  </div>
  <div class="font-bold py-1">
    Nebula <span class="ps-5 text-form font-medium">&lt;NebulaWithOrion@gmail.com&gt;</span>
  </div>
  <div class="date text-form font-normal">Sat 30 Dec 2023, 21.20</div>

  <div class="h-[17rem] overflow-y-auto mt-3">
    <div class="px-4 flex flex-wrap text-sm">
      <div class="w-full flex justify-start gap-1">
        <div class="bg-slate-200 text-form p-2 rounded-lg mb-2 relative max-w-[90%]">
          <div class="py-0 px-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
          <div class="absolute left-0 top-3 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-slate-200"></div>
        </div>
        <div class="text-[0.6rem] text-form flex items-end pb-2">1 sept, 2.31 pm</div>
      </div>
      <div class="w-full flex justify-end gap-1">
        <div class="text-[0.6rem] text-form flex items-end pb-2">1 sept, 2.31 pm</div>
        <div class="bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative w-fit">
          <div class="py-0 px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</div>
          <div class="absolute right-0 top-3 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
        </div>
      </div>
    </div>
  </div>

  <form>
    <textarea id="message" rows="4" class="block p-2.5 w-full my-3 text-gray-800 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-main focus:border-main " placeholder="Leave a comment..."></textarea>
    <div class="text-right">
      <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg sm:w-auto px-6 py-2.5 text-center">Submit</button>
    </div>
  </form>






</div>

<?php echo $this->endSection(); ?>