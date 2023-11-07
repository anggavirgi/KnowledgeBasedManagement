<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section id="main">
    <div class="container lg:w-8/12 mx-auto">

        <div class="m-7 md:mx-12 mb-20 ">

            <div class="flex justify-end">

                <div data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="fixed lg:absolute bottom-4 lg:bottom-0 lg:left-16 right-4 lg:right-0 lg:top-32 md:right-8 bg-main hover:bg-sky-600 text-white drop-shadow-md flex items-center border-2 font-medium text-xs rounded-full px-1 lg:px-3 py-2 w-fit h-fit cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 md:w-11 lg:w-7 h-8 md:h-9 lg:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                    <p class="hidden lg:block">Make a Question</p>
                </div>


                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 bottom-0 z-50 p-4 overflow-x-hidden overflow-y-auto hidden">
                    <!-- Modal content -->
                    <div class="absolute inset-0 bg-white flex items-center justify-center w-full md:w-[55%] lg:w-[40%] h-full md:h-[97%] md:rounded-md my-auto mx-auto">
                        <button type="button" class="absolute top-3 flex justify-center right-2.5 text-gray-400 bg-transparent hover:bg-slate-200  rounded-lg text-sm w-8 h-8 ml-auto items-center hover:text-form" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 lg:px-8 w-[95%]">
                            <form class="form space-y-2" action="<?php echo base_url('kb/history'); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id_user" value="<?= user()->id; ?>">
                                <input type="hidden" name="id_project" value="<?= user()->id_project; ?>">
                                <script>
                                    var fileMessage = <?php echo json_encode(session('errors')); ?>;
                                </script>
                                <div class="flex gap-2">
                                    <div class="w-full">
                                        <label for="username" class="block mb-2 text-xs font-medium text-form">username</label>
                                        <input type="username" name="username" id="username" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="Username" value="<?= user()->username; ?>" required readonly>
                                    </div>
                                    <div class="w-full">
                                        <label for="email" class="block mb-2 text-xs font-medium text-form">Your email</label>
                                        <input type="email" name="email" id="email" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="name@company.com" value="<?= user()->email; ?>" required readonly>
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block mb-2 text-xs font-medium text-form">subject <span class="text-red-600">*</span></label>
                                    <input type="subject" name="subject" id="subject" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="Subject" value="<?= old('subject'); ?>" required>
                                </div>

                                <div>
                                    <label for="method" class="block mb-2 text-xs font-medium text-form">Method</label>
                                    <select id="method" name="method" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main <?php if (session('errors.method')) : ?>border-red-600<?php endif ?>">
                                        <option value="">Choose a method</option>
                                        <option value="request" <?php if (old('method') == "request") {
                                                                    echo "selected";
                                                                } ?>>Request</option>
                                        <option value="complain" <?php if (old('method') == "complain") {
                                                                        echo "selected";
                                                                    } ?>>Complain</option>
                                    </select>
                                </div>
                                <div class="flex gap-2">
                                    <div class="w-full">
                                        <label for="user" class="block mb-2 text-xs font-medium text-form">User member</label>
                                        <input type="user" name="user" id="user" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" value="<?php echo user()->id_project != 0 ? "Old user" : "New user" ?>" readonly>
                                    </div>
                                    <div class="w-full">
                                        <label for="project" class="block mb-2 text-xs font-medium text-form">Project</label>
                                        <input type="id_project" name="id_project" id="id_project" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="name@company.com" value="<?= $project['name_project']; ?>" required readonly>
                                    </div>
                                </div>
                                <div>
                                    <label for="message" class="block mb-2 text-xs font-medium text-form">Description</label>
                                    <textarea id="message" name="message" rows="5" class="border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="Write your thoughts here..."><?= old('message'); ?></textarea>
                                </div>
                                <div>
                                    <label for="dropzone-file" id="dropzone" class="flex flex-col items-center justify-center w-28 md:w-40 lg:w-72 h-12 md:h-20 lg:h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 <?php if (session('errors.file')) : ?>border-red-600<?php endif ?>">
                                        <div class="flex flex-col items-center justify-center md:pt-5 lg:pb-8 md:pb-6">
                                            <svg class="w-6 md:w-6 lg:w-8 h-6 md:h-6 lg:h-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 md:text-[8px] lg:text-xs text-gray-500 hidden md:block" id="dragdroptext"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class=" text-gray-500 md:text-[8px] lg:text-xs hidden md:block" id="formatsizetext">SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" name="file" onchange="handleFileChange(this.files)" accept=".svg, .png, .jpg, .gif" />
                                        <p id="selected-file-name" class="mb-2 text-[8px] md:text-sm font-semibold text-center text-main"></p>
                                    </label>
                                    <div class="text-[8px] md:text-xs w-max mt-2">
                                        <?php if (session('errors.file')) : ?>
                                            <p class="text-red-500 absolute"><?= session('errors.file'); ?></p>
                                        <?php endif; ?>
                                        <p class="text-red-500 lg:hidden">* SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                                    </div>
                                </div>

                                <button type="submit" class=" text-white float-right bg-main focus:ring-2 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center hover:bg-[#179CC8] ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (session()->has('success')) : ?>
                <div class="flash-success" data-flashmessage="<?php echo session('success') ?>"></div>
            <?php else : ?>
                <div class="flash-error" data-flashmessage="<?php echo session('error') ?>"></div>
            <?php endif; ?>

            <?php foreach ($complain as $complain) : ?>
                <a href="<?= base_url('kb/complain/reply?complainId=' . $complain['slug']) ?>">
                    <div class="pb-3 flex flex-col mb-4 hover:shadow-md hover:shadow-gray-200 px-2">
                        <div class="flex gap-2 items-center pb-1">
                            <div class="py-2 pb-1 font-semibold text-xl text-orange-600"><?php echo $complain['subject'] ?></div>
                            <?php if ($complain['status'] === 'pending') : ?>
                                <div class="font-medium ms-3 text-[10px] text-pending-status-text bg-pending-status w-fit h-fit self-center py-1 px-4 appearance-none cursor-pointer rounded-[15px] focus:outline-none focus:border-blue-500"><?= $complain['status']; ?></div>
                            <?php elseif ($complain['status'] === 'progress') : ?>
                                <div class="font-medium ms-3 text-[10px] text-progress-status-text bg-progress-status w-fit h-fit self-center py-1 px-4 appearance-none cursor-pointer rounded-[15px] focus:outline-none focus:border-blue-500"><?= $complain['status']; ?></div>
                            <?php else : ?>
                                <div class="font-medium ms-3 text-[10px] text-solved-status-text bg-solved-status w-fit h-fit self-center py-1 px-4 appearance-none cursor-pointer rounded-[15px] focus:outline-none focus:border-blue-500"><?= $complain['status']; ?></div>
                            <?php endif; ?>
                        </div>
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

        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>