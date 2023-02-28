<div class="relative w-64 p-0">
    <input type="text" wire:model.debounce.500ms="search"
        class="w-full px-3 py-3 text-xs font-medium bg-white border-none rounded-lg shadow focus:ring-0"
        placeholder="Search <?php echo e($name); ?>">
    
    <svg class="absolute w-6 h-6 font-bold top-2 right-2 icons-svg text-primary" fill="none" stroke="currentColor"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
    </svg>
</div>
<?php /**PATH C:\laragon\www\adonis-abbey\resources\views/components/search.blade.php ENDPATH**/ ?>