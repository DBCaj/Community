<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('branch-user')}}" class="{{ Request::is('branch-management/branch-user*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Branch User</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('branch')}}" class="{{ Request::is('branch-management/branch') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Branch</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('branch-management-monitoring')}}" class="{{ Request::is('branch-management/monitoring*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Monitoring</a></span>
    </span>
</div>
