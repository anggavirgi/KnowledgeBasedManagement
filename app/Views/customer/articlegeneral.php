    <?php echo $this->extend('customer/layout'); ?>

    <?php echo $this->section('content'); ?>
    <section class="lg:px-20 xl:px-40 py-12 flex text-sm" id="main">
        <div class="w-1/4 pt-14 pe-8 2xl:px-24">
            <h2 class="font-bold text-lg mb-3">All Categories</h2>
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center font-semibold cursor-pointer hover:text-main">
                    <div id="title1">Product</div>
                    <div class="text-xl cursor-pointer collapsible" data-target="collapse1" data-title="title1">
                        <i class="bi bi-chevron-down icon text-sm"></i>
                    </div>
                </div>
                <div class="flex justify-between items-center font-semibold cursor-pointer hover:text-main">
                    <div id="title2">Error system</div>
                    <div class="text-xl cursor-pointer collapsible" data-target="collapse2" data-title="title2">
                        <i class="bi bi-chevron-down icon text-sm"></i>
                    </div>
                </div>
                <div class="flex justify-between items-center font-semibold cursor-pointer hover:text-main">
                    <div id="title3">Payment</div>
                    <div class="text-xl cursor-pointer collapsible" data-target="collapse3" data-title="title3">
                        <i class="bi bi-chevron-down icon text-sm"></i>
                    </div>
                </div>
                <div class="flex justify-between items-center font-semibold cursor-pointer hover:text-main">
                    <div id="title4">Services</div>
                    <div class="text-xl cursor-pointer collapsible" data-target="collapse4" data-title="title4">
                        <i class="bi bi-chevron-down icon text-sm"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-9/12 px-4 2xl:ps-4 2xl:pe-32">
            <div class="font-medium px-3 text-sm">
                <a href="<?php echo base_url(); ?>kb" class="text-main hover:text-sky-600">Home</a>
                <span> / </span>
                <span>Categories</span>
            </div>

            <div class="mt-8">
                <h4 class="text-3xl font-bold ps-3 mb-2">Product</h4>
                <a href="<?Php echo base_url() ?>kb/generalarticle/generalarticledetail" class="block px-3 py-5 text-lg hover:bg-gray-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa?
                </a>
                <hr>
                <a href="<?Php echo base_url() ?>kb/generalarticle/generalarticledetail" class="block px-3 py-5 text-lg hover:bg-gray-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa?
                </a>
                <hr>
                <a href="<?Php echo base_url() ?>kb/generalarticle/generalarticledetail" class="block px-3 py-5 text-lg hover:bg-gray-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa?
                </a>
                <hr>
                <a href="<?Php echo base_url() ?>kb/generalarticle/generalarticledetail" class="block px-3 py-5 text-lg hover:bg-gray-100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa?
                </a>
                <hr>
            </div>
        </div>
        <!-- <div class="flex px-5" id="categories">
            <div class=" border-r-2 p-5 pt-36 w-2/12">
                <h4 class=" font-bold text-lg">All Categories</h4>
            </div>
            <div class="px-10 pt-24 pb-48 w-10/12">
                <p>Home > Categories</p>
                <div id="general_question" class="mt-7 w-full">
                    <div class="border-solid border-[1px] border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title1">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse1" data-title="title1">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse1">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-[1px] border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title2">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse2" data-title="title2">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse2">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-[1px] border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title3">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse3" data-title="title3">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse3">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-[1px] border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title4">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse4" data-title="title4">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse4">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-[1px] border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title5">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse5" data-title="title5">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse5">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <?php echo $this->endSection(); ?>