<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <h2 class="font-bold text-xl">List Category</h2>
  <div class="flex justify-between items-center my-5">
    <form method="" class="relative flex justify-end items-center">
      <input type="text" id="searchInput" placeholder="search" class="px-5 py-2 pe-10 w-64 rounded-2xl border border-gray-400 outline-main">
      <button class="absolute right-5 cursor-pointer align-middle" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </button>
    </form>
    <div class="flex items-center gap-4">
      <div class="delete-batch hidden">
        <button type="button" class="delete-batch-btn inline-block px-4 py-2 border border-white hover:border-red-600 rounded-2xl bg-red-500 hover:bg-red-600" data-action="/kb/administrator/category/deleteBatch">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
          </svg>
        </button>
      </div>
      <a href="<?php echo base_url(); ?>kb/administrator/category/new" class="border border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" width="20" height="20">
          <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
        </svg>
      </a>
    </div>
  </div>
  <div class="mb-5 flex items-center justify-end text-xs">
    <label for="entries" class="mr-2">Rows per page : </label>
    <div class="relative">
      <?php $options = [10, 25, 50, 100]; ?>
      <?php if (isset($pagination)) : ?>
        <select id="row-entries" data-url="<?php echo base_url(); ?>kb/administrator/category/fetch" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
          <?php foreach ($options as $option) : ?>
            <option value="<?php echo $option; ?>" <?php echo isset($pagination) && $pagination['perPage'] == $option ? 'selected' : ''; ?>><?php echo $option; ?></option>
          <?php endforeach; ?>
        </select>
      <?php else : ?>
        <select id="row-entries" data-url="<?php echo base_url(); ?>kb/administrator/category/fetch" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
          <?php foreach ($options as $option) : ?>
            <option value="<?php echo $option; ?>" <?php echo isset($pagination) && $pagination['perPage'] == $option ? 'selected' : ''; ?>><?php echo $option; ?></option>
          <?php endforeach; ?>
        </select>
      <?php endif; ?>
      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
    </div>
  </div>

  <div class="mb-5 flex items-center justify-end text-xs">
    <label for="entries" class="mr-2">Rows per page : </label>
    <div class="relative">
      <select id="entries" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
    </div>
  </div>

  <?php if (session()->has('success')) : ?>
    <div class="flash-success" data-flashmessage="<?php echo session('success') ?>"></div>
  <?php else : ?>
    <div class="flash-error" data-flashmessage="<?php echo session('error') ?>"></div>
  <?php endif; ?>

  <table class="w-full text-center" id="dataTable">
    <thead class="border-b">
      <tr>
        <th class="p-3">
          <input type="checkbox" class="delete-all-checkbox" name="" id="">
        </th>
        <th class="p-3 w-64">Name</th>
        <th class="p-3">Icon</th>
        <th class="p-3">Total Sub-Category</th>
        <th class="p-3">Action</th>
      </tr>
    </thead>
    <tbody class="border-b">
    <tbody>
      <?php foreach ($categories as $category) : ?>
        <tr class="border-b hover:bg-gray-50">
          <td class="p-3" data-id="<?php echo $category['id'] ?>">
            <input type="checkbox" class="delete-checkbox" name="" id="">
          </td>
          <!-- <td class="p-3">1</td> -->
          <td class="p-3"><?php echo $category['name_category'] ?></td>
          <td class="p-3">
            <img src="<?php echo base_url() ?>src/images/icon/<?php echo $category['icon'] ?>" alt="" class="mx-auto w-8 h-8 object-cover">
          </td>
          <td class="p-3">
            <?php
            $categoryId = $category['id'];
            $subcategoryCount = 0;
            foreach ($subCategory as $subCount) {
              if ($subCount['id_category'] == $categoryId) {
                $subcategoryCount = $subCount['subcategory_count'];
                break;
              }
            }
            echo $subcategoryCount;
            ?>
          </td>
          <td class="p-3 text-center">
            <a href="<?php echo base_url() ?>kb/administrator/category/subcategory?category_id=<?= $category['id']; ?>" class="px-2 inline-block" title="sub-category">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-main hover:stroke-blue-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
              </svg>
            </a>
            <a href="<?php echo base_url() ?>kb/administrator/category/edit/<?= $category['id']; ?>" class="px-2 inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-secondary hover:stroke-yellow-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
            </a>
            <button type="button" class="btn-delete px-2 inline-block" data-id="<?= $category['id']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500 hover:stroke-red-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="flex justify-center mt-5">
    <nav aria-label="Page navigation example">
      <ul class="inline-flex -space-x-px text-sm">
        <?php if (isset($pagination) && $pagination['page'] > 1) : ?>
          <li>
            <a href="<?php echo base_url(); ?>kb/administrator/category?page=<?php echo $pagination['page'] - 1; ?>&perPage=<?php echo $pagination['perPage']; ?>" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight bg-white border rounded-l-lg hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400">Previous</a>
          </li>
        <?php endif; ?>
        <?php if (isset($pagination)) : ?>
          <?php for ($i = 1; $i <= $pagination['totalPages']; $i++) : ?>
            <li>
              <a href="<?php echo base_url(); ?>kb/administrator/category?page=<?php echo $i; ?>&perPage=<?php echo $pagination['perPage']; ?>" class="flex items-center justify-center px-3 h-8 border border-white <?php echo ($i == $pagination['page']) ? 'bg-main text-white' : 'bg-white text-gray-400'; ?> hover:bg-main hover:text-white"><?php echo $i; ?></a>
            </li>
          <?php endfor; ?>
          <?php if ($pagination['page'] < $pagination['totalPages']) : ?>
            <li>
              <a href="<?php echo base_url(); ?>kb/administrator/category?page=<?php echo $pagination['page'] + 1; ?>&perPage=<?php echo $pagination['perPage']; ?>" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400">Next</a>
            </li>
          <?php endif; ?>
        <?php else : ?>
          <!-- Set pagination page active to page 1 when $pagination is not set -->
          <?php
          $pagination['page'] = 1;
          $pagination['perPage'] = 10;
          ?>
          <?php for ($i = 1; $i <= $pagination['page']; $i++) : ?>
            <li>
              <a href="<?php echo base_url(); ?>kb/administrator/category?page=<?php echo $i; ?>&perPage=<?php echo $pagination['perPage']; ?>" class="flex items-center justify-center px-3 h-8 border border-white <?php echo ($i == $pagination['page']) ? 'bg-main text-white' : 'bg-white text-gray-400'; ?> hover:bg-main hover:text-white"><?php echo $i; ?></a>
            </li>
          <?php endfor; ?>
          <li>
            <a href="<?php echo base_url(); ?>kb/administrator/category?page=<?php echo $pagination['page'] + 1; ?>&perPage=<?php echo $pagination['perPage']; ?>" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400">Next</a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>

</div>

<?php echo $this->endSection(); ?>