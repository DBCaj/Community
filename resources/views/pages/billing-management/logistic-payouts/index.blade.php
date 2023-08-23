@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Logistic Payouts
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / Billing Management / Logistic Payouts
</h2>

<div x-cloak>

    @include('pages.billing-management.partials.tabs')

    {{--User List--}}
    <div class=" bg-white rounded-lg p-4 shadow-md">

        @include('components.alertbar')

        <div class="flex justify-end lg:items-center flex-col lg:flex-row mb-4">
            {{-- <div class="flex justify-start mb-4 lg:mb-0">
                <a href="{{route('user-information-create')}}" class="px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg flex items-center"><span><svg class="w-4 h-4 text-white mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg></span> Add User</a>
            </div> --}}

            {{--COUNT--}}
            <div class="flex gap-4">

                {{-- <span class="border w-20 sm:w-32 rounded-md p-2 border-[#2e83d9] bg-[#2e83d9] bg-opacity-10 text-blue-500">
                    <div class="font-semibold">
                        Total
                    </div>
                    <div class="text-right font-bold text-lg">
                        10
                    </div>
                </span> --}}

                <span class="border w-20 sm:w-32 rounded-md p-2 border-green-500 bg-green-500 bg-opacity-10 text-green-500">
                    <div class="font-semibold">
                        Receivables
                    </div>
                    <div class="text-right font-bold text-lg">
                        10
                    </div>
                </span>

                <span class="border w-20 sm:w-32 rounded-md p-2 border-red-500 bg-red-500 bg-opacity-10 text-red-500">
                    <div class="font-semibold">
                        Payables
                    </div>
                    <div class="text-right font-bold text-lg">
                        10
                    </div>
                </span>

            </div>
        </div>

        <div class="flex justify-between mb-4 flex-col md:flex-row">

            <div class="flex justify-between w-full mb-2 md:mb-0 gap-4 text-sm">

                <div class="flex items-center">
                    <span>Show</span>
                    <select name="" id="" class="mx-2 p-1 border border-[#8a82a1] hover:border-[#4d7ebd] hover:text-[#4d7ebd] rounded-lg outline-none cursor-pointer">
                        <option value="">10</option>
                        <option value="">25</option>
                        <option value="">50</option>
                    </select>
                    <span>Entries</span>
                </div>

                <div class="flex items-center">

                    <div class="group relative text-[#8a82a1] focus-within:text-[#4d7ebd]">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                          <button type="submit" class="pr-1 focus:outline-none focus:shadow-outline group-hover:text-[#4d7ebd] border-r border-[#8a82a1] group-hover:border-[#4d7ebd] group-focus-within:border-[#4d7ebd]">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                          </button>
                        </span>
                        <input type="text" name="q" class="p-1 border border-[#8a82a1] text-black group-hover:border-[#4d7ebd] group-hover:text-[#4d7ebd] rounded-lg outline-none cursor-pointer pl-9 focus:outline-none w-full" placeholder="Search..." autocomplete="off">
                    </div>

                </div>

            </div>

        </div>

        {{--tables--}}
        <div class="overflow-hidden rounded-md grid">
            <div class="overflow-x-auto ">

                <table class="whitespace-nowrap w-full">

                    <thead class="text-left border-b border-gray-600 text-gray-600">
                        <tr>
                            <th class="p-3 font-normal">ID</th>
                            <th class="p-3 font-normal">Name</th>
                            <th class="p-3 font-normal">Role</th>
                            <th class="p-3 font-normal">Department</th>
                            <th class="p-3 font-normal">Status</th>
                            <th class="p-3 font-normal">Date Update</th>
                            <th class="p-3 font-normal">Date Added</th>
                            <th class="p-3 font-normal">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @for ($i = 0; $i < 10; $i++)
                        <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                            <td class="p-3">
                                1
                            </td>
                            <td class="p-3">
                                John Doe
                            </td>
                            <td class="p-3">
                                Administrator
                            </td>
                            <td class="p-3">
                                Pabili
                            </td>
                            <td class="p-3">
                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"   class="max-w-xs flex items-center text-sm outline-none focus:outline-none focus:shadow-solid transition-all duration-300">
                                            <span class="py-1 px-2 rounded bg-green-100 text-green-500 text-sm">Active</span>
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
                            <td class="p-3">
                                6/10/2020
                            </td>
                            <td class="p-3">
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
                                    class="origin-center absolute mt-2 -ml-10 w-32 rounded-md shadow-lg z-10">
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
            <div class="grid px-4 py-3 text-xs font-light tracking-wide text-[#8a82a1] uppercase border-t border-[#8a82a1] sm:grid-cols-9 ">
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
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
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
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    1
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-[#016e34] border border-r-0 border-[#016e34] rounded-md focus:outline-none focus:shadow-outline-purple">
                                    3
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    4
                                </button>
                            </li>
                            <li>
                                <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    8
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                    9
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
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

</div>



@endsection

@push('js')


@endpush
