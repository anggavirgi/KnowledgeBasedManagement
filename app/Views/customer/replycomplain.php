<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<?php if (session()->has('successMessage')) : ?>
    <div class="flash-success-message" data-message="<?php echo session('successMessage') ?>"></div>
<?php else : ?>
    <div class="flash-error-message" data-message="<?php echo session('errorMessage') ?>"></div>
<?php endif; ?>

<section id="main">
    <div class="container lg:w-8/12 mx-auto">

        <div class="m-7 md:mx-12 mb-20">

            <div class="flex mt-6 gap-3">
                <h2 class="font-bold text-xl"><?= $complain["subject"] ?></h2>
                <?php if ($complain["status"] === 'pending') : ?>
                    <div class="rounded-[15px] bg-pending-status text-pending-status-text py-1 px-3 text-xs">
                        <?= $complain["status"] ?>
                    </div>
                <?php elseif ($complain["status"] === 'progress') : ?>
                    <div class="rounded-[15px] bg-progress-status text-progress-status-text py-1 px-3 text-xs">
                        <?= $complain["status"] ?>
                    </div>
                <?php else : ?>
                    <div class="rounded-[15px] bg-solved-status text-solved-status-text py-1 px-3 text-xs">
                        <?= $complain["status"] ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="date text-form font-normal"><?= date("D d M Y, H:i", strtotime($complain['created_at'])); ?></div>

            <div class="h-[17rem] overflow-y-auto mt-3">
                <div class="px-4 flex flex-wrap text-sm">
                    <?php if ($complain['level'] === "user") : ?>
                        <div class="w-full flex justify-end gap-1 -z-10">
                            <div class="text-[0.6rem] text-form flex items-end pb-2"><?= date('j M, g.i a', strtotime($complain['created_at'])); ?></div>
                            <div class="bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative w-fit">
                                <div class="py-0 px-2"><?= $complain['description'] ?></div>
                                <div class="absolute right-0 top-3 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end gap-1 -z-10">
                            <div class="text-[0.6rem] text-form flex items-end pb-2"><?= date('j M, g.i a', strtotime($complain['created_at'])); ?></div>
                            <div class="bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative w-fit">
                                <a href="<?php echo base_url(); ?>/src/images/prove/<?= $complain['file']; ?>" download="<?= $complain['file'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </a>
                                <div class="absolute right-0 top-3 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="w-full flex justify-start gap-1">
                            <div class="bg-slate-200 text-form p-2 rounded-lg mb-2 relative max-w-[90%]">
                                <div class="py-0 px-2 "><?= $complain['description'] ?></div>
                                <div class="absolute left-0 top-3 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-slate-200"></div>
                            </div>
                            <div class="text-[0.6rem] text-form flex items-end pb-2"><?= date('j M, g.i a', strtotime($complain['created_at'])); ?></div>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($complainReply as $complainReply) : ?>
                        <?php if ($complainReply['level'] === "user") : ?>
                            <div class="w-full flex justify-end gap-1">
                                <div class="text-[0.6rem] text-form flex items-end pb-2"><?= date('j M, g.i a', strtotime($complainReply['created_at'])); ?></div>
                                <div class="bg-indigo-100 text-gray-800 p-2 rounded-lg mb-2 relative w-fit">
                                    <div class="py-0 px-2"><?= $complainReply['description'] ?></div>
                                    <div class="absolute right-0 top-3 transform translate-x-1/2 rotate-45 w-2 h-2 bg-indigo-100"></div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="w-full flex justify-start gap-1">
                                <div class="bg-slate-200 text-form p-2 rounded-lg mb-2 relative max-w-[90%]">
                                    <div class="py-0 px-2 "><?= $complainReply['description'] ?></div>
                                    <div class="absolute left-0 top-3 transform -translate-x-1/2 rotate-45 w-2 h-2 bg-slate-200"></div>
                                </div>
                                <div class="text-[0.6rem] text-form flex items-end pb-2"><?= date('j M, g.i a', strtotime($complainReply['created_at'])); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>


            <?php if ($complain['id_user'] === user_id()) : ?>
                <form action="<?php echo base_url(); ?>kb/complain/sendReply" method="post">
                    <input type="hidden" id="id_complain" name="id_complain" value="<?= $complain['id'] ?>">
                    <input type="hidden" id="id_user" name="id_user" value="<?= user_id(); ?>">
                    <input type="hidden" id="slug" name="slug" value="<?= $slug; ?>">
                    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full my-3 text-gray-800 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none focus:ring-main focus:border-main " placeholder="Leave a comment..." <?= ($complain['status'] !== 'solved') ? 'enabled' : 'disabled' ?? 'disabled' ?>></textarea>
                    <?php if ($complain['status'] !== 'solved') : ?>
                        <div class="text-right">
                            <button type="submit" class="text-white bg-main hover:bg-main focus:ring-3 focus:outline-none font-medium rounded-lg sm:w-auto px-6 py-2.5 text-center">Submit</button>
                        </div>
                    <?php endif; ?>
                </form>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>