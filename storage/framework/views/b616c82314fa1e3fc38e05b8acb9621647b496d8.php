<div class="w-full">
    <label for="<?php echo e($name); ?>" class="text-sm capitalize m-0 p-0"><?php echo e($label); ?></label>
    <input
        <?php echo e($attributes->merge(['class' => 'w-full border-0 border-b-2 border-primary bg-white placeholder-gray-500 text-dark px-0 h-full focus:outline-none font-medium focus:bg-white tt focus:ring-0 focus:border-secondary', 'type' => $type, 'name' => $name, 'id' => $name])); ?> />
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="mb-2 text-red-600 text-sm pt-2"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\laragon\www\adonis-abbey\resources\views/components/text-input.blade.php ENDPATH**/ ?>