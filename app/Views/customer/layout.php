<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>src/images/favicon.png" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <section class="navbar bg-white py-5 sm:px-[100px] px-[10px] drop-shadow-md">
        <div class="flex justify-between">
            <a href="<?php echo base_url() ?>kb">
                <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="nav-brand w-40 h-fit self-center">
            </a>
            <form method="" class="relative flex justify-end items-center">
                <input type="text" placeholder="search" class="px-5 py-2 w-96 rounded-2xl border border-gray-400 outline-main">
                <button class="absolute right-5 cursor-pointer align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>


            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-form hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 rounded-full " type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 mr-2 rounded-full" src="<?php echo base_url(); ?>src/images/profilepic.png" alt="user photo">
                <div class="flex flex-col text-left ">
                    Bonnie Green
                    <span class="text-form text-xs truncate w-36">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dignissimos excepturi molestias mollitia nobis voluptas?</span>
                </div>
            </button>

            <!-- Element After Login -->
            <!-- Dropdown Profile -->
            <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="<?php echo base_url(); ?>kb/complain" class="block px-4 py-2 bg-white hover:bg-gray-300 text-black">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 bg-white hover:bg-gray-300 text-black">Article</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-300">Logout</a>
                </div>
            </div>

            <!-- Element Before Login -->
            <!-- <div class="buttons grid grid-cols-2 gap-2">
                <a href="/kb/login" class="p-2 whitespace-nowrap">Sign In</a>
                <a href="/kb/register" class="bg-main text-white rounded-md p-2 whitespace-nowrap">Sign Up</a>
            </div> -->
        </div>
    </section>

    <?php echo $this->renderSection('content'); ?>

    <section id="footer" class="px-[50px] py-10 bg-[#1a2b31]">
        <img src="<?php echo base_url(); ?>src/images/logo-vsee.png" class="w-40 m-2 mb-4 ml-5" alt="">
        <div class="flex lg:flex-nowrap flex-wrap lg:justify-between p-5">
            <div class="w-full lg:w-5/12">
                <p class="text-white leading-relaxed">Virtusee dibuat untuk mengakselerasi bisnis, khususnya untuk monitoring & tracking data yang diberikan oleh tim lapangan</p>
                <p class="text-white mt-7 leading-relaxed">JL. Panjaringan Sari, YKP Pandugo 2 Blok P No 1, Panjaringan Sari, Kec. Rungkut, Kota Surabaya, Jawa Timur. Indonesia</p>
                <div class="flex flex-nowrap gap-10 text-white mt-10">
                    <a href="" class="p-3 bg-main rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </a>
                    <a href="" class="p-3 bg-main rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a href="" class="p-3 bg-main rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-between text-white font-medium gap-20 lg:gap-32 mt-10 lg:mt-0">
                <div class="flex flex-col gap-3">
                    <a href="">
                        <p class="mb-3">Home</p>
                    </a>
                    <a href="">
                        <p class="mb-3">Fitur</p>
                    </a>
                    <a href="">
                        <p class="mb-3">Penerapan</p>
                    </a>
                </div>
                <div class="flex flex-col gap-3">
                    <a href="">
                        <p class="mb-3">Kontak</p>
                    </a>
                    <a href="">
                        <p class="mb-3">Login</p>
                    </a>
                    <a href="">
                        <p class="mb-3 tracking-wide">FAQ</p>
                    </a>
                </div>
            </div>
            <div class="font-medium pe-2 sm:ml-32 lg:ml-0 mt-10 lg:mt-0 w-full sm:w-auto">
                <a href="https://play.google.com/store/apps/details?id=com.virtusee.core" target="_blank" class="text-white">
                    <p class="whitespace-nowrap mb-4">Download Virtusee</p>
                    <img src="<?php echo base_url(); ?>src/images/logo_google_play.png" alt="" class="w-40">
                </a>
            </div>
        </div>
        <div class="border-b-[1px] border-white my-8"></div>
        <div class="flex justify-between">
            <a href="" class="text-white text-sm xl:mx-0 mx-auto">Copyright ©2023 PT. Virtusee Peta Sukses</a>
            <a href="" class="text-white text-sm xl:inline-block hidden">Kebijakan Privasi</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="<?php echo base_url(); ?>/src/js/script.js"></script>

</body>

</html>