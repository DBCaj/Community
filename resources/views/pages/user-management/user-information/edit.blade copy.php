<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            padding: 15px;
            background-color: red;
        }
    </style>
</head>
<body>

<a href="{{ route('login.form') }}" style="color:white; text-decoration:underline">Back</a>
<br><br>
    
<!-- <form action="{{ route('edit.auth') }}" method="POST" enctype="multipart/form-data"> -->
<form action="{{ route('edit.auth') }}" method="POST">
@csrf

<input type="hidden" name="useracc" value="{{ $acc->id }}">

@if(session('success'))
    <div style="background-color:lightgreen; padding:9px; border-radius:4px; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

<div class="flex gap-4 mb-2">
    <div>
        <div class="bg-white shadow-md py-3 px-5 rounded-md mb-4 w-80">
            <div class="mb-8 text-sm text-gray-800">
                Account Information
            </div>
    
            <div class="flex justify-center flex-col">

                <!-- <div class="text-center">
                    <div style="position: relative; display: inline-block;">
                        <img id="previewImage" src="{{ $acc->image_location == true ? asset($acc->image_location) : asset('assets/placeholder/blank-person.png') }}" class="w-32 h-32 rounded-full mb-4" alt="blank-person">
                        <input type="file" id="imageUpload" name="image" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); opacity: 0; cursor: pointer;">
                        <label for="image" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">Upload Image</label>
                    </div>
                </div>

                <br><br> -->

                <div class="relative z-0 w-full mb-5">
                    <input 
                    autofocus
                    value="{{ $acc->email }}"
                    type="email" 
                    name="email" 
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
                    autofocus
                    type="password" 
                    name="password" 
                    class="pt-2 pl-2 pb-1 block w-full mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-[#016e34] border-gray-200"
                    />
                    @error('password')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">New Password</label>
                    <span class="text-sm text-red-600 hidden" id="error">SAMPLE</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    type="password" 
                    name="password_confirmation" 
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
                    required 
                    value="{{ $acc->firstname }}"
                    type="text" 
                    name="firstname" 
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
                    value="{{ $acc->middlename }}"
                    type="text" 
                    name="middlename" 
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
                    required 
                    value="{{ $acc->lastname }}"
                    type="text" 
                    name="lastname" 
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
                        required 
                        name="birth_month" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                        >
                            <option value="{{ $acc->birth_month }}" selected hidden>
                                @if($acc->birth_month == "1")
                                    January
                                @elseif($acc->birth_month == "2")
                                    February
                                @elseif($acc->birth_month == "3")
                                    March
                                @elseif($acc->birth_month == "4")
                                    April
                                @elseif($acc->birth_month == "5")
                                    May
                                @elseif($acc->birth_month == "6")
                                    June
                                @elseif($acc->birth_month == "7")
                                    July
                                @elseif($acc->birth_month == "8")
                                    August
                                @elseif($acc->birth_month == "9")
                                    September
                                @elseif($acc->birth_month == "10")
                                    October
                                @elseif($acc->birth_month == "11")
                                    November
                                @elseif($acc->birth_month == "12")
                                    December
                                @endif
                            </option>
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
                        <label for="birth_month" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Month</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5">
                        <select 
                        required 
                        name="birth_day" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                        >
                        <option value="{{ $acc->birth_day }}" selected disabled hidden>
                            {{ $acc->birth_day }}
                        </option>
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
                        <label for="birth_day" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Day</label>
                        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                    </div>

                    <div class="relative z-0 w-32 mb-5">
                        <select 
                        required 
                        name="birth_year" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="{{ $acc->birth_year }}" selected disabled hidden>{{ $acc->birth_year }}</option>
                        <?php
                            $currentYear = date('Y');
                            $startYear = $currentYear - 100; 
                            for ($year = $startYear; $year <= $currentYear; $year++) {
                                echo "<option value=\"$year\">$year</option>";
                            }
                        ?>
                        </select>
                        <label for="birth_year" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Birth Year</label>
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
                        <select 
                        required 
                        name="gender" 
                        class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                            <option value="{{ $acc->gender }}" selected disabled hidden>
                                @if($acc->gender == "1")
                                    Male
                                @else
                                    Female
                                @endif
                            </option>
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
                    <select 
                    required 
                    name="department"
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                    <option value="{{ $acc->department }}" selected disabled hidden>{{ $acc->department }}</option>
                      @foreach($departments as $department)
                        <option value="{{ $department->department }}">{{ $department->department }}</option>
option value="{{ $department->department }}">{{ $department->department }}</option>
                      @endforeach
                    </select>
                    <label for="department" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Department</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select 
                    required 
                    name="role" 
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="{{ $acc->role }}" selected disabled hidden>
                            @if($acc->role == "user" || "User")
                                User
                            @else
                                Admin
                            @endif
                        </option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <label for="role" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Role</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <select 
                    name="status" 
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" >
                        <option value="{{ $acc->status }}" selected disabled hidden>{{ $acc->status == 1 ? 'Active' : 'Inactive' }}</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <label for="status" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Status</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    required 
                    value="{{ $acc->contact }}"
                    type="text" 
                    name="contact"  
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
                    required 
                    value="{{ $acc->house_lot_block_street }}"
                    type="text" 
                    name="house_lot_block_street" 
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
                    class="pt-2 pl-2 pb-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200" 
                    >
                        <option value="PH" selected disabled hidden>
                            Philippines
                        </option>
                        <option value="PH">Philippines</option>
                    </select>
                    <label for="country" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Country</label>
                    <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
                </div>

                <div class="relative z-0 w-full mb-5">
                    <input 
                    required 
                    value="{{ $acc->province }}"
                    type="text" 
                    name="province" 
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
                    required 
                    value="{{ $acc->municipality }}"
                    type="text" 
                    name="municipality" 
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
                    required 
                    value="{{ $acc->barangay }}"
                    type="text" 
                    name="barangay" 
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
                    required 
                    value="{{ $acc->zip_code }}"
                    type="number" 
                    name="zip_code" 
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
    <button type="submit" style="padding: 15px; width: 170px" class="py-1 px-3 bg-green-500 rounded text-white" onclick="return confirm('Are you sure you want to update?')">
        Update
    </button>
</div>

</form>

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

</body>
</html>