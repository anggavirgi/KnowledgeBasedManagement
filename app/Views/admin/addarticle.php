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
    <div>
      <label for="title" class="block mb-2 font-medium text-gray-800">Title article</label>
      <input type="text" id="title" name="title" class="bg-gray-50 border text-gray-800 rounded-lg  focus:ring-main focus:outline-none focus:border-main w-full p-3 <?php if (session('errors.title')) : ?>border-red-600<?php endif ?>" placeholder="How to prevent error" value="<?= old("title") ?>">
    </div>
    <?php if (session('errors.title')) : ?>
      <div class="mt-1">
        <small class=" text-red-600 text-sm"><?= session('errors.title'); ?></small>
      </div>
    <?php endif; ?>
    <div class="flex justify-between gap-5 mt-4">
      <div class="select-category w-full">
        <label for="categorySelect" class="block mb-2 font-medium text-gray-800">Category</label>
        <select id="categorySelect" name="category" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3 <?php if (session('errors.category')) : ?>border-red-600<?php endif ?>">
          <option value="">Select category</option>
          <?php foreach ($category as $category) : ?>
            <option value="<?= $category['id'] ?>" <?php echo old('category') == $category['id'] ? "selected" : "" ?>><?= $category['name_category'] ?></option>
          <?php endforeach; ?>
        </select>
        <?php if (session('errors.category')) : ?>
          <div class="mt-1">
            <small class=" text-red-600 text-sm"><?= session('errors.category'); ?></small>
          </div>
        <?php endif; ?>
      </div>
      <div class="select-category w-full">
        <label for="subcategorySelect" class="block mb-2 font-medium text-gray-800">Select sub category</label>
        <select id="subcategorySelect" name="subcategory" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3 <?php if (session('errors.subcategory')) : ?>border-red-600<?php endif ?>" disabled>
          <option value="">Select Sub category</option>
          <?php foreach ($sub_category as $sub_category) : ?>
            <option class="<?= $sub_category['id_category'] ?>" value="<?= $sub_category['id'] ?>" <?php echo old('subcategory') == $sub_category['id'] ? "selected" : "" ?>><?= $sub_category['name_subcategory'] ?></option>
          <?php endforeach; ?>
        </select>
        <?php if (session('errors.subcategory')) : ?>
          <div class="mt-1">
            <small class=" text-red-600 text-sm"><?= session('errors.subcategory'); ?></small>
          </div>
        <?php endif; ?>
      </div>
      <div class="select-category w-full">
        <label for="default" class="block mb-2 font-medium text-gray-800">Select project</label>
        <select id="default" name="project" class="cursor-pointer bg-gray-50 border border-gray-300 text-gray-800 rounded-lg focus:ring-main focus:outline-none focus:border-main block w-full p-3 <?php if (session('errors.project')) : ?>border-red-600<?php endif ?>">
          <option value="">Select project</option>
          <?php foreach ($project as $project) : ?>
            <option value="<?= $project['id'] ?>" <?php echo old('project') == $project['id'] ? "selected" : "" ?>><?= $project['name_project'] ?></option>
          <?php endforeach; ?>
        </select>
        <?php if (session('errors.project')) : ?>
          <div class="mt-1">
            <small class=" text-red-600 text-sm"><?= session('errors.project'); ?></small>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="mt-5 mb-2 flex gap-1 items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-yellow-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
      </svg>
      <span class="text-yellow-600">Before filling in the content (field below), make sure all the fields above have been filled in !</span>
    </div>

    <div>
      <textarea id="editor" name="description"><?= old('description') ?></textarea>
    </div>

    <div class="mt-5">
      <a href="<?php echo base_url() ?>kb/administrator/article" class="text-gray-800 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-1 focus:ring-main font-medium rounded-lg px-6 py-2.5 mr-8 ">Cancel</a>
      <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg sm:w-auto px-6 py-2.5 text-center">Submit</button>
    </div>
  </form>

</div>

<?php echo $this->endSection(); ?>