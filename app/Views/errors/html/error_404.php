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
            <a href="<?php echo base_url() ?>">
                <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="nav-brand w-40">
            </a>
            <div class="buttons grid grid-cols-2 gap-2">
                <a href="/kb/login" class="p-2 whitespace-nowrap">Sign In</a>
                <a href="/kb/register" class="bg-main text-white rounded-md p-2 whitespace-nowrap">Sign Up</a>
            </div>
        </div>
    </section>

    <div class="bg-cover bg-center bg-no-repeat flex items-center justify-center h-screen" style="background-image: url('<?php echo base_url() ?>src/images/error404.png');">
        <div class="flex items-center justify-center">
            <div class="text-center text-white font-mono px-9">
                <h1 class="text-9xl mb-4 font-bold">404</h1>
                <p class="lg:text-3xl text-sm mb-2">Oops! The page you're looking for could not be found.</p>
                <p class="lg:text-3xl text-sm">Return to <a href="/" class="text-yellow-500">home</a>.</p>
            </div>
        </div>
    </div>
    <section id="footer" class="px-[50px] py-10 bg-[#1a2b31]">
        <div class="flex lg:flex-nowrap flex-wrap justify-between gap-3 mb-14">
            <div class="p-5 lg:w-6/12 sm:w-full md:w-8/12">
                <img src="<?php echo base_url(); ?>src/images/logo-vsee.png" class="w-48 m-2 mb-4 ml-0" alt="">
                <p class="text-white text-sm md:text-[16px]">Virtusee dibuat untuk mengakselerasi bisnis, khususnya untuk monitoring & tracking data yang diberikan oleh tim lapangan</p>
                <p class="text-white text-sm md:text-[16px] mt-8 ">JL. Panjaringan Sari, YKP Pandugo 2 Blok P No 1, Panjaringan Sari, Kec. Rungkut, Kota Surabaya, Jawa Timur. Indonesia</p>
                <div class="flex flex-nowrap gap-14 text-white mt-16">
                    <a href="" class="p-3 bg-main rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg></a>
                    <a href="" class="p-3 bg-main rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a href="" class="p-3 bg-main rounded-full"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg></a>
                </div>
            </div>
            <div class="flex xl:flex-nowrap lg:flex-wrap flex-wrap gap-32 p-5 pt-10 text-white font-semibold lg:w-6/12 md:w-full sm:flex-nowrap">
                <div class="flex gap-32 lg:border-b-2 md:flex-1 lg:w-full xl:border-0">
                    <div>
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
                    <div>
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
                <div class="p-5 pl-0 sm:mt-0 md:pt-0 md:mt-0 lg:-mt-20 xl:mt-0 -mt-28">
                    <a href="" class="text-white">
                        <p class="whitespace-nowrap">Download Virtusee</p>
                        <img src="<?php echo base_url(); ?>src/images/logo_google_play.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="border-b-[1px] border-white"></div>
        <div class="flex justify-between mt-10">
            <a href="" class="text-white xl:text-sm xl:mx-0 text-lg mx-auto">Copyright ©2021 PT. Virtusee Peta Sukses</a>
            <a href="" class="text-white text-sm xl:inline-block hidden">Kebijakan Privasi</a>
        </div>
        <div class="relative">
            <button class="fixed text-white bottom-5 right-5 bg-[#25D366] p-3 pl-6 pr-10 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
            </button>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/src/js/script.js"></script>

</body>

</html>