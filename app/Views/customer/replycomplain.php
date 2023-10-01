<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section id="main">
    <div class="container lg:w-8/12 mx-auto">

        <div class="m-7 md:mx-12 mb-20">

            <div class="flex mt-6 gap-3">
                <h2 class="font-bold text-xl">Subject Complain</h2>
                <div class="rounded-[15px] bg-progress-status text-progress-status-text py-1 px-3 text-xs">
                    In Progress
                </div>
            </div>
            <div class="date text-form font-normal">Sat 30 Dec 2023, 21.20</div>

            <div class="h-[17rem] overflow-y-auto mt-3">
                <div class="px-4 flex flex-wrap text-sm">
                    <div class="w-full flex justify-start gap-1">
                        <div class="bg-slate-200 text-form p-2 rounded-lg mb-2 relative max-w-[90%]">
                            <div class="py-0 px-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            <div class="absolute left-0 top-3 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-slate-200"></div>
                        </div>
                        <div class="text-[0.6rem] text-form flex items-end pb-2">1 sept, 2.31 pm</div>
                    </div>
                    <div class="w-full flex justify-end gap-1">
                        <div class="text-[0.6rem] text-form flex items-end pb-2">1 sept, 2.31 pm</div>
                        <div class="bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative w-fit">
                            <div class="py-0 px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</div>
                            <div class="absolute right-0 top-3 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <form>
                <textarea id="message" rows="4" class="block p-2.5 w-full my-3 text-gray-800 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-main focus:border-main " placeholder="Leave a comment..."></textarea>
                <div class="text-right">
                    <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg sm:w-auto px-6 py-2.5 text-center">Submit</button>
                </div>
            </form>

        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>