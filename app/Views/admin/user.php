<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
    <div class="font-bold text-xl">User List</div>
    <div class="flex justify-between items-center my-5">
        <form method="" class="relative flex justify-end items-center">
            <input type="text" id="searchInput" placeholder="search" class="px-5 py-2 w-64 rounded-2xl border border-gray-400 outline-main">
            <button class="absolute right-5 cursor-pointer align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        <div class="flex items-center gap-4">
            <div class="delete-batch hidden">
                <button type="button" class="btn-delete px-2 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500 hover:stroke-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </div>
            <a href="<?php echo base_url(); ?>kb/administrator/user/new" class="border border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
            </a>
        </div>
    </div>
    <div class="mb-5 flex items-center justify-end text-xs">
        <label for="entries" class="mr-2">Rows per page : </label>
        <div class="relative">
            <select id="row-entries" data-url="<?php echo base_url(); ?>kb/administrator/user/fetch" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
                <option value="10" selected>10</option>
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

    <table class="w-full text-left">
        <thead class="border-b">
            <tr>
                <th class="p-3">
                    <input type="checkbox" class="delete-all-checkbox" name="" id="">
                </th>
                <th class="p-3 flex gap-4 items-center">
                    <span>Name</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer">
                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v13.19l5.47-5.47a.75.75 0 111.06 1.06l-6.75 6.75a.75.75 0 01-1.06 0l-6.75-6.75a.75.75 0 111.06-1.06l5.47 5.47V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                </th>
                <th class="p-3">
                    Email
                </th>
                <th class="p-3">
                    Project Name
                </th>
                <th class="p-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody id="myTable">

        </tbody>
    </table>

    <?php
    // echo $pager->links(); 
    ?>

    <div class="flex justify-center mt-5 pagination-container">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight bg-white border rounded-l-lg hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white" data-page="previous">Previous</a>
                </li>
                <!-- Add data-page attributes to your page number buttons -->
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white" data-page="1">1</a>
                </li>
                <!-- Add data-page attributes to other page number buttons -->
                <!-- ... -->
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border rounded-r-lg hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white" data-page="next">Next</a>
                </li>
            </ul>
        </nav>
    </div>


</div>


<?php echo $this->endSection(); ?>