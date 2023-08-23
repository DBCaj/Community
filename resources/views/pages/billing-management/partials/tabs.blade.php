<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('seller-payouts')}}" class="{{ Request::is('billing-management/seller-payouts*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Sellers</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('logistic-payouts')}}" class="{{ Request::is('billing-management/logistic-payouts*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Logistics</a></span>
    </span>
</div>
