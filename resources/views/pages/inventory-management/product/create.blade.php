@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Add Product
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / Inventory Management / Product List / Add Product
</h2>

<div x-data="{openTab: 1, }" >
    {{-- @include('pages.seller-management.seller-account.partials.tabs') --}}

    {{--Personal Info--}}
    <div x-show="openTab === 1" x-cloak>

        <div class="flex gap-4">
            <div class=" w-1/3">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-full">

                    <div class="mb-8 text-sm text-gray-800">
                        Select Seller
                    </div>

                    <div class="flex justify-center flex-col">

                        <div class="relative z-0 w-full mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">Lorem - Ipsum 1</option>
                            <option value="2">Lorem - Ipsum 2</option>

                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Seller Name and Store</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>


                    </div>

                </div>



            </div>
        </div>

        <div class="flex gap-4 mb-2">
            <div class="w-1/2">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-full">

                    <div class="mb-8 text-sm text-gray-800">
                        Product Details
                    </div>

                    <div class="flex justify-center flex-col">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Product Name</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Category</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <textarea type="password" rows="7" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"></textarea>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Description</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>
                    </div>

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-full">

                    <div class="mb-4 text-sm text-gray-800">
                        Pricing
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="number" name="money" placeholder=" " class="pt-2 pb-1 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" />
                            <div class="absolute top-0 left-0 mt-2 ml-1 text-gray-400">&#8369;</div>
                            <label for="money" class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Unit Price</label>
                            <span class="text-sm text-red-600 hidden" id="error">Amount is required</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="number" name="money" placeholder=" " class="pt-2 pb-1 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" />
                            <div class="absolute top-0 left-0 mt-2 ml-1 text-gray-400">&#8369;</div>
                            <label for="money" class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Retail Price</label>
                            <span class="text-sm text-red-600 hidden" id="error">Amount is required</span>
                        </div>

                    </div>

                    <div class="flex justify-start flex-row gap-4">

                        <div class="relative z-0 w-1/2 mb-5">
                            <input type="number" name="money" placeholder=" " class="pt-2 pb-1 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" />
                            <div class="absolute top-0 left-0 mt-2 ml-1 text-gray-400">&#8369;</div>
                            <label for="money" class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Discount Price</label>
                            <span class="text-sm text-red-600 hidden" id="error">Amount is required</span>
                        </div>

                    </div>

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-full">

                    <div class="mb-4 text-sm text-gray-800">
                        Inventory
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">SKU (Stock Keeping Unit)</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Stocks</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Critical Stock</label>
                            <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                        </div>

                    </div>

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                       Variation
                    </div>

                    <div class="flex flex-row gap-4 items-center mb-5">

                        <input type="checkbox">
                        <span class="text-gray-600 text-sm pt-1">This product has multiple options, like different sizes or colors</span>

                    </div>

                </div>

            </div>

            <div class="w-1/2">
                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Shipping Information
                    </div>

                    <div class="relative z-0 w-1/2 mb-5">
                        <input type="text" name="duration" placeholder=" " class="pt-2 pb-1 pl-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                        <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">kg</div>
                        <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Package Weight</label>
                        <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="duration" placeholder=" " class="pt-2 pb-1 pl-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">cm</div>
                            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Length</label>
                            <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="duration" placeholder=" " class="pt-2 pb-1 pl-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">cm</div>
                            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Width</label>
                            <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
                        </div>

                        <div class="relative z-0 w-full mb-5">
                            <input type="text" name="duration" placeholder=" " class="pt-2 pb-1 pl-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">cm</div>
                            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Height</label>
                            <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
                        </div>

                    </div>



                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-1/2 mb-5">
                            <input type="text" name="duration" placeholder=" " class="pt-2 pb-1 pl-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                            <label for="duration" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Volume</label>
                            <span class="text-sm text-red-600 hidden" id="error">Duration is required</span>
                        </div>

                        <div class="relative z-0 w-1/2 mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Delivery Type</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div>


                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Others
                    </div>

                    <div class="flex justify-center flex-row gap-4">

                        <div class="relative z-0 w-1/2 mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Warranty</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                        <div class="relative z-0 w-1/2 mb-5">
                            <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                            <option value="" selected disabled hidden></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            </select>
                            <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Condition</label>
                            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                        </div>

                    </div>








                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Media
                    </div>

                    {{-- START MAIN IMAGE --}}
                    <div class="flex gap-3 flex-wrap">


                        <div>
                            <div class="relative z-0 ">
                                <div class="top-0 bottom-0 right-0 left-0 m-auto ">
                                    <img class="object-cover w-28 h-28 rounded-lg mx-auto border-2 border-gray-500 " src="{{asset('assets/test.jpg')}}"
                                        {{-- src="@if ($cover_image) {{ $cover_image->temporaryUrl() }} @else /images/default/default_profile.png @endif"  --}}
                                        style="left:40%">
                                </div>
                                <div class="absolute flex items-center h-full w-full opacity-0 bg-gray-900 bg-opacity-60 hover:opacity-100 top-0 duration-500 rounded-lg">
                                    <div class="flex justify-center w-full">
                                    <div class="flex justify-between">

                                            <label class="p-2 mx-1 bg-blue-400 hover:bg-blue-500 text-blue cursor-pointer rounded-lg flex items-center text-white">
                                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-alt-to-top" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path fill="currentColor" d="M153.1 448c-8.8 0-16-7.2-16-16V288H43.3c-7.1 0-10.7-8.6-5.7-13.6l143.1-143.5c6.3-6.3 16.4-6.3 22.7 0l143.1 143.5c5 5 1.5 13.6-5.7 13.6h-93.9v144c0 8.8-7.2 16-16 16h-77.8m0 32h77.7c26.5 0 48-21.5 48-48V320h61.9c35.5 0 53.5-43 28.3-68.2L226 108.2c-18.8-18.8-49.2-18.8-68 0L14.9 251.8c-25 25.1-7.3 68.2 28.4 68.2h61.9v112c-.1 26.5 21.5 48 47.9 48zM0 44v8c0 6.6 5.4 12 12 12h360c6.6 0 12-5.4 12-12v-8c0-6.6-5.4-12-12-12H12C5.4 32 0 37.4 0 44z"></path>
                                                </svg>
                                                <input type='file'
                                                {{-- wire:model="cover_image"  --}}
                                                class="hidden"  />
                                            </label>

                                            <button class="p-2 mx-1 bg-red-400 hover:bg-red-500 text-blue cursor-pointer rounded-lg flex items-center text-white">
                                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path>
                                                </svg>
                                            </button>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-center text-gray-500 dark:text-gray-300">
                                Main
                            </div>

                            {{-- <div class="flex">
                                <x-error-inline-message name="cover_image">
                                </x-error-inline-message>
                            </div> --}}

                        </div>

                        @for ($i = 1; $i < 8; $i++)
                        <div>
                            <div class="relative z-0 ">
                                <div class="top-0 bottom-0 right-0 left-0 m-auto ">
                                    <img class="object-cover w-28 h-28 rounded-lg mx-auto border-2 border-gray-500 " src="{{asset('assets/test.jpg')}}"
                                        {{-- src="@if ($cover_image) {{ $cover_image->temporaryUrl() }} @else /images/default/default_profile.png @endif"  --}}
                                        style="left:40%">
                                </div>
                                <div class="absolute flex items-center h-full w-full opacity-0 bg-gray-900 bg-opacity-60 hover:opacity-100 top-0 duration-500 rounded-lg">
                                    <div class="flex justify-center w-full">
                                    <div class="flex justify-between">

                                            <label class="p-2 mx-1 bg-blue-400 hover:bg-blue-500 text-blue cursor-pointer rounded-lg flex items-center text-white">
                                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-alt-to-top" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path fill="currentColor" d="M153.1 448c-8.8 0-16-7.2-16-16V288H43.3c-7.1 0-10.7-8.6-5.7-13.6l143.1-143.5c6.3-6.3 16.4-6.3 22.7 0l143.1 143.5c5 5 1.5 13.6-5.7 13.6h-93.9v144c0 8.8-7.2 16-16 16h-77.8m0 32h77.7c26.5 0 48-21.5 48-48V320h61.9c35.5 0 53.5-43 28.3-68.2L226 108.2c-18.8-18.8-49.2-18.8-68 0L14.9 251.8c-25 25.1-7.3 68.2 28.4 68.2h61.9v112c-.1 26.5 21.5 48 47.9 48zM0 44v8c0 6.6 5.4 12 12 12h360c6.6 0 12-5.4 12-12v-8c0-6.6-5.4-12-12-12H12C5.4 32 0 37.4 0 44z"></path>
                                                </svg>
                                                <input type='file'
                                                {{-- wire:model="cover_image"  --}}
                                                class="hidden"  />
                                            </label>

                                            <button class="p-2 mx-1 bg-red-400 hover:bg-red-500 text-blue cursor-pointer rounded-lg flex items-center text-white">
                                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path>
                                                </svg>
                                            </button>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-center text-gray-500 dark:text-gray-300">
                                Image {{$i}}
                            </div>

                            {{-- <div class="flex">
                                <x-error-inline-message name="cover_image">
                                </x-error-inline-message>
                            </div> --}}

                        </div>
                        @endfor


                    </div>
                    {{-- END MAIN IMAGE --}}

                </div>

                <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4">

                    <div class="mb-8 text-sm text-gray-800">
                        Product Status
                    </div>


                    <div class="relative z-0 w-1/2 mb-5">
                        <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200" >
                        <option value="" selected disabled hidden></option>
                        <option value="1">Active</option>
                        <option value="2">Draft</option>

                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select Active or Draft</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
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
