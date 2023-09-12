<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section id="main">
    <div class="container h-[40rem] overflow-y-scroll scrollbar-hide">
        <div class="grid grid-cols-6 gap-4 mx-3 my-7 ">
            <div class="flex justify-center">
                <div data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex items-center gap-2 border-2 font-medium text-xs rounded-xl px-3 py-2 w-fit h-fit cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                    Make a question
                </div>

                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-[40%] max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-form" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <form class="space-y-6" action="#">
                                    <div>
                                        <label for="usernmae" class="block mb-2 text-sm font-medium text-form">Usernmae</label>
                                        <input type="usernmae" name="usernmae" id="usernmae" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form" placeholder="name@company.com" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-form">Your email</label>
                                        <input type="email" name="email" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form" placeholder="name@company.com" required>
                                    </div>
                                    <div>
                                        <label for="project" class="block mb-2 text-sm font-medium text-form">Project</label>
                                        <select id="project" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form">
                                            <option selected>Choose a project</option>
                                            <option value="p1">P001</option>
                                            <option value="p2">P002</option>
                                            <option value="p3">P003</option>
                                            <option value="p4">P004</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="message" class="block mb-2 text-sm font-medium text-form">Description</label>
                                        <textarea id="message" rows="15" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form" placeholder="Write your thoughts here..."></textarea>
                                    </div>
                                    <div>
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-72 h-30 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div>



                                    <button type="submit" class=" text-white bg-main focus:ring-2 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center hover:bg-[#179CC8] ">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-start-2 col-span-4 pb-3 flex flex-col">
                <span class="border-b-2 pb-3 border-slate-200 font-semibold text-4xl">August 2023</span>
                <span class="py-3 font-semibold text-3xl">How to maintenance server down</span>
                <span class="text-ellipsis overflow-hidden h-48 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum ab aspernatur voluptatem enim ipsa ex dolore, adipisci amet eius optio fugiat, dolorem magni aliquam nam, eum repellat rerum fuga! Laudantium aut dolorem itaque facere, dolore et, impedit similique laboriosam vel nesciunt excepturi corporis ab repellendus sint. Quibusdam velit error enim dolor exercitationem iste, debitis asperiores placeat facere, sint minima autem numquam! Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!
                </span>
            </div>
            <div class="col-start-2 col-span-4 pb-3 flex flex-col">
                <span class="border-b-2 pb-3 border-slate-200 font-semibold text-4xl">August 2023</span>
                <span class="py-3 font-semibold text-3xl">How to maintenance server down</span>
                <span class="text-ellipsis overflow-hidden h-48 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At illum ab aspernatur voluptatem enim ipsa ex dolore, adipisci amet eius optio fugiat, dolorem magni aliquam nam, eum repellat rerum fuga! Laudantium aut dolorem itaque facere, dolore et, impedit similique laboriosam vel nesciunt excepturi corporis ab repellendus sint. Quibusdam velit error enim dolor exercitationem iste, debitis asperiores placeat facere, sint minima autem numquam! Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!Deleniti, earum. Inventore magnam vel, tenetur non nam minus exercitationem odit odio libero reiciendis sapiente repellendus porro temporibus accusamus labore, laboriosam dolorum sint laudantium enim magni suscipit fugit pariatur consequatur incidunt. Eum, aspernatur consequuntur modi quisquam corporis assumenda!
                </span>
            </div>

        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>