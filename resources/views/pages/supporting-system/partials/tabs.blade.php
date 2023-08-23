<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('support-user-information')}}" class="{{ Request::is('supporting-system/user-information*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">User List</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('support-roles')}}" class="{{ Request::is('supporting-system/roles*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Roles</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('support-department')}}" class="{{ Request::is('supporting-system/department*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Department</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('support-user-management-monitoring')}}" class="{{ Request::is('supporting-system/monitoring*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Monitoring</a></span>
    </span>
</div>
