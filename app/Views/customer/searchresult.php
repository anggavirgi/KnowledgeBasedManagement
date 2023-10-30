<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section id="main">
    <div class="container lg:w-8/12 mx-auto">

        <div class="m-7 md:mx-12 mb-20">
            <h2 class="font-bold text-2xl mb-5">Search Result for "<?php echo $keyword; ?>"</h2>
            <?php if ($contents != null) { ?>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    <h3 class="font-bold text-xl uppercase">Frequently Ask Questions</h3>
                </div>
                <?php foreach ($contents as $content) : ?>
                    <a href="<?= base_url('kb/personalarticle/personalarticledetail?category=' . $content['name_category'] . '&subcategory=' . $content['name_subcategory'] . '&article=' . $content['slug']) ?>">
                        <div class="pb-3 flex flex-col px-2 hover:shadow-md hover:shadow-gray-200">
                            <div data-article-id="<?= $content['id']; ?>" class="article-link pt-3 pb-2 font-semibold text-xl text-orange-600"><?= $content['title']; ?></div>
                            <div class="font-medium text-sm border-b-2 pb-3">
                                <span><?= $content['name_category']; ?></span>
                                <span> / </span>
                                <span><?= $content['name_subcategory']; ?></span>
                                <span> / </span>
                                <span><?= $content['name_project']; ?></span>
                            </div>
                            <span class="flex text-ellipsis pt-3 text-sm overflow-hidden text-justify whitespace-nowrap">
                                <?= $content['content']; ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php } ?>
            <?php if ($complains != null) { ?>
                <div class="flex items-center gap-2 mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    <h3 class="font-bold text-xl uppercase">Complains</h3>
                </div>
                <?php foreach ($complains as $complain) : ?>
                    <a href="<?= base_url('kb/complain/reply?complainId=' . $complain['slug']) ?>">
                        <div class="pb-3 flex flex-col mb-3 hover:shadow-md hover:shadow-gray-200 px-2">
                            <div class="py-2 pb-2 font-semibold text-xl text-orange-600"><?php echo $complain['subject'] ?></div>
                            <div class="flex gap-3 text-sm font-semibold">
                                <span><?= date("F Y", strtotime($complain['created_at'])); ?></span>
                                <span><?php echo $complain['name_project'] ?></span>
                            </div>
                            <hr class="mb-2 mt-3">
                            <span class="text-ellipsis text-sm overflow-hidden text-justify whitespace-nowrap">
                                <?php echo $complain['description'] ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php } ?>
        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>