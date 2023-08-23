<html>
<head>
    <style>
        #spanel-btn-hover {
            background-color: none !important;
        }
        #spanel-btn-hover:hover {
            background-color: red !important;
            color: white;
        }
    </style>
</head>
<body>


@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Welcome back, {{ Auth::user()->firstname }}!
</h2>
<span class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-12"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    We have <a href="" class="hover:underline"><span class="font-bold">32</span> new orders</a> and <a href="" class="hover:underline"><span class="font-bold">23</span> on-going orders</a> .
</span>

<div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-3 gap-6 justify-between mb-6 transform transition-all opacity-0 translate-y-12 ease-out delay-150 duration-500" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>

    <a href="#" class="p-4 rounded bg-white w-full shadow-md group hover:-translate-y-2 transition-all duration-500">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Users</span>
            <span class="w-10 h-10 rounded-full flex justify-center items-center bg-white group-hover:bg-[#ff0000] bg-opacity-10 text-[#ff0000] group-hover:text-white border border-[#ff0000] transition-all duration-500">
                <svg class="w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z"></path>
                </svg>
            </span>

        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-3xl font-light">23</span>
        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-sm text-gray-600">
                <span class="text-green-500 font-medium">24.6%</span>
                more than yesterday
            </span>
        </div>

    </a>

    <a href="#" class="p-4 rounded bg-white w-full shadow-md group hover:-translate-y-2 transition-all duration-500">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Buyers</span>
            <span class="w-10 h-10 rounded-full flex justify-center items-center bg-white group-hover:bg-[#ff0000] bg-opacity-10 text-[#ff0000] group-hover:text-white border border-[#ff0000] transition-all duration-500">
                <svg class="w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-friends"  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z"></path></svg>
            </span>

        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-3xl font-light">23</span>
        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-sm text-gray-600">
                <span class="text-green-500 font-medium">24.6%</span>
                more than yesterday
            </span>
        </div>

    </a>

    {{-- <a href="#" class="p-4 rounded bg-white w-full shadow-md group hover:-translate-y-2 transition-all duration-500">

        <div class="flex justify-between spanel-wrapper-hover">

            <span class="text-sm font-medium text-red-600">Branch</span>
            <span class="w-10 h-10 rounded-full flex justify-center items-center bg-white group-hover:bg-[#ff0000] bg-opacity-10 text-[#ff0000] group-hover:text-white border border-[#ff0000] transition-all duration-500">
                <svg class="w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tie" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"></path>
                </svg>
            </span>

        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-3xl font-light">23</span>
        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-sm text-gray-600">
                <span class="text-green-500 font-medium">24.6%</span>
                more than yesterday
            </span>
        </div>

    </a> --}}

    <a href="#" class="p-4 rounded bg-white w-full shadow-md group hover:-translate-y-2 transition-all duration-500">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Branch Users</span>
            <span class="w-10 h-10 rounded-full flex justify-center items-center bg-white group-hover:bg-[#ff0000] bg-opacity-10 text-[#ff0000] group-hover:text-white border border-[#ff0000] transition-all duration-500">
                <svg class="w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="id-badge" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M336 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM144 32h96c8.8 0 16 7.2 16 16s-7.2 16-16 16h-96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm48 128c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H102.4C90 416 80 407.4 80 396.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z"></path>
                </svg>
            </span>

        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-3xl font-light">23</span>
        </div>

        <div class="flex mt-2 mb-4">
            <span class=" text-sm text-gray-600">
                <span class="text-green-500 font-medium">24.6%</span>
                more than yesterday
            </span>
        </div>

    </a>


</div>

