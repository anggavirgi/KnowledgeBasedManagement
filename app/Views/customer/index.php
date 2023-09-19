    <?php echo $this->extend('customer/layout'); ?>

    <?php echo $this->section('content'); ?>
    <section id="main">

        <!-- FAQ SECTION -->
        <!-- <div id="faq" class="flex justify-center w-full">
            <div class="grid justify-items-center mt-[40px]">
                <h1 class="flex text-4xl font-bold">
                    <span class="text-main">FA</span>
                    <span class="text-[#FFC700]">Q</span>
                </h1>
                <div class="relative flex justify-center items-center" id="search">
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="Search Your question, answer, etc" class="sm:w-[30rem] w-[25rem] mb-5 px-7 mt-[30px] py-3 rounded-2xl border border-gray-400 outline-main">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search absolute sm:left-[450px] left-[370px] top-[47px] cursor-pointer text-[#919191]" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-center sm:mt-0 mt-[-10px]">
                    <div class="sm:w-[30rem] w-[25rem] ">
                        <p class="text-sm"><span class="text-main">Search what you want,</span> we will answer your question and you can search anything
                            about the Virtusee Progran or technical </p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- CATEGORIES SECTION -->
        <!-- <div id="categories" class="flex justify-center w-full">
            <div class="grid justify-items-center mt-[40px]">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-5 gap-6">
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                    <div class="bg-[#D9D9D9] px-[4rem] py-5 rounded-[10px]">
                        <div class="flex justify-center mb-3">
                            <i class="bi bi-cart-fill text-4xl"></i>
                        </div>
                        <div>
                            <h4 class="whitespace-nowrap">Categories 1</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <div class="hero-section bg-main rounded-b-full min-h-[70vh]"> -->

        <div id="faq" class="flex justify-center items-center w-full min-h-[60vh] relative mb-24">
            <!-- <div class="hero-section bg-main rounded-b-full h-[40rem] w-full absolute z-[-1] top-[-rem]"></div> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-full absolute z-[-1] top-0 h-[50rem]" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,224L48,218.7C96,213,192,203,288,213.3C384,224,480,256,576,234.7C672,213,768,139,864,133.3C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
            <img src="<?php echo base_url(); ?>src/images/waves-hero.png" class="w-[100%] h-[35rem] absolute z-[-1] top-0" alt="">
            <div class="mt-12">
                <h1 class="flex text-5xl font-bold">
                    <span class="text-white">Help Center</span>
                    <span class="text-[#2562AE]">Virtu</span>
                    <span class="text-[#FFC700]">see</span>
                </h1>
                <div class="relative flex" id="search">
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="Search Your question, answer, etc" class="sm:w-[30rem] w-[25rem]  mb-5 px-7 mt-[30px] py-3  border border-gray-400 outline-main">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search absolute sm:left-[450px] left-[370px] top-[47px] cursor-pointer text-[#919191]" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="flex justify-center sm:mt-0 mt-[-10px]">
                    <div class="sm:w-[30rem] w-[25rem] ">
                        <p class="text-sm text-white"><span class="text-secondary font-semibold">Search what you want,</span> we will answer your question and you can search anything
                            about the Virtusee Progran or technical </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div id="general_question" class="w-[97%]">
            <div class=" w-full mb-7 text-center">
                <h4 class="text-[#18A8D8] font-bold text-3xl">General Question</h4>
            </div>
            <div class="flex justify-center border">
                <div class="lg:w-5/12 md:flex justify-end hidden">
                    <img src="<?php echo base_url(); ?>src/images/Question.png" alt="Question.png" class="w-[30rem] object-cover" >
                </div>
                <div id="question" class="mt-7 lg:w-6/12 md:w-10/12 self-center border">
                    <div class="border-solid border-2 border-[#919191] rounded-[10px] p-4 ps-10 mb-3">
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
                    <div class="border-solid border-2 border-[#919191] rounded-[10px] p-4 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title1">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse2" data-title="title1">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse2">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-2 border-[#919191] rounded-[10px] p-4 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title1">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse3" data-title="title1">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse3">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                    <div class="border-solid border-2 border-[#919191] rounded-[10px] p-4 ps-10 mb-3">
                        <div class="flex justify-between">
                            <p class="text-[16px]" id="title1">How I can buy the programs ? </p>
                            <p class="text-xl cursor-pointer collapsible" data-target="collapse4" data-title="title1">
                                <i class="bi bi-chevron-down icon"></i>
                            </p>
                        </div>
                        <div class="max-w-sm md:max-w-xl mt-4 hidden" id="collapse4">
                            <p class="text-[14px]">Search what you want, we will answer your question and you can search anything about the Virtusee Progran or technical <a href="" class="text-[#18A8D8]">more .. </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="customer_complain" class="flex flex-col justify-center items-center w-full bg-[#F8F8F8] pt-12 mt-10 relative">
            <div id="customer_complain" class="mb-2 p-5 w-10/12">
                <h4 class="font-bold text-4xl text-center mb-10">General Complain User</h4>
                <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-12 gap-y-4">
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at</p>
                        </div>
                    </div>
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at.</p>
                        </div>
                    </div>
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at</p>
                        </div>
                    </div>
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at.</p>
                        </div>
                    </div>
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at</p>
                        </div>
                    </div>
                    <div class="border-solid bg-white border-2 border-[#919191] rounded-[10px] p-5 pl-10 mb-7 relative">
                        <svg width="30" height="30" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[-25px] bg-[#F8F8F8]">
                            <path d="M13 0L13 19.9706L0.514719 9.98528L13 0Z" fill="#919191" />
                            <path d="M13 1.41431L13 18.5564L1.92893 9.98537L13 1.41431Z" fill="white" />
                        </svg>

                        <div class="flex justify-between">
                            <div class="gap-2">
                                <h4 class="font-bold text-2xl">title of complain</h4>
                                <h4 class="sm:text-sm text-[14px] sm:mt-2 mt-3">User9012230 / PRJ-0998123 </h4>
                            </div>
                            <div>
                                <h4 class="font-bold sm:text-sm text-[10px] text-[#1F9254] sm:mt-2 mt-3 py-2 px-8 bg-[#CFF2DE] rounded-[15px]">Solved</h4>
                            </div>
                        </div>
                        <div class="max-w-4xl text-sm mt-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada fames ac turpis egestas. At auctor urna nunc id cursus metus. Aliquet sagittis id consectetur purus ut. Risus feugiat in ante metus dictum at.</p>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-10 mt-10">
                    <a href="" class="text-white p-3 rounded-[10px] bg-[#18A8D8] font-bold">Read More <i class="bi bi-chevron-double-right"></i></a>
                </p>
            </div>
            <div class="absolute xl:bottom-[-175px] lg:bottom-[-150px] sm:bottom-[-90px] bottom-[-70px] left-0 right-0 z-0 w-full">
                <img src="<?php echo base_url(); ?>src/images/background.png" class="w-[100%]" alt="">

            </div>
        </div>
        <div id="question" class="flex flex-col justify-center items-center mb-28 xl:mt-20 lg:mt-16 md:mt-2 relative z-10">
            <p class="text-[24px] font-medium">Do you have any question?</p>
            <div class="mt-8 whitespace-nowrap">
                <a href="" class="p-2 py-4 bg-[#FFC700] rounded-[15px]"><i class="bi bi-envelope-fill"></i> Report a Problem</a>
            </div>
        </div>
    </section>

    <?php echo $this->endSection(); ?>