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

<form action="{{ route('register.auth') }}" method="POST" enctype="multipart/form-data">
@csrf

@if(Session::get('success'))
    <div style="background-color:lightgreen; padding:9px; border-radius:4px; margin-bottom: 10px;">
        {{ Session::get('success') }}
    </div>
@endif

<div class="flex gap-4 mb-2">
    <div>
        <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">
            <div class="mb-8 text-sm text-gray-800">
                Account Information
            </div>
    
            <div class="flex justify-center flex-col">

                <div class="text-center">
                    <div style="position: relative; display: inline-block;">
                        <img id="previewImage" src="{{ asset('assets/placeholder/blank-person.png') }}" class="w-32 h-32 rounded-full mb-4" alt="blank-person">
                        <input type="file" id="imageUpload" name="image" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); opacity: 0; cursor: pointer;">
                        <label for="imageUpload" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">Upload Image</label>
                    </div>
                </div>

                <br><br>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    value="{{ old('email') }}"
                    type="email" 
                    name="email" 
                    required 
                    autofocus
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('email')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    value="{{ old('password') }}"
                    type="password" 
                    name="password" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('password')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('password_confirmation')
                    <span style="color:red">{{ $message }}</span>
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
                    value="{{ old('firstname') }}"
                    type="text" 
                    name="firstname" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('firstname')
                    <span style="color:red">{{ $message }}</span>
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
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="middlename" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Middle Name (Optional)</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5 text-sm">
                    <input 
                    value="{{ old('lastname') }}"
                    type="text" 
                    name="lastname" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('lastname')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="lastname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last Name</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="flex justify-center flex-row gap-4">
                <div class="relative z-0 w-32 mb-5">
                        <select 
                        value=""
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
                        value=""
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
                        <select value="" name="birth_year" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="" selected disabled hidden></option>
                        <?php
                            $currentYear = date('Y');
                            $startYear = $currentYear - 100; 
                            for ($year = $startYear; $year <= $currentYear; $year++) {
                                echo "<option value=\"$year\">$year</option>";
                            }
                        ?>
                        </select>
                        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Year</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5" style="display:none">
                        <input 
                        type="hidden" 
                        name="age" 
                        id="age"
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
                    <select required name="department" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    
                    @foreach($departments as $department)
                      <option value="{{ $department->department }}">{{ $department->department }}</option>
                    @endforeach
                    
                    </select>
                    <label for="department" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Department</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select required name="role" value="" onclick="this.setAttribute('value', this.value);" class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="" selected disabled hidden></option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    </select>
                    <label for="department" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Role</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    value="{{ old('contact') }}"
                    type="text" 
                    name="contact" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('contact')
                    <span style="color:red">Please enter a valid Philippine phone format. e.g., 09476245306 or +639476245306 or +63 9476245306</span>
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
                    value="{{ old('house_lot_block_street') }}"
                    type="text" 
                    name="house_lot_block_street" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('house_lot_block_street')
                    <span style="color:red">{{ $message }}</span>
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
                    value="{{ old('province') }}"
                    type="text" 
                    name="province" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('province')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="province" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Province</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    value="{{ old('municipality') }}"
                    type="text" 
                    name="municipality" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('municipality')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="municipality" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Municipality</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    value="{{ old('barangay') }}"
                    type="text" 
                    name="barangay" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('barangay')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="barangay" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Barangay</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>
            </div>

            <div class="flex flex-row gap-4 flex-1">
                <div class="relative z-0 w-32 mb-5">
                    <input 
                    value="{{ old('zip_code') }}"
                    type="number" 
                    name="zip_code" 
                    required 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('zip_code')
                    <span style="color:red">{{ $message }}</span>
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

<script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        const previewImage = document.getElementById('previewImage');
        const selectedImage = event.target.files[0];
        if (selectedImage) {
            previewImage.src = URL.createObjectURL(selectedImage);
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the select elements
        const birthMonthSelect = document.querySelector('[name="birth_month"]');
        const birthDaySelect = document.querySelector('[name="birth_day"]');
        const birthYearSelect = document.querySelector('[name="birth_year"]');
        const ageInput = document.getElementById('age');

        // Add event listener to all select elements
        [birthMonthSelect, birthDaySelect, birthYearSelect].forEach(select => {
            select.addEventListener("change", calculateAge);
        });

        function calculateAge() {
            const birthMonth = birthMonthSelect.value;
            const birthDay = birthDaySelect.value;
            const birthYear = birthYearSelect.value;

            // Check if all values are selected
            if (birthMonth && birthDay && birthYear) {
                const birthDate = new Date(`${birthYear}-${birthMonth}-${birthDay}`);
                const currentDate = new Date();
                const age = currentDate.getFullYear() - birthDate.getFullYear();

                // Update the age input field with the calculated age
                ageInput.value = age;
            }
        }
    });
</script>

@endsection

@push('js')

@endpush
