<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('product-inquiries')}}" class="{{ Request::is('system-management/product-performance/inquiries*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Inquiries</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('product-reviews')}}" class="{{ Request::is('system-management/product-performance/reviews*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Reviews</a></span>
    </span>
</div>
