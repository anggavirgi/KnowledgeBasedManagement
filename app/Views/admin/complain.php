<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>


<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
    <h2 class="font-bold text-xl">List Complain</h2>
    <div class="flex items-center justify-between mt-5 mb-3" id="search">
        <form method="" class="relative flex justify-end items-center">
            <input type="text" placeholder="search" class="px-5 py-2 w-64 rounded-2xl border border-gray-400 outline-main">
            <button class="absolute right-5 cursor-pointer align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        <div class="flex gap-3">
            <a href="#" class="border inline-flex gap-4 border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                <span class="self-center">13/06/2023</span>
            </a>
            <a class="border border-gray-400 px-6 py-2 rounded-2xl font-medium hover:border-green-400 cursor-pointer">export</a>
        </div>
    </div>
    <div class="mb-5 flex items-center justify-end text-xs">
        <label for="entries" class="mr-2">Rows per page : </label>
        <div class="relative">
            <select id="entries" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </div>
    </div>


    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-left">
            <thead class="border-b">
                <tr>
                    <th class="p-3">
                        <input type="checkbox" name="" id="">
                    </th>
                    <th class="p-3 flex gap-4 items-center">
                        <span>Email</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v13.19l5.47-5.47a.75.75 0 111.06 1.06l-6.75 6.75a.75.75 0 01-1.06 0l-6.75-6.75a.75.75 0 111.06-1.06l5.47 5.47V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-start">
                            Complain
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-center">
                            Status
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-center">
                            Open / Close
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th class="p-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="clickable-row cursor-pointer border-b hover:bg-gray-50 dark:hover:bg-sky-50" data-href="<?php echo base_url(); ?>kb/administrator/complain/reply">
                    <td class="p-3">
                        <input type="checkbox" name="" id="">
                    </td>
                    <td class="p-3 font-medium text-gray-900 whitespace-nowrap cursor-pointer">
                        Aviarianss32@gmail.com
                    </td>
                    <td class="p-3">
                        System eror bang
                    </td>
                    <td class="p-3 text-center relative">
                        <select id="status-entries" name="status_entries" class="py-2 ps-3 pe-6 appearance-none cursor-pointer rounded-[15px] text-gray-700 focus:outline-none focus:border-blue-500">
                            <option value="pending" class=" bg-white text-black">Pending</option>
                            <option value="progress" class="bg-white text-black">In progres</option>
                            <option value="solved" class="bg-white text-black">Solved</option>
                        </select>
                        <div id="dd-icon" class="absolute inset-y-0 right-16 flex items-center pointer-events-none">
                            <svg class="w-2 h-2 text-gray-400" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.97607 0.81897L4.055 5.13429L1.00017 0.9126L6.97607 0.81897Z" fill="#CD6200" stroke="#CD6200" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </td>
                    <td class="p-3 text-center">
                        <select id="entries" class="py-2 px-7 cursor-pointer rounded-[15px] text-gray-700 focus:outline-none focus:border-blue-500">
                            <option value="10" class="block px-4 py-5">Close</option>
                            <option value="25">Open</option>
                        </select>
                    </td>
                    <td class="p-3 text-center">
                        <a class="text-white font-semibold" href="<?php echo base_url(); ?>kb/administrator/complain/reply">
                            <div class=" rounded-3xl px-6 py-2 bg-blue-600 inline-flex justify-center items-center">
                                Reply
                            </div>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-sm">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight  bg-white border rounded-l-lg hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-white border bg-blue-50 hover:text-blue-700 border-white dark:bg-main dark:hover:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border rounded-r-lg hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>


<?php echo $this->endSection(); ?>