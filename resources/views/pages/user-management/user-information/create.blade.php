@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Add User
</h2>

<!--------------------------------------- <BREADCRUMB --------------------------------------->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" style="float: left;"><a href="{{ route('dashboard') }}" style="padding-right: 10px; color: white;">Dashboard</a></li>
    <li style="float: left; padding-right: 10px; color: white;">/</li>
    <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/show-rec') }}" style="padding-right: 10px; color: white;">User Management</a></li>
    <li style="float: left; padding-right: 10px; color: white;">/</li>
    <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/show-rec') }}" style="padding-right: 10px; color: white;">User Information</a></li>
    <li style="float: left; padding-right: 10px; color: white;">/</li>
    <li class="breadcrumb-item active" style="float: left;" aria-current="page" style="padding-right: 10px;"><span style="color: white;">Add User</span></li>
  </ol>
</nav>
<!--------------------------------------- </BREADCRUMB> --------------------------------------->

<br>

<form action="{{ url('/add-auth') }}" method="POST">
@csrf
<div class="flex gap-4 mb-2">
    <div>
        <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">
            <div class="mb-8 text-sm text-gray-800">
                Account Information
            </div>
    
            <div class="flex justify-center flex-col">

                <img src="{{asset('assets/placeholder/blank-person.png')}}" class="w-32 h-32 rounded-full flex justify-center items-center mb-4 mx-auto" alt="blank-person">

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="email"
                    value="{{ old('email') }}"
                    type="email" 
                    name="email_address" 
                    placeholder=" " 
                    required 
                    autofocus
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('email')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="email_address" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="password"
                    type="password" 
                    name="password" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('password')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="password_confirmation"
                    type="password" 
                    name="password_confirmation" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('password_confirmation')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="password_confirmation" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Confirm Password</label>
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
                    <input 
                    id="firstname"
                    value="{{ old('firstname') }}"
                    type="text" 
                    name="firstname" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('firstname')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="firstname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">First name</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="middlename"
                    value="{{ old('middlename') }}"
                    type="text" 
                    name="middlename" 
                    placeholder=" " 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('middlename')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="middlename" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Middle Name (Optional)</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5 text-sm">
                    <input 
                    id="lastname"
                    value="{{ old('lastname') }}"
                    type="text" 
                    name="lastname" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('lastname')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="lastname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last Name</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="flex justify-center flex-row gap-4">
                <div class="relative z-0 w-32 mb-5">
                        <select 
                        required
                        name="birth_month" 
                        onclick="this.setAttribute('value', this.value);" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                        >
                            <option value="" selected disabled hidden></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Month</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5">
                        <select 
                        required
                        name="birth_day" 
                        onclick="this.setAttribute('value', this.value);" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                        >
                        <option value="" selected disabled hidden></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Day</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5">
                        <select name="birth_year" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="" selected disabled hidden></option>
                        <?php
                            $currentYear = date('Y');
                            $startYear = $currentYear - 100; // Adjust the range as needed
                            for ($year = $startYear; $year <= $currentYear; $year++) {
                                echo "<option value=\"$year\">$year</option>";
                            }
                        ?>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Year</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5" style="display: none">
                        <input 
                        type="text" 
                        name="age" 
                        placeholder=" "  
                        />
                        <label for="age" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Age</label>
                        <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                    </div>
                </div>

                <div class="flex justify-center flex-row gap-4 flex-1">
                    <div class="relative z-0 w-full mb-5">
                        <select required name="gender" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="" selected disabled hidden></option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        </select>
                        <label for="gender" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Gender</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center flex-row gap-4 flex-1">
                <div class="relative z-0 w-full mb-5">
                    <select required name="role" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                    </select>
                    <label for="role" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Role</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select required name="department" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="IT">IT</option>
                    <option value="SA">SA</option>
                    <option value="Networking">Networking</option>
                    </select>
                    <label for="department" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Department</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="contact"
                    value="{{ old('contact') }}"
                    type="text" 
                    name="contact" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('contact')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="contact" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Contact Number</label>
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
                    <input
                    id="house_lot_block_street"
                    value="{{ old('house_lot_block_street') }}"
                    type="text" 
                    name="house_lot_block_street" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('house_lot_block_street')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="house_lot_block_street" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">House / Lot / Block / Street</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

            </div>

            <div class="flex justify-center flex-row gap-4">

                <div class="relative z-0 w-full mb-5">
                    <select 
                    required
                    name="country" 
                    value="" 
                    onclick="this.setAttribute('value', this.value);"
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                    >
                    <option value="" selected disabled hidden></option>
                    <option value="PH">Philippines</option>
                    </select>
                    <label for="country" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Country</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="province"
                    value="{{ old('province') }}"
                    type="text" 
                    name="province" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('province')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="province" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Province</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="municipality"
                    value="{{ old('municipality') }}"
                    type="text" 
                    name="municipality" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('municipality')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="municipality" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Municipality</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    id="barangay"
                    value="{{ old('barangay') }}"
                    type="text" 
                    name="barangay" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('barangay')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="barangay" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Barangay</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>
            </div>

            <div class="flex flex-row gap-4 flex-1">
                <div class="relative z-0 w-32 mb-5">
                    <input 
                    id="zip_code"
                    value="{{ old('zip_code') }}"
                    type="number" 
                    name="zip_code" 
                    placeholder=" " 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('zip_code')
                    <span>{{ $message }}</span>
                    @enderror
                    <label for="zip_code" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Zip Code</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex gap-2 justify-end">
    <input 
    type="reset"
    value="Clear"
    role="button"
    class="py-1 px-3 bg-red-500 rounded text-white" 
    onclick="return confirm('Are you sure you want to clear all inputs?')"
    />
    <button type="submit" class="py-1 px-3 bg-green-500 rounded text-white" onclick="return confirm('Are you sure you want to submit?')">
        Save
    </button>
</div>

</form>

@if(session('store-success'))
<script>
    alert("{{ session('store-success')}}");
</script>
@endif

@endsection

@push('js')

@endpush
