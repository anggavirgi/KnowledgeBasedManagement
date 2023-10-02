<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
    <a href="<?php echo base_url(); ?>kb/administrator/category">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
    <div class="font-medium">
      <a href="<?php echo base_url(); ?>kb/administrator/category" class="text-main hover:text-sky-600">Category</a>
      <span> / </span>
      <span>Edit Category</span>
    </div>
  </div>
  <form action="<?php echo base_url(); ?>kb/administrator/category/<?php echo $category['id'] ?>" method="post" enctype="multipart/form-data" class="ms-7 my-10">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="slug" value="<?php echo $category['slug'] ?>">
    <input type="hidden" name="old_icon" value="<?php echo $category['icon'] ?>">
    <div class="mb-5">
      <label for="category" class="block mb-2 text-sm font-medium text-gray-800">Category name</label>
      <input type="category" id="category" name="category" value="<?php echo $category['name_category'] ?>" class="bg-gray-50 border text-gray-800 text-sm rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-2/4 p-4  <?php if (session('errors.category')) : ?>border-red-600<?php endif ?>" placeholder="Category name">
      <?php if (session('errors.category')) : ?>
          <div class="mt-1">
              <small class=" text-red-600 text-sm"><?= session('errors.category'); ?></small>
          </div>
      <?php endif; ?>
    </div>
    <div class="mb-11">
      <div class="flex items-center justify-start ">
        <label for="dropzone-file" id="dropzone" class="flex flex-col items-center justify-center w-72 h-56 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 <?php if (session('errors.icon')) : ?>border-red-600<?php endif ?>">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
            </svg>
          </div>
          <input id="dropzone-file" type="file" class="hidden" name="icon" onchange="handleFileChange(this.files)"/>
          <p id="selected-file-name" class="mb-2 text-sm font-semibold text-center text-main">
            <?php echo $category['icon'] ?>
          </p>
        </label>
      </div>
      <?php if (session('errors.icon')) : ?>
          <div class="mt-1">
              <small class=" text-red-600 text-sm"><?= session('errors.icon'); ?></small>
          </div>
      <?php endif; ?>
    </div>

    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-1 focus:ring-main font-medium rounded-lg text-sm px-6 py-2.5 mr-8 ">Cancel</button>
    <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-6 py-2.5 text-center">Submit</button>
  </form>
</div>

<?php echo $this->endSection(); ?>