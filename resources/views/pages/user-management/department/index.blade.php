@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Department
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / User Management / Department
</h2>

<div x-data="{'showModalDepartment': false }" >

    {{--Modal - Add Department --}}
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModalDepartment" :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showModalDepartment }" x-cloak>


        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg p-4 text-left" x-show="showModalDepartment" @click.away="showModalDepartment = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" >

            <!--Title-->
            <div class="flex justify-between items-center mb-2">
                <p class="font-bold text-[#313346] mb-2 uppercase">Add Department</p>
                <div class="cursor-pointer z-50" @click="showModalDepartment = false">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>
            <form action="{{ route('department.save') }}" method="POST">
                @csrf
                <div class="font-bold text-[#313346] mb-2 uppercase">Department</div>
                <input type="text" name="department" value="{{ old('department') }}" required autofocus class="p-2 border border-[#8a82a1] hover:border-[#4d7ebd] focus:border-[#4d7ebd] hover:text-[#4d7ebd] focus:text-[#4d7ebd] rounded-lg w-full outline-none mb-4">
                @error('department')
                    <span style="color:red">{{ $message }}</span>
                @enderror
                <div class="text-right mt-8 mb-2">
                    <a href="" class="text-red-400 hover:text-white hover:bg-red-400 mr-4 font-medium px-4 py-2 rounded-lg border-red-400 border transition-all duration-300">Cancel</a>
                    <button type="submit" id="save-button">
                        <span  @click="openTab = 2" class="cursor-pointer px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg">Save</span>
                    </button>
                </div>
            </form>
        </div>
        <!--/Dialog -->
    </div>
    
    

    @include('pages.user-management.partials.tabs')

    {{--Department--}}
    <div class=" bg-white rounded-lg p-4 shadow-md">

        @include('components.alertbar')

        <div class="flex justify-between lg:items-center flex-col lg:flex-row mb-4">
            <div class="flex justify-start mb-4 lg:mb-0">
                <a @click="showModalDepartment = true" class="cursor-pointer px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg flex items-center"><span><svg class="w-4 h-4 text-white mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"></path></svg></span> Add Department</a>
            </div>

            {{--COUNT--}}
            <div class="flex gap-4">

                <span class="border w-20 sm:w-32 rounded-md p-2 border-[#2e83d9] bg-[#2e83d9] bg-opacity-10 text-blue-500">
                    <div class="font-semibold">
                        Total
                    </div>
                    <div class="text-right font-bold text-lg">
                         {{ $countData }}
                    </div>
                </span>

                <span class="border w-20 sm:w-32 rounded-md p-2 border-green-500 bg-green-500 bg-opacity-10 text-green-500">
                    <div class="font-semibold">
                        Active
                    </div>
                    <div class="text-right font-bold text-lg">
                        {{ $activeDepartmentsCount }}
                    </div>
                </span>

                <span class="border w-20 sm:w-32 rounded-md p-2 border-red-500 bg-red-500 bg-opacity-10 text-red-500">
                    <div class="font-semibold">
                        Inactive
                    </div>
                    <div class="text-right font-bold text-lg">
                        {{ $inactiveDepartmentsCount }}
                    </div>
                </span>

            </div>
        </div>

        <div>
            @if(session('success'))
                <div style="background-color:lightgreen; padding:9px; border-radius:4px; margin-bottom: 10px;">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div>
            @if(session('exist'))
                <div style="background-color:#ff4d4d; color:white; padding:9px; border-radius:4px; margin-bottom: 10px;">
                    {{ session('exist') }}
                </div>
            @endif
        </div>

        
        <div x-cloak>
       
            {{--User List--}}
            <div class=" bg-white rounded-lg p-4 shadow-md">
                @include('components.alertbar')

                <div class="flex justify-between mb-4 flex-col md:flex-row">
                    <div class="flex justify-between w-full mb-2 md:mb-0 gap-4 text-sm">
                    </div>
                </div>

                {{--tables--}}
                <div class="overflow-hidden rounded-md grid">
                    <div class="overflow-x-auto ">

                        @if(Session::get('deleted'))
                            <div style="background-color:lightgreen; padding:9px; border-radius:4px; margin-bottom: 20px;">
                                {{ Session::get('deleted') }}
                            </div>
                        @endif    

                        <table class="whitespace-nowrap w-full display" id="myTable">
                            <thead class="text-left border-b border-gray-600 text-gray-600">
                                <tr>
                                    <th class="p-3 font-normal">User Count</th>
                                    <th class="p-3 font-normal">Department</th>
                                    <th class="p-3 font-normal">Status</th>
                                    <th class="p-3 font-normal">Date Update</th>
                                    <th class="p-3 font-normal">Date Added</th>
                                    <th class="p-3 font-normal">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">

                                @foreach($departments as $key => $department)
                                    <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                                        <td class="p-3">
                                            {{ $key }}
                                        </td>
                                        <td class="p-3">
                                            {{ $department->department }}
                                        </td>
                                        <td class="p-3">
                        {{                  
                        $department->status
                        }}
                                        </td>
                                        <td class="p-3">
                                            {{ $department['updated_at'] }}
                                        </td>
                                        <td class="p-3">
                                            {{ $department['created_at'] }}
                                        </td>
                                        <td class="p-3 font-normal text-sm">
                                            @if(Auth::user()->role == 'user' || Auth::user()->role == 'User')
                                                <div style="color:red">
                                                    Available for admins only
                                                </div>                
                                            @else
                                                
  
  
 <div x-data="{'showEditModalDepartment': false }" >

    {{--Modal - Edit Department --}}
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showEditModalDepartment" :class="{ 'fixed inset-0 z-10 flex items-center justify-center': showEditModalDepartment }" x-cloak>


        <!--Dialog-->
        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg p-4 text-left" x-show="showEditModalDepartment" @click.away="showEditModalDepartment = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" >

            <!--Title-->
            <div class="flex justify-between items-center mb-2">
                <p class="font-bold text-[#313346] mb-2 uppercase">Edit Department</p>
                <div class="cursor-pointer z-50" @click="showModalDepartment = false">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>
            <form action="{{ route('edit_department.auth', $department->id) }}" method="POST">
                @csrf
                <div class="font-bold text-[#313346] mb-2 uppercase">Department</div>
                <input type="text" name="department" value="{{ $department->department }}" required autofocus class="p-2 border border-[#8a82a1] hover:border-[#4d7ebd] focus:border-[#4d7ebd] hover:text-[#4d7ebd] focus:text-[#4d7ebd] rounded-lg w-full outline-none mb-4">
                @error('department')
                    <span style="color:red">{{ $message }}</span>
                @enderror
                <div class="text-right mt-8 mb-2">
                    <a href="" class="text-red-400 hover:text-white hover:bg-red-400 mr-4 font-medium px-4 py-2 rounded-lg border-red-400 border transition-all duration-300">Cancel</a>
                    <button type="submit" id="update-button">
                        <span  @click="openTab = 2" class="cursor-pointer px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg">Update</span>
                    </button>
                </div>
            </form>
        </div>
        <!--/Dialog -->
    </div>                                                 
                        <div style="float:left; margin-right: 10px">                                   <a @click="showEditModalDepartment = true" role="button">
                                                        <x-icons.edit/>
                                                    </a>
                                                </div>                             
                                                
                         <div style="float:left;">                           <a href="{{ route('department_rec.destroy', $department->id) }}" role="button"  onclick="return confirm('Are you sure you want to delete this department?')" >                                                      <x-icons.delete/>
                                                    </a>
                                                </div>        
                                            @endif      
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

<script>
    document.getElementById('save-button').addEventListener('click', function(event) {
        if (!confirm('Are you sure you want to save?')) {
            event.preventDefault(); 
        }
    });
</script>

<script>
  document.getElementById('update-button').addEventListener('click', function(event) {
        if (!confirm('Are you sure you want to update?')) {
            event.preventDefault(); 
        }
    });
</script>

@endsection

@push('js')


@endpush
