<div class="flex items-center justify-between pb-2 pl-4 pr-2 text-gray-500 lg:px-0 md:justify-end md:space-x-6">
    <div class="flex items-center space-x-4">
        <span class="">Rows per page:</span>
        <select wire:model="perPage" name="" id=""
            class="w-16 px-2 py-1 text-sm bg-white border rounded focus:ring-0 focus:outline-0 focus:border-primary focus:border-2 focus:ring-primary">
            <?php for($i = 25; $i < 1001; $i += 25): ?>
                <?php if($i >= 100 && $i % 100 !== 0): ?>
                    <?php continue; ?>
                <?php endif; ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/components/per-page.blade.php ENDPATH**/ ?>