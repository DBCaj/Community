<!-- Desktop sidebar -->
<aside
    class="z-20 hidden w-64 h-auto bg-white md:block flex-shrink-0 transform duration-500"
    x-show="isSideMenuOpenDesktop"
    x-transition:enter="transition-all transform ease-in-out duration-500"
    x-transition:enter-start="opacity-0 -ml-64"
    x-transition:enter-end="opacity-100 ml-0"
    x-transition:leave="transition-all transform ease-in-out duration-500"
    x-transition:leave-start="opacity-100 ml-0"
    x-transition:leave-end="opacity-0 -ml-64">

    <div class="p-2 bg-[#016e34] text-center">
        <a href="" class="">
            <img class="mx-auto object-cover w-auto h-12 " src="{{asset('assets/solid-logo-white.png')}}"
                alt="SOLID">
        </a>
    </div>

    <div>
        <div class="p-6 flex-col justify-center flex text-gray-500">

            <img src="{{ Auth::user()->image_location == true ? asset(Auth::user()->image_location) : asset('assets/placeholder/blank-person.png') }}" alt="profile picture" 
            class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-2">

            
            <span class="mx-auto font-semibold">
                {{ Auth::user()->firstname }}
            </span>

            <span class="mx-auto text-xs tracking-widest">
                {{ Auth::user()->role }}
            </span>

        </div>

        <ul class="mt-4 text-gray-400">

            {{-- Dashboard --}}
            <li class="mb-1">
                <div class="{{ Request::is(['/', 'dashboard*']) ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-100 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is(['/', 'dashboard*']) ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150"
                        href="{{route('dashboard')}}">

                        <div
                            class="{{ Request::is(['/', 'dashboard*']) ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="analytics" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M510.62 92.63C516.03 94.74 521.85 96 528 96c26.51 0 48-21.49 48-48S554.51 0 528 0s-48 21.49-48 48c0 2.43.37 4.76.71 7.09l-95.34 76.27c-5.4-2.11-11.23-3.37-17.38-3.37s-11.97 1.26-17.38 3.37L255.29 55.1c.35-2.33.71-4.67.71-7.1 0-26.51-21.49-48-48-48s-48 21.49-48 48c0 4.27.74 8.34 1.78 12.28l-101.5 101.5C56.34 160.74 52.27 160 48 160c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-4.27-.74-8.34-1.78-12.28l101.5-101.5C199.66 95.26 203.73 96 208 96c6.15 0 11.97-1.26 17.38-3.37l95.34 76.27c-.35 2.33-.71 4.67-.71 7.1 0 26.51 21.49 48 48 48s48-21.49 48-48c0-2.43-.37-4.76-.71-7.09l95.32-76.28zM400 320h-64c-8.84 0-16 7.16-16 16v160c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V336c0-8.84-7.16-16-16-16zm160-128h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zm-320 0h-64c-8.84 0-16 7.16-16 16v288c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V208c0-8.84-7.16-16-16-16zM80 352H16c-8.84 0-16 7.16-16 16v128c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V368c0-8.84-7.16-16-16-16z">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>

                        </div>

                    </a>

                </div>
            </li>


            {{-- User Management --}}
            @if(Auth::user()->role == 'admin' || 'Admin')
                <li class="mb-1">
                    <div class="{{ Request::is('user-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-200 -translate-x-12 opacity-0"
                        data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>
                        <a class="{{ Request::is('user-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                            href="{{url('show-rec')}}">
                            <div
                                class="{{ Request::is('user-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user-lock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z">
                                        </path>
                                </svg>
                                <span class="ml-4">User Management</span>
                            </div>
                        </a>
                    </div>
                </li>
            @else
            <li class="mb-1">
                    <div class="{{ Request::is('user-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-200 -translate-x-12 opacity-0"
                        data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>
                        <a class="{{ Request::is('user-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                            href="#">
                            <div
                                class="{{ Request::is('user-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user-lock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z">
                                        </path>
                                </svg>
                                <span class="ml-4" style="color:red">User Management (available for admins only)</span>
                            </div>
                        </a>
                    </div>
                </li>
            @endif


            {{-- Seller Management --}}
            <li class="mb-1">
                <div class="{{ Request::is('branch-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-300 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('branch-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('branch-user')}}">

                        <div
                            class="{{ Request::is('branch-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="store" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512">
                                <path fill="currentColor" d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5.6 9.1.9 13.7.9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1.8-12.1 1.2-18.2 1.2z"></path>
                            </svg>
                            <span class="ml-4">Branch</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- Buyer Management --}}
            <li class="mb-1">
                <div class="{{ Request::is('buyer-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-300 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('buyer-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('buyer-account')}}">

                        <div
                            class="{{ Request::is('buyer-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                            </svg>
                            <span class="ml-4">Buyers</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- Inventory Management --}}
            <li class="relative mb-1" x-data="{ open: false }">
                <div class="{{ Request::is('inventory-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-500 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <button
                        class="{{ Request::is('inventory-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }}  inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150  focus:outline-none"
                        @click="open = !open" @click.away="open = false" aria-haspopup="true">
                        <div
                            class="{{ Request::is('inventory-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }}  px-6 py-3 w-full inline-flex items-center  duration-500 ease-out justify-between ">

                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="boxes" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M480 288v96l-32-21.3-32 21.3v-96zM320 0v96l-32-21.3L256 96V0zM160 288v96l-32-21.3L96 384v-96z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M560 288h-80v96l-32-21.3-32 21.3v-96h-80a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16V304a16 16 0 0 0-16-16zm-384-64h224a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-80v96l-32-21.3L256 96V0h-80a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16zm64 64h-80v96l-32-21.3L96 384v-96H16a16 16 0 0 0-16 16v192a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16V304a16 16 0 0 0-16-16z"></path></g>
                                </svg>
                                <span class="ml-4 truncate">Inventories</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>

                </div>

                <template x-if="open" @click.away="open = false">
                    <div class="px-2 pb-1"
                    x-transition:enter="transition ease-out origin-top duration-200"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition origin-top ease-in duration-100"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        aria-label="submenu">
                        <ul class="pr-2 pl-8 mt-1 space-y-2 overflow-hidden text-sm rounded-md">

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('inventory-management/product*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('product')}}">
                                <span class="ml-4">Product List</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('inventory-management/categories-settings*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('categories')}}">
                                <span class="ml-4">Categories Setting</span>
                                </a>
                            </div>
                        </ul>
                    </div>
                </template>
            </li>

            {{-- Sales and Promotions --}}
            <li class="mb-1">
                <div class="{{ Request::is('sales-and-promo*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[600ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('sales-and-promo*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('sale')}}">

                        <div
                            class="{{ Request::is('sales-and-promo') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z"></path>
                            </svg>
                            <span class="ml-4">Sale And Promo</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- Courier Management --}}
            <li class="mb-1">
                <div class="{{ Request::is('courier-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[700ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('courier-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('company')}}">

                        <div
                            class="{{ Request::is('courier-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                            </svg>
                            <span class="ml-4">Couriers</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- Order Management --}}
            <li class="mb-1">
                <div class="{{ Request::is('order-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[800ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('order-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('orders')}}">

                        <div
                            class="{{ Request::is('order-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM403.029 192H360v-60c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v60h-43.029c-10.691 0-16.045 12.926-8.485 20.485l67.029 67.029c4.686 4.686 12.284 4.686 16.971 0l67.029-67.029c7.559-7.559 2.205-20.485-8.486-20.485z"></path>
                            </svg>
                            <span class="ml-4">Orders</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- Billing Management --}}
            <li class="mb-1">
                <div class="{{ Request::is('billing-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[900ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('billing-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('seller-payouts')}}">

                        <div
                            class="{{ Request::is('billing-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-invoice-dollar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-153 31V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 80v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8zm144 263.88V440c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-24.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V232c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v24.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07z"></path>
                            </svg>
                            <span class="ml-4">Billings</span>
                        </div>

                    </a>
                </div>
            </li>

            {{-- System Management --}}
            <li class="relative mb-1" x-data="{ open: false }">
                <div class="{{ Request::is('system-management*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-1000 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <button
                        class="{{ Request::is('system-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }}  inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150  focus:outline-none"
                        @click="open = !open" @click.away="open = false" aria-haspopup="true">
                        <div
                            class="{{ Request::is('system-management*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }}  px-6 py-3 w-full inline-flex items-center  duration-500 ease-out justify-between ">

                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="network-wired" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M640 264v-16c0-8.84-7.16-16-16-16H344v-40h72c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32H224c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h72v40H16c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h104v40H64c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32h-56v-40h304v40h-56c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h160c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32h-56v-40h104c8.84 0 16-7.16 16-16zM256 128V64h128v64H256zm-64 320H96v-64h96v64zm352 0h-96v-64h96v64z"></path>
                                </svg>
                                <span class="ml-4 truncate">System</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>

                </div>

                <template x-if="open" @click.away="open = false">
                    <div class="px-2 pb-1"
                    x-transition:enter="transition ease-out origin-top duration-200"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition origin-top ease-in duration-100"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        aria-label="submenu">
                        <ul class="pr-2 pl-8 mt-1 space-y-2 overflow-hidden text-sm rounded-md">

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/fees-management*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('membership')}}">
                                <span class="ml-4">Fees Management</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/announcements*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('announcements')}}">
                                <span class="ml-4">Announcements</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/announcements*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('announcements')}}">
                                <span class="ml-4">CMS</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/user-performance*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('buyer-performance')}}">
                                <span class="ml-4">User Performance</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/product-performance*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('product-inquiries')}}">
                                <span class="ml-4">Product Performance</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/messages*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('buyer-messages')}}">
                                <span class="ml-4">Messages</span>
                                </a>
                            </div>

                            <div class="hover:translate-x-2 transform transition-all duration-500 ease-out">
                                <a class="{{ Request::is('system-management/delivery-type*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} w-full inline-flex x-2 py-1 transition-colors duration-150  rounded-md"
                                href="{{route('delivery-type')}}">
                                <span class="ml-4">Delivery Type</span>
                                </a>
                            </div>

                        </ul>
                    </div>
                </template>
            </li>

            {{-- Pabili Service --}}
            {{-- <li class="mb-1">
                <div class="{{ Request::is('pabili-service*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[400ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('pabili-service*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('pabili-service')}}">

                        <div
                            class="{{ Request::is('pabili-service*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-full" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor" d="M384.3 360.6L320 254l-64.2 106.6c-6.4 10.7-26.1 29.8-54.7 21.6L64 343v82c0 14.7 10 27.5 24.2 31l216.2 54.1c10.2 2.5 20.9 2.5 31 0L551.8 456c14.2-3.6 24.2-16.4 24.2-31v-82l-137 39.1c-28.5 8.2-48.2-10.7-54.7-21.5zM194.2 143.7c-1.3-5.1-2.2-10.3-2.2-15.7 0-35.3 28.7-64 64-64s64 28.7 64 64c0 11.2-3.1 21.5-8.2 30.7l8.2 1L475.3 140 511 41.7c3-8.3-1.3-17.5-9.6-20.5L445.9 1c-8.3-3-17.5 1.3-20.5 9.6L383.7 125C382 55.7 325.7 0 256 0c-70.7 0-128 57.3-128 128 0 2.5.6 4.9.7 7.4zM53.2 169L1.7 271.8c-4.6 9.2.3 20.2 10.1 23l197.9 56.5c7.1 2 14.7-1 18.5-7.3L320 192 69.8 160.1c-6.9-.8-13.5 2.7-16.6 8.9zm585.1 102.8L586.8 169c-3.1-6.2-9.8-9.8-16.7-8.9L320 192l91.7 152.1c3.8 6.3 11.4 9.3 18.5 7.3l197.9-56.5c9.9-2.9 14.7-13.9 10.2-23.1z"></path>
                            </svg>
                            <span class="ml-4">Pabili Service</span>
                        </div>

                    </a>
                </div>
            </li> --}}

            {{-- Inquiry Monitoring --}}
            {{-- <li class="mb-1">
                <div class="{{ Request::is('inquiry*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-500 -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('inquiry*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('inquiry')}}">

                        <div
                            class="{{ Request::is('inquiry*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path>
                            </svg>
                            <span class="ml-4">Inquiry Monitoring</span>
                        </div>

                    </a>
                </div>
            </li> --}}

            {{-- Settings --}}
            {{-- <li class="mb-1">
                <div class="{{ Request::is('settings*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[600ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <a class="{{ Request::is('settings*') ? 'bg-[#016e34] text-white' : 'hover:text-[#016e34] hover:bg-[#016e34] hover:bg-opacity-[0.15]' }} inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 "
                        href="{{route('settings')}}">

                        <div
                            class="{{ Request::is('settings*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }} px-6 py-3 w-full inline-flex items-center duration-500 ease-out">

                            <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cogs" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor" d="M512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z"></path>
                            </svg>
                            <span class="ml-4">Settings</span>
                        </div>

                    </a>
                </div>
            </li> --}}



            {{-- <li class="relative mb-1" x-data="{ open: false }">
                <div class="{{ Request::is('account-roles*') ? 'transform-none transition-none' : 'transform transition-all' }} duration-500 delay-[800ms] -translate-x-12 opacity-0"
                    data-replace='{ "-translate-x-12": "translate-x-0", "opacity-0": "opacity-100"}'>

                    <button
                        class="{{ Request::is('account-roles*') ? 'bg-gradient-to-r from-[#00bd24] to-[#00637d] text-white' : 'hover:text-[#008000] dark:hover:text-forest_green-100' }}  inline-flex items-center w-11/12 mr-2 rounded-tr-full rounded-br-full text-sm  transition-colors duration-150 hover:bg-[#4da64d] hover:bg-opacity-25 dark:hover:bg-opacity-75  focus:outline-none"
                        @click="open = !open" @click.away="open = false" aria-haspopup="true">
                        <div
                            class="{{ Request::is('account-roles*') ? 'pl-8 transform-none transition-none' : 'hover:translate-x-2 transform transition-all' }}  px-6 py-3 w-full inline-flex items-center  duration-500 ease-out justify-between ">

                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fas"
                                    data-icon="user-lock" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512">
                                    <path fill="currentColor"
                                        d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z">
                                    </path>
                                </svg>
                                <span class="ml-4 truncate">Roles Management</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>

                </div>

                <template x-if="open" @click.away="open = false">
                    <div class="px-2 pb-1"
                    x-transition:enter="transition ease-out origin-top duration-200"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition origin-top ease-in duration-100"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        aria-label="submenu">
                        <ul class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900 scrollbar-thin scrollbar-thumb-[#4da64d] scrollbar-track-gray-100 scrollbar-thumb-rounded">

                            <a class="{{ Request::is('account-roles') ? 'bg-gradient-to-r from-[#00bd24] to-[#00637d] text-white' : 'hover:text-[#008000] dark:hover:text-forest_green-100' }} w-full inline-flex x-2 py-1 transition-colors duration-150 hover:bg-[#4da64d] hover:bg-opacity-25 dark:hover:bg-opacity-75 dark:hover:text-gray-200 rounded-xl"
                                href="">
                                <span class="ml-4">Account Roles</span>
                            </a>

                            <a class="{{ Request::is('account-roles/create') ? 'bg-gradient-to-r from-[#00bd24] to-[#00637d] text-white' : 'hover:text-[#008000] dark:hover:text-forest_green-100' }} w-full inline-flex x-2 py-1 transition-colors duration-150 hover:bg-[#4da64d] hover:bg-opacity-25 dark:hover:bg-opacity-75 dark:hover:text-gray-200 rounded-xl"
                                href="">
                                <span class="ml-4">Add Roles</span>
                            </a>
                        </ul>
                    </div>
                </template>
            </li> --}}

        </ul>
    </div>

</aside>

