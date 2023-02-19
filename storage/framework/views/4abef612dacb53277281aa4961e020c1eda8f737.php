<div class="w-full rounded bg-white px-6 md:px-8 py-8 shadow-sm relative overflow-hidden">
    <div class="flex justify-between w-full">
        <div class="">
            <p class="text-lg xl:text-xl  capitalize text-gray-400"><?php echo e($name); ?></p>
            <h1 class="text-xl lg:text-2xl  text-primary-dark font-medium font-poppin">
                <?php if($money): ?>
                    <span>&pound</span>
                <?php endif; ?>
                <?php echo e($digit); ?>

            </h1>
        </div>
        <div class="text-<?php echo e($color); ?> rounded p-2 ">
            <span class="bg-<?php echo e($color); ?>">
                <?php echo e($slot); ?>

            </span>
        </div>
    </div>
    
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/components/board.blade.php ENDPATH**/ ?>