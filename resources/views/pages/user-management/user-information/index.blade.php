@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    User Information
</h2>


<!--------------------------------------- <BREADCRUMB --------------------------------------->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="float: left;"><a href="{{ route('dashboard') }}" style="padding-right: 10px; color: white;">Dashboard</a></li>
        <li style="float: left; padding-right: 10px; color: white;">/</li>
        <li class="breadcrumb-item" style="float: left;"><a href="{{ url('show-rec') }}" style="padding-right: 10px; color: white;">User Management</a></li>
        <li style="float: left; padding-right: 10px; color: white;">/</li>
        <li class="breadcrumb-item active" style="float: left;" aria-current="page" style="padding-right: 10px;"><span style="color: white;">User Information</span></li>
    </ol>
</nav>
<!--------------------------------------- </BREADCRUMB> --------------------------------------->


<div x-cloak>
    @include('pages.user-management.partials.tabs')

    {{--User List--}}
    <div class=" bg-white rounded-lg p-4 shadow-md">
        @include('components.alertbar')

        <div style="backgound-color: red;" class="flex justify-between lg:items-center flex-col lg:flex-row mb-4">
            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'Admin')
                <div class="flex justify-start mb-4 lg:mb-0">
                    <a href="{{route('user-information-create')}}" class="px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg flex items-center"><span><svg class="w-4 h-4 text-white mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg></span>Add User</a>
                </div>
            @else
                <div class="flex justify-start mb-4 lg:mb-0">
                    <a href="#" class="px-4 py-2 font-medium text-white bg-[#05a85c] hover:bg-[#437a61] transition-all duration-500 rounded-lg flex items-center"><span><svg class="w-4 h-4 text-white mr-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg></span>Add User (available for admins only)</a>
                </div>        
            @endif

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
                        {{ $activeCount }}
                    </div>
                </span>

                <span class="border w-20 sm:w-32 rounded-md p-2 border-red-500 bg-red-500 bg-opacity-10 text-red-500">
                    <div class="font-semibold">
                        Inactive
                    </div>
                    <div class="text-right font-bold text-lg">
                        {{ $inactiveCount }}
                    </div>
                </span>
            </div>
        </div>

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
                            <th class="p-3 font-normal">ID</th>
                            <th class="p-3 font-normal">Name</th>
                            <th class="p-3 font-normal">Email</th>
                            <th class="p-3 font-normal">Role</th>
                            <th class="p-3 font-normal">Department</th>
                            <th class="p-3 font-normal">Status</th>
                            <th class="p-3 font-normal">Date Update</th>
                            <th class="p-3 font-normal">Date Added</th>
                            <th class="p-3 font-normal">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @foreach($data as $item)
                        <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                            <td class="p-3">
                                {{ $item->id }}
                            </td>
                            <td class="p-3">
                                {{ $item['firstname'] }}
                            </td>
                            <td class="p-3">
                                {{ $item['email'] }}
                            </td>
                            <td class="p-3">
                                {{ $item['role'] }}
                            </td>
                            <td class="p-3">
                                {{ $item['department'] }}
                            </td>
                            <td class="p-3">
                                @if($item['status'] == 0)
                                    Inactive
                                @else
                                    Active
                                @endif
                            </td>
                            <td class="p-3">
                                {{ $item['updated_at'] }}
                            </td>
                            <td class="p-3">
                                {{ $item['created_at'] }}
                            </td>
                            {{-- <td class="p-3">
                                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"   class="max-w-xs flex items-center text-sm outline-none focus:outline-none focus:shadow-solid transition-all duration-300">
                                            <span class="py-1 px-2 rounded bg-green-100 text-green-500 text-sm">Active</span> --}}
                                            {{-- <span class="py-1 px-2 rounded bg-red-100 text-red-500 text-sm">Inactive</span> --}}
                                            {{-- <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" class="w-5 h-5"  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg>
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
                            </td> --}}
                            <td class="p-3 font-normal text-sm">
                                @if(Auth::user()->role == 'user' || Auth::user()->role == 'User')
                                    <div style="color:red">
                                        Available for admins only
                                    </div>                
                                @else
                                    <div style="float:left; margin-right:10px">
                                        <a 
                                        data-toggle="tooltip" 
                                        data-placement="left" 
                                        title="Edit"
                                        href="{{ route('edit.form', $item->id) }}" 
                                        role="button" 
                                        style="float:lelft">
                                            <x-icons.edit/>
                                        </a>
                                    </div>                             
                                    <div style="float:left">
                                        <a 
                                        data-toggle="tooltip" 
                                        data-placement="left" 
                                        title="Delete"
                                        href="{{ url('/delete-rec/' . $item->id) }}" 
                                        role="button" 
                                        style="float:lelft" 
                                        onclick="return confirm('Are you sure you want to delete this user?'); event.preventDefault(); document.getElementById('delete-form-{{$item->id}}').submit();" >
                                            <x-icons.delete/>
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


@endsection

@push('js')
                                 
@endpush
