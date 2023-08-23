<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a href="{{route('sale')}}" class="{{ Request::is('sales-and-promo/sale*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Sale</a></span>
        {{-- <span class="relative pb-2 mr-2"><a href="{{route('package')}}" class="{{ Request::is('sales-and-promo/package-discount*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Package</a></span> --}}
        <span class="relative pb-2 mr-2"><a href="{{route('buyxgety')}}" class="{{ Request::is('sales-and-promo/buyxgety*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Buy X Get Y</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('delivery')}}" class="{{ Request::is('sales-and-promo/delivery-discount*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Delivery</a></span>
        <span class="relative pb-2 mr-2"><a href="{{route('voucher')}}" class="{{ Request::is('sales-and-promo/voucher*') ? 'text-[#016e34] cos-underline-active' : 'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100' }}  py-3 px-2 sm:px-6 font-semibold">Voucher</a></span>
    </span>
</div>
