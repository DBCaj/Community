@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Monitoring
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / User Management / Monitoring
</h2>

<div x-data="{openTab: 1, }" >

    @include('pages.user-management.partials.tabs')

    {{--Activities--}}
    <div  x-show="openTab === 1" class=" bg-white rounded-lg p-4 shadow-md" x-cloak>

        @include('pages.user-management.monitoring.partials.tabs')

        @include('components.alertbar')


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
                            <th class="p-3 font-normal">Name</th>
                            <th class="p-3 font-normal">Role</th>
                            <th class="p-3 font-normal">Activity</th>
                            <th class="p-3 font-normal">Date</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @for ($i = 0; $i < 10; $i++)
                        <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                            <td class="p-3">
                                John Doe {{$i+1}}
                            </td>
                            <td class="p-3">
                                Administrator
                            </td>
                            <td class="p-3">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, ipsum?
                            </td>
                            <td class="p-3">
                                6/10/2020
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

    {{--Login Attempts--}}
    <div  x-show="openTab === 2" class=" bg-white rounded-lg p-4 shadow-md" x-cloak>

        @include('pages.user-management.monitoring.partials.tabs')

        @include('components.alertbar')

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
                            <th class="p-3 font-normal">Name</th>
                            <th class="p-3 font-normal">Role</th>
                            <th class="p-3 font-normal">Login Attempts</th>
                            <th class="p-3 font-normal">Date</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @for ($i = 0; $i < 10; $i++)
                        <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                            <td class="p-3">
                                John Doe {{$i+2}}
                            </td>
                            <td class="p-3">
                                Administrator
                            </td>
                            <td class="p-3">
                                Lorem ipsum dolor sit amet. {{$i+2}}
                            </td>
                            <td class="p-3">
                                6/10/2020
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
