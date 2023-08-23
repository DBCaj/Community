@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Add Driver
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / Courier Management / Add Courier
</h2>

<div x-data="{openTab: 1, }" >
    {{-- @include('pages.seller-management.seller-account.partials.tabs') --}}

    {{--Personal Info--}}
    <div x-show="openTab === 1" x-cloak>
        <div class="flex gap-4 mb-2">
            <div>
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">

                    <div class="mb-8 text-sm text-gray-800">
                        Account Information
                    </div>

                    <div class="flex justify-center flex-col">

                        <span class="w-32 h-32 rounded-full flex justify-center items-center bg-red-200 mb-4 mx-auto">
                            test
                        </span>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Company</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Contact</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                </div>

            </div>

            <div class="flex-1">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Personal Information
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">First name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Middle Name (Optional)</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">License Number</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">License Restriction</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

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



</div>




@endsection

@push('js')


@endpush
