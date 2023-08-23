<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('user-information')}}" class="{{ Request::is('user-management/user-information*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">User List</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('roles')}}" class="{{ Request::is('user-management/roles*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Roles</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('department')}}" class="{{ Request::is('user-management/department*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Department</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('user-management-monitoring')}}" class="{{ Request::is('user-management/monitoring*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Monitoring</a></span>
    </span>
</div>
