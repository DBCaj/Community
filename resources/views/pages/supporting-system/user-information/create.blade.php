@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Add User
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / Supporting System / User Information / Add User
</h2>

<div class="flex gap-4 mb-2">
    <div>
        <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">

            <div class="mb-8 text-sm text-gray-800">
                Account Information
            </div>

            <div class="flex justify-center flex-col">

                <img src="{{asset('assets/placeholder/blank-person.png')}}" class="w-32 h-32 rounded-full flex justify-center items-center mb-4 mx-auto" alt="">

                <div class="relative z-0 w-full mb-5">
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

                <div class="relative z-0 w-full mb-5 text-sm">
                    <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last Name</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

            </div>

            <div class="flex gap-4">

                <div class="flex justify-center flex-row gap-4">

                    <div class="relative z-0 w-32 mb-5">
                        <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
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
                        <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
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
                        <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
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
                        <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="" selected disabled hidden></option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Gender</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                </div>

            </div>

            <div class="flex justify-center flex-row gap-4 flex-1">

                <div class="relative z-0 w-full mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Test 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Role</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Tes 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Department</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input type="text" name="name" placeholder=" " required class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"/>
                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Contact Number</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

            </div>

            <div class="flex justify-start flex-row gap-4">

                <div class="relative z-0 w-1/2 mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Test 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Supporting System</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
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
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Test 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Country</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Test 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Province</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="1">Test 1</option>
                    <option value="2">Test 2</option>
                    </select>
                    <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Municipality</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select name="select" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
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




@endsection

@push('js')


@endpush
