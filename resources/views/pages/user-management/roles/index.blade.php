@extends('main')

@section('content')

<h2 class="text-2xl font-semibold text-white transform transition-all opacity-0 translate-y-12 ease-out mb-2"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    Roles
</h2>
<h2 class=" text-white transform transition-all opacity-0 translate-y-12 ease-out mb-4"
    data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
    <a href="/" class="hover:underline">Dashboard</a> / User Management / Roles
</h2>

<div x-cloak>
    @include('pages.user-management.partials.tabs')

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
                            <th class="p-3 font-normal">Role</th>
                            <th class="p-3 font-normal">Access</th>
                            <th class="p-3 font-normal">Status</th>
                            <th class="p-3 font-normal">Date Update</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">

                        @foreach($roles as $role)

                            <tr class="text-gray-500 dark:text-gray-400 cursor-point hover:bg-blue-200 transition-all duration-150">
                                <td class="p-3">
                                    {{ $role->userCount }}
                                </td>
                                <td class="p-3">
                                    {{ $role->role}}
                                </td>
                                <td class="p-3">
                                    @if($role['role'] == 'admin')
                                        Write
                                    @elseif($role['role'] == 'Admin')
                                        Write
                                    @else
                                        Read
                                    @endif
                                </td>
                                <td class="p-3">
                                  {{ $role->status }}
                                </td>
                                <td class="p-3">
                                    {{ $role['updated_at'] }}
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
