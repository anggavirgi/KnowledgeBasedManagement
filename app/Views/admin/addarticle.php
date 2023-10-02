<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
    <a href="<?php echo base_url(); ?>kb/administrator/article">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
    <div class="font-medium">
      <a href="<?php echo base_url(); ?>kb/administrator/article" class="text-main hover:text-sky-600">Article</a>
      <span> / </span>
      <span>Add Article</span>
    </div>
  </div>
  <form action="<?php echo base_url(); ?>kb/administrator/article" method="post" enctype="multipart/form-data" class="px-6 my-10">
    <div class="mb-4">
      <label for="email" class="block mb-2 font-medium text-gray-800">Title article</label>
      <input type="email" id="email" name="title" class="bg-gray-50 border text-gray-800 rounded-lg  focus:ring-main focus:outline-none focus:border-main w-full p-3" placeholder="Category name">
    </div>
    <div class="flex justify-between gap-5">
      <div class="select-category w-full">
        <label for="default" class="block mb-2 font-medium text-gray-800">Category</label>
        <select id="default" name="category" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 mb-6 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3">
          <option selected>Select category</option>
          <option value="category-1">category-1</option>
          <option value="category-2">category-2</option>
          <option value="category-3">category-3</option>
          <option value="category-4">category-4</option>
        </select>
      </div>
      <div class="select-category w-full">
        <label for="default" class="block mb-2 font-medium text-gray-800">Select sub category</label>
        <select id="default" name="sub-category" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 mb-6 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3">
          <option selected>Select Sub category</option>
          <option value="category-1">Sub category-1</option>
          <option value="category-2">Sub category-2</option>
          <option value="category-3">Sub category-3</option>
          <option value="category-4">Sub category-4</option>
        </select>
      </div>
      <div class="select-category w-full">
        <label for="default" class="block mb-2 font-medium text-gray-800">Select project</label>
        <select id="default" name="project" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 mb-6 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3">
          <option selected>Select project</option>
          <option value="category-1">Project-1</option>
          <option value="category-2">Project-2</option>
          <option value="category-3">Project-3</option>
          <option value="category-4">Project-4</option>
        </select>
      </div>
    </div>

    <div class="mb-5">
      <div id="editor" name="description"></div>
    </div>

    <button type="button" class="text-gray-800 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-1 focus:ring-main font-medium rounded-lg px-6 py-2.5 mr-8 ">Cancel</button>
    <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg sm:w-auto px-6 py-2.5 text-center">Submit</button>
  </form>

</div>

<?php echo $this->endSection(); ?>