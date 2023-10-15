<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section class="px-40 py-12 flex text-sm" id="main">
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
                                <a href="<?Php echo base_url() ?>kb/generalarticle?category=<?= $category['name_category'] ?>&subcategory=<?= $subcategory['name_subcategory']; ?>" class="subcategory-link block py-1 cursor-pointer hover:text-main" data-category="<?= $category['name_category']; ?>" data-subcategory="<?= $subcategory['name_subcategory']; ?>">
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

    <div class="w-9/12 px-4 2xl:ps-4 2xl:pe-32">
        <div class="font-medium px-3 text-sm">
            <a href="<?php echo base_url(); ?>kb" class="text-main hover:text-sky-600">Home</a>
            <span> / </span>
            <a href="<?php echo base_url(); ?>kb/generalarticle?category=<?= $category_title; ?>" class="text-main hover:text-sky-600"><?= $category_title; ?></a>
            <span> / </span>
            <span><?= $subcategory_title; ?></span>
        </div>


        <div class="flex flex-col mt-9">
            
            <h4 class="text-2xl font-bold ps-3"><?= $content->title; ?></h4>
            <div class="flex items-center gap-4 text-sm ps-3 mt-2 mb-5">
                <span class="uploadTime" datetime="<?= $content->created_at; ?>"><?= $content->created_at; ?></span>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span><?= $content->content_views; ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                    </svg>
                    <span><?= $content->good_insight; ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                    </svg>
                    <span><?= $content->bad_insight; ?></span>
                </div>
            </div>
            <div class="text-justify text-sm lg:text-base ps-6 mb-6">
                <?= $content->content; ?>
            </div>
            <div class="text-base font-semibold lg:text-xl ps-3 mb-2.5">
                Apakah artikel ini membantu?
            </div>
            <div class="reactions flex gap-7 ps-4">
                <div class="flex cursor-pointer gap-1 items-center font-semibold border-none border-slate-400 px-5 py-0.5" data-id="<?= $content->id; ?>" id="likes" data-type="like">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="<?= session('like') ? '#00d431' : 'none'; ?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                    </svg>
                    Iya
                </div>
                <div class="flex cursor-pointer gap-1 items-center font-semibold border-none border-slate-400 px-5 py-0.5" data-id="<?= $content->id; ?>" id="notlikes" data-type="dislike">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="<?= session('dislike') ? '#d10023' : 'none'; ?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                    </svg>
                    Tidak
                </div>
            </div>
            <?php if (session()->has('success')) : ?>
                <div class="flash-success" data-flashmessage="<?php echo session('success') ?>"></div>
            <?php else : ?>
                <div class="flash-error" data-flashmessage="<?php echo session('error') ?>"></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>