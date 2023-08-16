    <?php echo $this->extend('customer/layout'); ?>

    <?php echo $this->section('content'); ?>
    <section id="main" class="flex flex-wrap justify-center">
        <div id="main">
            <div class="grid justify-items-center mt-[40px]" id="faq">
                <h1 class="flex text-4xl font-bold">
                    <span class="text-[#18A8D8]">FA</span>
                    <span class="text-[#FFC700]">Q</span>
                </h1>
                <div class="relative flex justify-center items-center" id="search">
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="Search Your question, answer, etc" class="w-[30rem] mt-2 mb-5 px-7 mt-[30px] py-3 rounded-[15px] border border-gray-400 outline-[#18A8D8]">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search absolute left-[450px] top-[47px] cursor-pointer text-[#919191]" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </button>
                        </svg>
                    </form>
                </div>
                <div class="flex justify-center">
                    <div class="w-[30rem]">
                        <p class="text-sm"><span class="text-[#18A8D8]">Search what you want,</span> we will answer your question and you can search anything
                            about the Virtusee Progran or technical </p>
                    </div>
                </div>
            </div>
            <div class="grid justify-items-center mt-[40px]" id="categories">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-5 gap-6">
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-fill w-11" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Categories 1</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div id="general_question" class="mt-7 p-5">
                <div class="max-w-md sm:max-w-lg mb-7">
                    <h4 class="text-[#18A8D8] font-bold text-3xl">General Question</h4>
                    <div class="flex">
                        <div class="border-solid border-4 rounded-md border-[#18A8D8] w-[40%]"></div>
                        <div class="border-dashed border-4 rounded-md border-[#FFC700] w-[8%]"></div>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                    <div class="flex justify-between">
                        <p class="text-[16px]" id="title1">How I can buy the programs ? </p>
                        <p class="text-md cursor-pointer collapsible" data-target="collapse1" data-title="title1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </p>
                    </div>
                    <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse1">
                        <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                    <div class="flex justify-between">
                        <p class="text-[16px]" id="title2">How I can buy the programs ? </p>
                        <p class="text-md cursor-pointer collapsible" data-target="collapse2" data-title="title2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </p>
                    </div>
                    <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse2">
                        <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                    <div class="flex justify-between">
                        <p class="text-[16px]" id="title3">How I can buy the programs ? </p>
                        <p class="text-md cursor-pointer collapsible" data-target="collapse3" data-title="title3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </p>
                    </div>
                    <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse3">
                        <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                    <div class="flex justify-between">
                        <p class="text-[16px]" id="title4">How I can buy the programs ? </p>
                        <p class="text-md cursor-pointer collapsible" data-target="collapse4" data-title="title4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </p>
                    </div>
                    <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse4">
                        <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] rounded-[15px] p-5 ps-10 mb-3">
                    <div class="flex justify-between">
                        <p class="text-[16px]" id="title5">How I can buy the programs ? </p>
                        <p class="text-md cursor-pointer collapsible" data-target="collapse5" data-title="title5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </p>
                    </div>
                    <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse5">
                        <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                    </div>
                </div>
            </div>
            <div id="customer_complain" class="mt-40 mb-2 p-5">
                <h4 class="font-bold text-3xl text-center mb-10">Customer Complain</h4>
                <div class="border-solid border-2 border-[#919191] border-l-8 border-l-[#FFC700] rounded-[10px] p-5 mb-7">
                    <div class="flex justify-between">
                        <div class="flex justify-between gap-2">
                            <h4 class="font-bold text-2xl">title of complain</h4>
                            <div class="flex justify-between gap-1 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill mt-[5px] text-[#05EA0E]" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8" />
                                </svg>
                                <p class="text-sm text-[#18A8D8]">Solved</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold sm:text-sm text-[10px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                        </div>
                    </div>
                    <div class="max-w-4xl text-sm mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at. Faucibus turpis in eu mi bibendum neque egestas congue. Ultrices tincidunt arcu nonsodales neque sodales ut etiam. Turpis egestas pretium aenean pharetra magna ac. Maecenas volutpat blandit aliquametiam erat velit. Posuere morbi leo urna molestie at elementum. Nunc mi ipsum faucibus vitae. Parturient montes nascetur ridiculus mus mauris. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Urna porttitor rhoncus dolor purus non </p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] border-l-8 border-l-[#FFC700] rounded-[10px] p-5 mb-7">
                    <div class="flex justify-between">
                        <div class="flex justify-between gap-2">
                            <h4 class="font-bold text-2xl">title of complain</h4>
                            <div class="flex justify-between gap-1 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill mt-[5px] text-[#05EA0E]" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8" />
                                </svg>
                                <p class="text-sm text-[#18A8D8]">Solved</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold sm:text-sm text-[10px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                        </div>
                    </div>
                    <div class="max-w-4xl text-sm mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at. Faucibus turpis in eu mi bibendum neque egestas congue. Ultrices tincidunt arcu nonsodales neque sodales ut etiam. Turpis egestas pretium aenean pharetra magna ac. Maecenas volutpat blandit aliquametiam erat velit. Posuere morbi leo urna molestie at elementum. Nunc mi ipsum faucibus vitae. Parturient montes nascetur ridiculus mus mauris. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Urna porttitor rhoncus dolor purus non </p>
                    </div>
                </div>
                <div class="border-solid border-2 border-[#919191] border-l-8 border-l-[#FFC700] rounded-[10px] p-5 mb-7">
                    <div class="flex justify-between">
                        <div class="flex justify-between gap-2">
                            <h4 class="font-bold text-2xl">title of complain</h4>
                            <div class="flex justify-between gap-1 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill mt-[5px] text-[#05EA0E]" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8" />
                                </svg>
                                <p class="text-sm text-[#18A8D8]">Solved</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold sm:text-sm text-[10px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                        </div>
                    </div>
                    <div class="max-w-4xl text-sm mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at. Faucibus turpis in eu mi bibendum neque egestas congue. Ultrices tincidunt arcu nonsodales neque sodales ut etiam. Turpis egestas pretium aenean pharetra magna ac. Maecenas volutpat blandit aliquametiam erat velit. Posuere morbi leo urna molestie at elementum. Nunc mi ipsum faucibus vitae. Parturient montes nascetur ridiculus mus mauris. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Urna porttitor rhoncus dolor purus non </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $this->endSection(); ?>