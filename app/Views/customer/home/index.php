<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/style.css">
</head>

<body>
    <section class="navbar bg-white py-5 px-[100px] drop-shadow-md">
        <div class="flex justify-between">
            <img src="<?php echo base_url(); ?>src/images/logo.png" alt="" class="nav-brand w-40">
            <div class="buttons grid grid-cols-2 gap-2">
                <a href="" class="p-2">Sign In</a>
                <a href="" class="bg-[#18A8D8] text-white rounded-md p-2">Sign Up</a>
            </div>
        </div>
    </section>
    <section id="main">
        <div class="grid justify-items-center mt-[40px]" id="faq">
            <h1 class="flex text-4xl font-bold">
                <span class="text-[#18A8D8]">FA</span>
                <span class="text-[#FFC700]">Q</span>
            </h1>
            <div class="relative flex justify-center items-center" id="search">
                <input type="text" name="email" id="email" placeholder="Search Your question, answer, etc" class="w-[30rem] mt-2 mb-5 px-7 mt-[30px] py-3 rounded-md border border-gray-400 outline-[#18A8D8]">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search absolute left-[450px] top-[47px] cursor-pointer text-[#919191]" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </div>
        </div>
    </section>
</body>

</html>