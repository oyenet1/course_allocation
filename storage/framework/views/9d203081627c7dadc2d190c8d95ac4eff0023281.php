<div class="w-full gap-4 mx-auto mt-4">
    <div class="w-full">
        <h4 class="mx-auto text-2xl font-bold text-center capitalize lg:text-3xl">
            <?php if($update): ?>
                Edit <?php echo e($title); ?> details
            <?php else: ?>
                <?php echo e($header ?? 'Add'); ?> <?php echo e($title); ?>

            <?php endif; ?>
        </h4>
    </div>

    <!-- Modal body -->
    <form wire:submit.prevent=<?php if($update): ?> 'update' <?php else: ?> 'save' <?php endif; ?>
        class="flex flex-col w-full gap-6 mx-auto my-4 overflow-y-auto max-h-max min-h-fit">
        <?php echo e($slot); ?>


        <?php if($update): ?>
            <button wire:loading.attr="disabled"
                class="w-[200px] mx-auto btn submit-primary capitalize tt submit-primary font-normal"
                type="submit">Update
                <?php echo e($title); ?>

                <img wire:loading.delay wire:target='update' src="/img/spin-white.svg" alt="" class="w-11 h-11">
            </button>
        <?php else: ?>
            <button wire:loading.attr="disabled"
                class="w-[200px] mx-auto submit-primary py-2 capitalize tt submit-primary font-normal"
                type="submit"><?php echo e($header ?? 'add'); ?>

                <?php echo e($title); ?>

                <img wire:loading.delay wire:target='save' src="/img/spin-white.svg" alt="" class="w-11 h-11">
            </button>
        <?php endif; ?>
    </form>
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/components/form.blade.php ENDPATH**/ ?>