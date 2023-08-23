@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Add Branch
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / Branch Management / Branch User / Add Branch
</h2>

<div x-data="{openTab: 1, }" >
    {{-- @include('pages.seller-management.seller-account.partials.tabs') --}}

    {{--Personal Info--}}
    <div x-show="openTab === 1" x-cloak>
        <div class="flex gap-4 mb-2">
            <div>
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">

                    <div class="mb-8 text-sm text-gray-800">
                        Branch Image
                    </div>

                    <div class="flex justify-center flex-col">


                        <img src="{{asset('assets/placeholder/blank-person.png')}}" class="w-32 h-32 rounded flex justify-center items-center mb-4 mx-auto" alt="">


                        {{-- <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="password" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="password" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Confirm Password</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div> --}}

                    </div>

                </div>
            </div>

            <div class="flex-1">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Branch Information
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Store Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Branch</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        {{-- <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div> --}}

                    </div>

                    {{-- <div class="flex gap-4">

                        <div class="flex justify-center flex-row gap-4">

                            <div class="relative z-0 w-32 mb-5">
                                <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                                <option value="" selected disabled hidden></option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                </select>
                                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Date</label>
                                <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                            </div>

                            <div class="relative z-0 w-32 mb-5">
                                <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                                <option value="" selected disabled hidden></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500"></label>
                                <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                            </div>

                            <div class="relative z-0 w-32 mb-5">
                                <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                                <option value="" selected disabled hidden></option>
                                <option value="1">1991</option>
                                <option value="2">1992</option>
                                <option value="3">1993</option>
                                <option value="4">1994</option>
                                <option value="5">1995</option>
                                </select>
                                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500"></label>
                                <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                            </div>

                            <div class="relative z-0 w-32 mb-5">
                                <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Age</label>
                                <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                            </div>

                        </div>

                        <div class="flex justify-center flex-row gap-4 flex-1">

                            <div class="relative z-0 w-full mb-5">
                                <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                                <option value="" selected disabled hidden></option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                </select>
                                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Gender</label>
                                <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                            </div>

                        </div>

                    </div>

                    <div class="flex justify-start flex-row gap-4 flex-1">

                        <div class="relative z-0 w-32 mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Contact Number</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-40 mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">test1</option>
                            <option value="2">test2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Branch</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div> --}}

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Address Information
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">House / Lot / Block / Street</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Country</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Province</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Municipality</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Barangay</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div>

                    <div class="flex flex-row gap-4 flex-1">

                        <div class="relative z-0 w-32 mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Zip Code</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="flex gap-2 justify-end">

            <button class="py-1 px-3 bg-red-500 rounded text-white">
                Back
            </button>

            <button class="py-1 px-3 bg-green-500 rounded text-white">
                Save
            </button>

        </div>
    </div>

    {{--Business Info--}}
    <div x-show="openTab === 2" x-cloak>
        <div class="flex gap-4 mb-2">
            <div>
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">

                    <div class="mb-8 text-sm text-gray-800">
                        Store Image
                    </div>

                    <div class="flex justify-center flex-col">

                        <span class="w-32 h-32 rounded-2xl flex justify-center items-center bg-red-200 mb-4 mx-auto">
                            test
                        </span>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Store Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                </div>
            </div>

            <div class="flex-1">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Store Information
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Business Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Business Type</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div>

                </div>

                <div class="bg-white shadow-md py-6 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Store Banner
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="w-full p-2 bg-red-100 h-32 text-center">
                            UPLOAD
                        </div>



                    </div>

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Store Address Information
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">House / Lot / Block / Street</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Country</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Province</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Municipality</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Barangay</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div>

                    <div class="flex flex-row gap-4 flex-1">

                        <div class="relative z-0 w-32 mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Zip Code</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="flex gap-2 justify-end">

            <button class="py-1 px-3 bg-red-500 rounded text-white">
                Back
            </button>

            <button class="py-1 px-3 bg-green-500 rounded text-white">
                Save
            </button>

        </div>
    </div>

    {{--Reuirements--}}
    <div x-show="openTab === 3" x-cloak>
        <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-full">

            <div class="mb-8 text-sm text-gray-800">
                Requirement List
            </div>

            <div class="flex justify-start mb-4">

                {{--COUNT--}}
                <div class="flex gap-4">

                    <span class="border w-20 sm:w-32 rounded-md p-2 border-green-500 bg-green-500 bg-opacity-10 text-green-500">
                        <div class="font-semibold">
                            Progress
                        </div>
                        <div class="text-right font-bold text-lg">
                            75%
                        </div>
                    </span>



                </div>
            </div>

            {{--tables--}}
            <div class="overflow-hidden rounded-md grid">
                <div class="overflow-x-auto ">

                    <table class="whitespace-nowrap w-full">

                        <thead class="text-left border-b border-gray-600 text-gray-600">
                            <tr>
                                <th class="p-3 font-normal">Categories</th>
                                <th class="p-3 font-normal">File / Items</th>
                                <th class="p-3 font-normal">Status</th>
                                <th class="p-3 font-normal">Latest Update</th>
                                <th class="p-3 font-normal">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">

                            @for ($i = 0; $i < 10; $i++)
                            <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                                <td class="p-3">
                                    Documents {{$i+2}}
                                </td>
                                <td class="p-3">
                                    File Sample
                                </td>
                                <td class="p-3">
                                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                        <div>
                                            <button @click="open = !open"   class="max-w-xs flex items-center text-sm outline-none focus:outline-none focus:shadow-solid transition-all duration-300">
                                                <span class="py-1 px-2 rounded bg-yellow-100 text-yellow-500 text-sm">Pending</span>
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

            </div>

        </div>

        <div class="flex gap-2 justify-end">

            <button class="py-1 px-3 bg-red-500 rounded text-white">
                Back
            </button>

            <button class="py-1 px-3 bg-green-500 rounded text-white">
                Save
            </button>

        </div>
    </div>

</div>




@endsection

@push('js')


@endpush
