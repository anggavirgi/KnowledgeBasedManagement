<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="relative">
    <button data-drawer-target="drawer-disabled-backdrop" data-drawer-show="drawer-disabled-backdrop" data-drawer-backdrop="false" aria-controls="drawer-disabled-backdrop" type="button" class="inline-flex items-center text-sm text-gray-500 rounded-r-lg sm:hidden p-1 mt-3 bg-main">
        <span class="sr-only">Open sidebar</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    </button>
    <aside id="drawer-disabled-backdrop" class="absolute top-0 sm:hidden left-0 z-50 w-44 h-screen transition-transform -translate-x-full sm:translate-x-0 " aria-label="Sidebar">
        <div id="drawer-disabled-backdrop" class="h-full px-3 py-4 overflow-y-auto bg-gray-50 bg-main">
            <ul class="space-y-2 font-bold text-lg">
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-white text-sm transition duration-75 rounded-lg hover:text-sky-800" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1  text-left whitespace-nowrap">E-commerce</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Products</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Billing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-white text-sm transition duration-75 rounded-lg hover:text-sky-800" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1  text-left whitespace-nowrap">E-commerce</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Products</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Billing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-white text-sm transition duration-75 rounded-lg hover:text-sky-800" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1  text-left whitespace-nowrap">E-commerce</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Products</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Billing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-white text-sm transition duration-75 rounded-lg pl-4 hover:text-sky-800">Invoice</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </aside>
</div>

<section class="lg:px-20 xl:px-40 pb-12 sm:py-12 flex text-sm" id="main">
    <div class="w-1/4 pt-14 pe-8 2xl:px-24 hidden md:block px-7">
        <h2 class="font-bold text-lg mb-3">All Categories</h2>
        <div class="flex flex-col gap-2">
            <?php
            $i = 1;
            foreach ($categories as $category) : ?>
                <div class="collapsiblesidebar" data-target="collapsesidebar<?= $i; ?>" data-title="titlesidebar<?= $i; ?>">
                    <div class="flex justify-between items-center font-semibold cursor-pointer hover:text-main">
                        <div id="titlesidebar<?= $i; ?>"><?= $category['name_category']; ?></div>
                        <div class="text-xl cursor-pointer">
                            <i class="bi bi-chevron-down icon text-sm"></i>
                        </div>
                    </div>
                    <div class="hidden ms-1 mt-1 sidebarcollapse" id="collapsesidebar<?= $i; ?>">
                        <?php foreach ($subcategories as $subcategory) :
                            if ($subcategory['id_category'] == $category['id']) :
                        ?>
                                <a href="javascript:void(0);" class="subcategory-link block py-1 cursor-pointer hover:text-main" data-category="<?= $category['name_category']; ?>" data-subcategory="<?= $subcategory['name_subcategory']; ?>">
                                    <?= $subcategory['name_subcategory']; ?>
                                </a>
                        <?php
                            endif;
                        endforeach; ?>
                    </div>
                </div>
            <?php $i++;
            endforeach; ?>
        </div>
    </div>

    <div class="w-full md:w-9/12 px-4 2xl:ps-4 2xl:pe-32">
        <div class="font-medium px-3 text-sm">
            <a href="<?php echo base_url(); ?>kb" class="text-main hover:text-sky-600">Home</a>
            <span> / </span>
            <span id="breadcrumb-category">Category</span>
        </div>
        <div class="mt-8">
            <h4 class="text-2xl font-bold ps-3 mb-2" id="content-title"><?= isset($subcategory_title) ? $subcategory_title : $category_title; ?></h4>
            <div id="content-container">
                <?php foreach ($content as $content) :
                    if ($content['name_category'] === $category_title && !isset($subcategory_title) || $content['name_subcategory'] === $subcategory_title) : ?>
                        <a href="<?= base_url('kb/generalarticle/generalarticledetail?category=' . $content['name_category'] . '&subcategory=' . $content['name_subcategory'] . '&article=' . $content['slug']) ?>" data-article-id="<?= $content['id']; ?>" class="article-link block px-3 py-5 text-base hover:bg-gray-100">
                            <?= $content['title']; ?>
                        </a>
                        <hr>
                <?php
                    endif;
                endforeach; ?>
            </div>
        </div>
    </div>

</section>

<?php echo $this->endSection(); ?>