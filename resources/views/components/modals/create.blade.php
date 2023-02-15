<div class=" w-full h-full overflow-y-auto mx-auto absolute inset-0 shadow-lg bg-black bg-opacity-50 flex items-center  z-40" x-data="{openCreateModal: @entangle('modal')}" x-show="openCreateModal" x-cloak>
  <div class="bg-white overflow-y-auto mx-auto w-96 max-w-3xl rounded">
    <div class="w-full bg-gray-100 p-2 flex items-center justify-between">
      <span class="text-gray-600 font-medium text-xl"></span>
      <span class="cursor-pointer opacity-50 hover:opacity-100 " @click="openCreateModal = false">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </span>
    </div>
    {{-- form  --}}
    {{ $slot }}
  </div>
</div>
