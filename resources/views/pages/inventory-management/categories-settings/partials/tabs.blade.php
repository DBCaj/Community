<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('categories')}}" class="{{ Request::is('inventory-management/categories-settings/categories*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Categories</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('subcategories')}}" class="{{ Request::is('inventory-management/categories-settings/subcategories*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Subcategories</a></span>
    </span>
</div>