<div class="grid grid-cols-12 gap-6 justify-between mb-6 transform transition-all opacity-0 translate-y-12 ease-out delay-300 duration-500" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>

    <div class="p-4 rounded bg-white w-full shadow-md col-span-12 2xl:col-span-8">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Latest Orders</span>

        </div>

        <div class="overflow-hidden rounded-md grid">
            <div class="overflow-x-auto ">

                <table class="whitespace-nowrap w-full text-sm">

                    <thead class="text-left border-b border-gray-600 text-gray-600">
                        <tr>
                            <th class="p-2 font-normal">Order Number</th>
                            <th class="p-2 font-normal">Store Name</th>
                            <th class="p-2 font-normal">Price</th>
                            <th class="p-2 font-normal">Status</th>
                            <th class="p-2 font-normal">Payment Method</th>
                            <th class="p-2 font-normal">Delivery Option</th>
                            <th class="p-2 font-normal">Date Ordered</th>
                            <th class="p-2 font-normal">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @for ($i = 0; $i < 6; $i++)
                        <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                            <td class="p-2">
                                231313231
                            </td>
                            <td class="p-2">
                                Doe Store
                            </td>
                            <td class="p-2">
                                &#8369;  1,231
                            </td>
                            <td class="p-2">
                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"   class="max-w-xs flex items-center text-sm outline-none focus:outline-none focus:shadow-solid transition-all duration-300">
                                            <span class="py-1 px-2 rounded bg-green-100 text-green-500 text-sm">Completed</span>
                                            {{-- <span class="py-1 px-2 rounded bg-red-100 text-red-500 text-sm">Inactive</span> --}}
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" class="w-5 h-5"  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg>
                                        </button>
                                    </div>
                                    <div x-show="open"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="origin-center absolute mt-2 -ml-2 w-20 rounded-md shadow-lg z-10">
                                      <div class="py-1 px-2 rounded-md bg-white shadow-xs">
                                        <span class="block py-1 px-2 rounded bg-green-100 hover:bg-green-200 text-green-500 text-sm mb-1 cursor-pointer">Active</span>
                                        <span class="block py-1 px-2 rounded bg-red-100 hover:bg-red-200 text-red-500 text-sm cursor-pointer">Inactive</span>
                                      </div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2">
                                COD
                            </td>
                            <td class="p-2">
                                Standard
                            </td>
                            <td class="p-2">
                                6/10/2020
                            </td>
                            <td class="p-3 font-normal text-sm">
                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"   class="max-w-xs flex items-center text-sm outline-none focus:outline-none focus:shadow-solid transition-all duration-300">
                                            <span :class="{ 'bg-blue-500': open === true,'': open === false }" class="flex items-center justify-center group  hover:bg-blue-500 p-1 rounded-full transition-all duration-300">
                                                <svg :class="{ 'text-white': open === true,'text-[#8a82a1]': open === false }" aria-hidden="true" focusable="false" data-prefix="far" data-icon="ellipsis-v" class="w-5 h-5 group-hover:text-white transition-all duration-300" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><path fill="currentColor" d="M64 208c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zM16 104c0 26.5 21.5 48 48 48s48-21.5 48-48-21.5-48-48-48-48 21.5-48 48zm0 304c0 26.5 21.5 48 48 48s48-21.5 48-48-21.5-48-48-48-48 21.5-48 48z"></path></svg>
                                            </span>
                                        </button>
                                    </div>
                                    <div x-show="open"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="origin-center absolute mt-2 -ml-24 w-32 rounded-md shadow-lg z-10">
                                      <div class="py-1 rounded-md bg-white shadow-xs">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 transition ease-in-out duration-150">Edit</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 transition ease-in-out duration-150">Delete</a>
                                      </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endfor

                    </tbody>

                </table>

            </div>
            <div class="grid px-2 py-2 text-xs font-light tracking-wide text-[#8a82a1] uppercase border-t border-[#8a82a1] sm:grid-cols-9 ">
                <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 justify-center md:mt-auto md:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple btn-spanel-hover"
                                    aria-label="Previous">
                                    <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    1
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-[#ff0000] border border-r-0 border-[#ff0000] rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    3
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    8
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple btn-spanel-hover">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    id="spanel-btn-hover"
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple btn-spanel-hover"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>


    </div>

    <div class="p-4 rounded bg-white w-full shadow-md col-span-12 2xl:col-span-4">

        <div class="flex justify-between mb-8">

            <span class="text-sm font-medium text-gray-600">Branch Inventory</span>

        </div>

        <div class="flex flex-col lg:flex-row 2xl:flex-col justify-between">
            <div class="w-full lg:w-1/2 2xl:w-full">
                <canvas id="pie" class="mx-auto"></canvas>
            </div>

            <div class="w-full lg:w-1/2 2xl:w-full">
                <div class="flex flex-col">

                    <div class="border-b py-1 p-2 flex justify-between items-center">

                        <div>
                            <span class="inline-block w-3 h-3 mr-1 bg-green-500 rounded-full"></span>
                            <span>Active</span>
                        </div>
                        <div>
                            223
                        </div>

                    </div>

                </div>

                <div class="flex flex-col">

                    <div class="border-b py-1 p-2 flex justify-between items-center">

                        <div>
                            <span class="inline-block w-3 h-3 mr-1 bg-red-500 rounded-full"></span>
                            <span>Inactive</span>
                        </div>
                        <div>
                            62
                        </div>

                    </div>

                </div>

                <div class="flex flex-col">

                    <div class="border-b py-1 p-2 flex justify-between items-center">

                        <div>
                            <span class="inline-block w-3 h-3 mr-1 bg-yellow-500 rounded-full"></span>
                            <span>Critical Quantity</span>
                        </div>
                        <div>
                            52
                        </div>

                    </div>

                </div>

                <div class="flex flex-col">

                    <div class="border-b py-1 p-2 flex justify-between items-center">

                        <div>
                            <span class="inline-block w-3 h-3 mr-1 bg-gray-500 rounded-full"></span>
                            <span>Out of Stock</span>
                        </div>
                        <div>
                            32
                        </div>

                    </div>

                </div>
            </div>
        </div>



    </div>


</div>

<div class="hidden grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-4 gap-6 justify-between mb-6 transform transition-all opacity-0 translate-y-12 ease-out delay-500 duration-500" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>


    {{--Top 10 sellers--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Top 10 Sellers</span>

        </div>

        <div class="flex flex-col mt-2 mb-4">

            @for ($i = 1; $i < 10; $i++)
            <div class="flex p-2 border-b justify-between items-center">

                <span class="flex flex-col w-full truncate  text-sm">
                    <span class=" truncate">John Doe JohnDoe</span>
                    <a href="" class="text-xs pl-2 truncate font-medium text-gray-500 hover:text-[#ff0000]">John Doe Store</a>
                </span>
                <span class="px-2 flex-col flex text-right w-max flex-shrink-0">
                    <span class="font-medium">&#8369; 1,000</span>
                    <span class="text-xs leading-none text-green-500 font-bold flex items-center justify-end">10%
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z"></path></svg>
                    </span>
                    {{-- <span class="text-xs leading-none text-red-500 font-bold flex items-center justify-end">10%
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M441.9 250.1l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L250 385.4V44c0-6.6-5.4-12-12-12h-28c-6.6 0-12 5.4-12 12v341.4L42.9 230.3c-4.7-4.7-12.3-4.7-17 0L6.1 250.1c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path></svg>
                    </span> --}}
                </span>

            </div>
            @endfor

        </div>

    </div>

    {{--top 10 products sale--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Top 10 Products</span>

        </div>

        <div class="flex flex-col mt-2 mb-4">

            @for ($i = 1; $i < 10; $i++)
            <div class="flex p-2 border-b justify-between items-center">

                <span class="flex flex-col w-full truncate  text-sm">
                    <span class=" truncate">Lorem ipsum dolor sit amet.</span>
                    <a href="" class="text-xs pl-2 truncate font-medium text-gray-500 hover:text-[#ff0000]">John Doe Store</a>
                </span>
                <span class="px-2 flex-col flex text-right w-max flex-shrink-0">
                    <span class="font-medium">&#8369; 1,000</span>
                    <span class="text-xs leading-none text-green-500 font-bold flex items-center justify-end">10%
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z"></path></svg>
                    </span>
                    {{-- <span class="text-xs leading-none text-red-500 font-bold flex items-center justify-end">10%
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M441.9 250.1l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L250 385.4V44c0-6.6-5.4-12-12-12h-28c-6.6 0-12 5.4-12 12v341.4L42.9 230.3c-4.7-4.7-12.3-4.7-17 0L6.1 250.1c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path></svg>
                    </span> --}}
                </span>

            </div>
            @endfor

        </div>

    </div>

    {{--top 10 products Reviews--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Top 10 Products Reviews</span>

        </div>

        <div class="flex flex-col mt-2 mb-4">

            @for ($i = 1; $i < 10; $i++)
            <div class="flex p-2 border-b justify-between items-center">

                <span class="flex flex-col w-full truncate  text-sm">
                    <span class=" truncate">Lorem ipsum dolor sit amet.</span>
                    <a href="" class="text-xs pl-2 truncate font-medium text-gray-500 hover:text-[#ff0000]">John Doe Store</a>
                </span>
                <span class="px-2 flex-col flex text-right w-max flex-shrink-0">
                    <span class="font-medium">320</span>
                    <span class="text-xs leading-none text-red-500 font-bold flex items-center justify-end">10
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag-alt" class="svg-inline--fa fa-flag-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 0C14.3 0 0 14.3 0 32v464c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V32C64 14.3 49.7 0 32 0zm430.6 4.2C291.3 91.5 305.4-62.2 96 32.4V384c185.7-92.2 221.7 53.3 397.5-23.1 11.4-5 18.5-16.5 18.5-28.8V30.8c0-25.1-26.8-38.1-49.4-26.6z"></path></svg>
                    </span>
                </span>

            </div>
            @endfor

        </div>

    </div>

    {{--top 10 products Inquiries--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between">

            <span class="text-sm font-medium text-gray-600">Top 10 Products Inquiries</span>

        </div>

        <div class="flex flex-col mt-2 mb-4">

            @for ($i = 1; $i < 10; $i++)
            <div class="flex p-2 border-b justify-between items-center">

                <span class="flex flex-col w-full truncate  text-sm">
                    <span class=" truncate">Lorem ipsum dolor sit amet.</span>
                    <a href="" class="text-xs pl-2 truncate font-medium text-gray-500 hover:text-[#ff0000]">John Doe Store</a>
                </span>
                <span class="px-2 flex-col flex text-right w-max flex-shrink-0">
                    <span class="font-medium">320</span>
                    <span class="text-xs leading-none text-red-500 font-bold flex items-center justify-end">10
                        <svg class="ml-1 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag-alt" class="svg-inline--fa fa-flag-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 0C14.3 0 0 14.3 0 32v464c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V32C64 14.3 49.7 0 32 0zm430.6 4.2C291.3 91.5 305.4-62.2 96 32.4V384c185.7-92.2 221.7 53.3 397.5-23.1 11.4-5 18.5-16.5 18.5-28.8V30.8c0-25.1-26.8-38.1-49.4-26.6z"></path></svg>
                    </span>
                </span>

            </div>
            @endfor

        </div>

    </div>



</div>

<div class="grid grid-cols-1 xl:grid-cols-2 gap-6 justify-between mb-6 transform transition-all opacity-0 translate-y-12 ease-out delay-700 duration-500" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>


    {{--Buyers KPI--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between mb-8">

            <span class="text-sm font-medium text-gray-600">Buyers KPI</span>

        </div>

        <canvas id="bars" class="mb-4"></canvas>

        <div class="flex flex-col mt-2 mb-4">

            <div class="grid grid-rows-3 lg:grid-rows-1 lg:grid-cols-3 flex-col">

                <div class="border-b lg:border-b-0 lg:border-r py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-green-500 rounded"></span>
                        <span>90% Up</span>
                    </div>
                    <div>
                        <span class="text-green-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

                <div class="border-b lg:border-b-0 lg:border-r py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-yellow-500 rounded"></span>
                        <span>70% - 90%</span>
                    </div>
                    <div>
                        <span class="text-yellow-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

                <div class="py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-red-500 rounded"></span>
                        <span>70% Below</span>
                    </div>
                    <div>
                        <span class="text-red-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{--Selles KPI--}}
    <div class="p-4 rounded bg-white w-full shadow-md">

        <div class="flex justify-between mb-8">

            <span class="text-sm font-medium text-gray-600">Sellers KPI</span>

        </div>

        <canvas id="bars2" class="mb-4"></canvas>

        <div class="flex flex-col mt-2 mb-4">

            <div class="grid grid-rows-3 lg:grid-rows-1 lg:grid-cols-3 flex-col">

                <div class="border-b lg:border-b-0 lg:border-r py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-green-500 rounded"></span>
                        <span>90% Up</span>
                    </div>
                    <div>
                        <span class="text-green-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

                <div class="border-b lg:border-b-0 lg:border-r py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-yellow-500 rounded"></span>
                        <span>70% - 90%</span>
                    </div>
                    <div>
                        <span class="text-yellow-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

                <div class="py-2 p-4 flex justify-between items-center">

                    <div>
                        <span class="inline-block w-3 h-3 mr-1 bg-red-500 rounded"></span>
                        <span>70% Below</span>
                    </div>
                    <div>
                        <span class="text-red-500 font-medium">223</span>
                         {{-- <span class="text-xs">/ 1000</span> --}}
                    </div>

                </div>

            </div>

        </div>

    </div>





</div>


@endsection

@push('head')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels@0.1.4/dist/chartjs-plugin-piechart-outlabels.min.js"></script>

@endpush



@push('js')

<script>
    //PIE

    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const pieConfig = {
    type: 'doughnut',
    data: {
        datasets: [
        {
            data: [223,62,52,32],
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: ['rgba(16, 185, 129,0.9)', 'rgba(239, 68, 68,0.9)', 'rgba(245, 158, 11,0.9)', 'rgba(107, 114, 128,0.9)'],
            // borderColor: ['#10B981', '#EF4444', '#F59E0B', '#6B7280'],
            label: 'Dataset 1',
        },
        ],
        labels: ['Active', 'Inactive', 'Critical Quantity', 'Out of Stock'],
    },
    options: {
        layout: {
            padding: {
                left: 25,
                right: 25,
                top: 25,
                bottom: 25
            },
        },
        responsive: true,
        cutoutPercentage: 70,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
        display: false,
        },
        plugins:{
            outlabels: {
                text: ' %p',
                color: 'white',
                stretch: 15,
                borderRadius: 17,
                font: {
                    resizable: true,
                    minSize: 12,
                    // maxSize: 18
                }
            },
        },
    },
    }

    // change this to the id of your chart element in HMTL
    const pieCtx = document.getElementById('pie')
    window.myPie = new Chart(pieCtx, pieConfig)



    //Bars
    const barConfig = {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
            label: '90% Up',
            backgroundColor: 'rgba(16, 185, 129,0.9)',
            borderColor: 'rgba(16, 185, 129)',
            borderWidth: 1,
            data: [5, 23, 51, 52, 34, 32, 54, 77, 42, 41, 23, 99],
        },
        {
            label: '70% - 90%',
            backgroundColor: 'rgba(245, 158, 11,0.9)',
            borderColor: 'rgba(245, 158, 11)',
            borderWidth: 1,
            data: [0, 42, 23, 23, 12, 12, 2, 35, 12, 23, 12, 42],
        },{
            label: '70 Below',
            backgroundColor: 'rgba(239, 68, 68,0.9)',
            borderColor: 'rgba(239, 68, 68)',
            borderWidth: 1,
            data: [10, 52, 1, 6, 5, 45, 5, 1, 50, 53, 51, 4],
        },

        ],
    },
    options: {
        responsive: true,
        legend: {
        display: false,
        },
    },
    }

    const barsCtx = document.getElementById('bars')
    window.myBar = new Chart(barsCtx, barConfig)


    //Bars
    const barConfig2 = {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
            label: '90% Up',
            backgroundColor: 'rgba(16, 185, 129,0.9)',
            borderColor: 'rgba(16, 185, 129)',
            borderWidth: 1,
            data: [5, 23, 51, 52, 34, 32, 54, 77, 42, 41, 23, 99],
        },
        {
            label: '70% - 90%',
            backgroundColor: 'rgba(245, 158, 11,0.9)',
            borderColor: 'rgba(245, 158, 11)',
            borderWidth: 1,
            data: [0, 42, 23, 23, 12, 12, 2, 35, 12, 23, 12, 42],
        },{
            label: '70 Below',
            backgroundColor: 'rgba(239, 68, 68,0.9)',
            borderColor: 'rgba(239, 68, 68)',
            borderWidth: 1,
            data: [10, 52, 1, 6, 5, 45, 5, 1, 50, 53, 51, 4],
        },

        ],
    },
    options: {
        responsive: true,
        legend: {
        display: false,
        },
    },
    }

    const barsCtx2 = document.getElementById('bars2')
    window.myBar2 = new Chart(barsCtx2, barConfig2)




</script>

@endpush

    
</body>
</html>
