<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
    <a href="<?php echo base_url(); ?>kb/administrator/category/subcategory/<?= $categoryId; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
    <div class="font-medium">
      <a href="<?php echo base_url(); ?>kb/administrator/category" class="text-main hover:text-sky-600">Category</a>
      <span> / </span>
      <a href="<?php echo base_url(); ?>kb/administrator/category/subcategory/<?= $categoryId; ?>" class="text-main hover:text-sky-600">Sub-Category</a>
      <span> / </span>
      <span>Add Sub-Category</span>
    </div>
  </div>
  <form class="ms-7 my-10" action="<?php echo base_url(); ?>kb/administrator/category/subcategory/addsubcategory" method="post">
    <?php echo csrf_field(); ?>
    <div class="mb-4 relative">
      <label for="id_category" class="block mb-2 text-sm font-medium text-form">Choose Category</label>
      <select id="id_category" name="id_category" class="cursor-pointer bg-gray-50 border appearance-none border-gray-300 text-sm rounded-lg block w-2/4 p-4 text-form focus:outline-none focus:ring-blue-500 focus:border-blue-500 <?php if (session('errors.id_category')) : ?>border-red-600<?php endif ?>">
        <option value="">Choose category</option>
        <?php foreach ($category as $category) : ?>
          <option value="<?= $category['id'] ?>" <?php echo $categoryId == $category['id'] ? "selected" : "" ?>><?= $category['name_category'] ?></option>
        <?php endforeach; ?>
      </select>
      <div class="w-2/4 absolute inset-y-0 right-8 top-7 flex items-center pr-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
      <?php if (session('errors.id_category')) : ?>
        <div class="mt-1">
          <small class=" text-red-600 text-sm"><?= session('errors.id_category'); ?></small>
        </div>
      <?php endif; ?>
    </div>
    <div class="mb-5">
      <label for="subcategory" class="block mb-2 text-sm font-medium text-form">Sub-Category name</label>
      <input type="text" id="subcategory" name="subcategory" class="bg-gray-50 border text-form text-sm rounded-lg focus:outline-none focus:ring-blue-500 focus:border-blue-500 <?php if (session('errors.subcategory')) : ?>border-red-600<?php endif ?> w-2/4 p-4  " placeholder="Category name" value="<?= old("subcategory") ?>">
      <?php if (session('errors.subcategory')) : ?>
        <div class="mt-1">
          <small class=" text-red-600 text-sm"><?= session('errors.subcategory'); ?></small>
        </div>
      <?php endif; ?>
    </div>

    <button type="reset" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-1 focus:ring-main font-medium rounded-lg text-sm px-6 py-2.5 mr-8 ">Cancel</button>
    <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-6 py-2.5 text-center">Submit</button>
  </form>
</div>

<?php echo $this->endSection(); ?>