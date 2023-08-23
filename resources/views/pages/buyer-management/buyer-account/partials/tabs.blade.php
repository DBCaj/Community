<div class="p-2 bg-white w-max mb-4 rounded-md">
    <span class="flex items-baseline">
        <span class="relative pb-2 mr-2"><a @click="openTab = 1" :class="{'text-[#016e34] cos-underline-active': openTab === 1,'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100': openTab != 1 }" class="py-3 px-2 sm:px-6 font-semibold cursor-pointer">Personal Info</a></span>
        <span class="relative pb-2 mr-2"><a @click="openTab = 2" :class="{'text-[#016e34] cos-underline-active': openTab === 2,'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100': openTab != 2 }" class="py-3 px-2 sm:px-6 font-semibold cursor-pointer">Business Info</a></span>
        <span class="relative pb-2 mr-2"><a @click="openTab = 3" :class="{'text-[#016e34] cos-underline-active': openTab === 3,'cos-underline text-[#016e34] text-opacity-80 hover:text-opacity-100': openTab != 3 }" class="py-3 px-2 sm:px-6 font-semibold cursor-pointer">Requirements</a></span>
    </span>
</div>
