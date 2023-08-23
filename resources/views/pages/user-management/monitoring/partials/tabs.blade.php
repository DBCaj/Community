<div class="p-2 pb-0 w-full mb-4 border-b">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a @click="openTab = 1" :class="{'text-[#016e34] cos-underline-active': openTab === 1,'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100': openTab != 1 }" class="py-3 px-2 sm:px-6 font-semibold cursor-pointer">Activities</a></span>
        <span class="relative pb-2 mr-2"><a @click="openTab = 2" :class="{'text-[#016e34] cos-underline-active': openTab === 2,'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100': openTab != 2 }" class="py-3 px-2 sm:px-6 font-semibold cursor-pointer">Login Attempts</a></span>
    </span>
</div>
