<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section class="px-40 py-12 flex text-sm" id="main">
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
            <a href="<?php echo base_url(); ?>kb" class="text-main hover:text-sky-600">Product</a>
            <span> / </span>
            <span>Lorem ipsum dolor sit amet.</span>
        </div>

        <div class="flex flex-col mt-8">
            <h4 class="text-3xl font-bold ps-3 mb-6">Lorem ipsum dolor sit amet.</h4>
            <div class="text-justify text-sm lg:text-base ps-6 mb-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, necessitatibus ipsa veritatis iste minima saepe aspernatur itaque quia modi, dolorum a. Id et hic qui nam inventore illo nisi suscipit praesentium deserunt cumque fugiat magnam, possimus aliquid. Quam delectus, nostrum enim illum quos distinctio eaque consectetur nisi consequuntur ut. Atque, dolorem dolor labore tenetur in placeat, quisquam ea incidunt at deleniti eum. Aliquam autem cum, architecto amet asperiores alias maiores excepturi sint id, repellendus, perferendis laudantium quisquam? Excepturi quas eligendi delectus. Illum maiores dolor sapiente dolorum, pariatur odit rem necessitatibus ab debitis, dolore facilis reprehenderit ipsum aliquid iste harum, ratione delectus fugit vero itaque natus quasi ut? Voluptate animi ullam, nesciunt voluptatibus amet facere tenetur necessitatibus laudantium hic enim nam praesentium adipisci, eveniet est quia ducimus quae unde provident debitis voluptatem iusto cum ut culpa inventore. Non ab iusto numquam. Nostrum numquam aspernatur quis incidunt velit cupiditate, libero eius mollitia ducimus repellat esse voluptatibus, alias quo omnis perspiciatis dolorem deserunt, sunt optio id voluptate nihil eum distinctio consectetur. Dignissimos, corrupti mollitia explicabo rem eligendi non, error recusandae alias vero veritatis ducimus pariatur repudiandae nihil aperiam voluptatem adipisci ipsa. Facere beatae ea assumenda velit fugit pariatur obcaecati, quod quae aperiam tempora atque eveniet explicabo labore sint! Qui nihil, iusto natus velit aliquam quia expedita rem reprehenderit ratione culpa consequatur, voluptatibus dolore dolor repellat nam nulla quaerat illo praesentium explicabo ullam soluta perferendis, doloribus tempore doloremque. Minus in impedit expedita beatae quidem voluptatem facilis deserunt, alias nesciunt perspiciatis sit ad veniam? Eum a molestias error rerum blanditiis rem nobis officiis atque ipsam facere at repudiandae molestiae similique, esse officia commodi ut fuga qui? Culpa esse alias minima maxime unde numquam nemo beatae illo ea, quas nesciunt? Atque earum, amet mollitia voluptates quos quae, numquam asperiores tempora eveniet, vero dolore accusamus explicabo reiciendis.
            </div>
            <div class="text-base font-semibold lg:text-xl ps-3 mb-2.5">
                Apakah artikel ini membantu?
            </div>
            <div class="flex gap-7 ps-4">
                <div class="flex cursor-pointer gap-1 items-center font-semibold border border-slate-400 px-5 py-0.5" id="likes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                    </svg>
                    Iya
                </div>
                <div class="flex cursor-pointer gap-1 items-center font-semibold border border-slate-400 px-5 py-0.5" id="notlikes">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                    </svg>
                    Tidak
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>