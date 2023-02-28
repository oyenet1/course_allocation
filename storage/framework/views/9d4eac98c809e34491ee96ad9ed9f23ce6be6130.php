<div x-cloak
    class="fixed inset-0 left-0 flex flex-col justify-between w-full h-screen p-4 bg-black bg-opacity-75 modal background-blur"
    x-data="{ form: <?php if ((object) ('form') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('form'->value()); ?>')<?php echo e('form'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('form'); ?>')<?php endif; ?>.defer }" x-show="form" style="z-index: 100">
    <div @click.away="form = false"
        <?php echo e($attributes->merge(['class' => 'relative w-full py-6 px-4 overflow-y-auto mx-auto my-auto bg-white rounded-md shadow md:p-4 max-h-[500px] sm:max-w-xs md:max-w-lg'])); ?>>
        <span @click="form = false"
            class="tt absolute top-0 right-0 m-2 cursor-pointer rounded-full px-[10px] py-0 text-4xl text-gray-500 hover:bg-gray-200">
            &times;
        </span>
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/components/modal.blade.php ENDPATH**/ ?>