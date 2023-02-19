<div class="w-full rounded-xl bg-white p-8">
	<form wire:submit.prevent='changeProfileImage' class="w-full">
		<div class="flex items-center space-x-4 py-4">
			<div class="relative">
				<input type="file" wire:model.defer="image" id="image" class="hidden">
				<?php if(auth()->user()->image && !$image): ?>
					<img src="<?php echo e(asset('/storage/' . auth()->user()->image)); ?>" alt="<?php echo e(auth()->user()->name); ?>"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				<?php elseif($image): ?>
					<img src="<?php echo e($image->temporaryUrl()); ?>" alt="<?php echo e(auth()->user()->name); ?>"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				<?php else: ?>
					<img src="/img/avatar.png" alt="<?php echo e(auth()->user()->name); ?>"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				<?php endif; ?>
			</div>
			<div class="flex flex-col">

				<div class="flex w-full items-center space-x-3 text-sm">
					<label for="image"
						class="inline-block max-w-max cursor-pointer rounded-full bg-gray-200 px-3 py-2 align-middle font-medium capitalize">change
						image</label>
					<button class="btn tt bg-primary inline-block rounded-lg font-normal text-white" type="submit">Upload
						Image</button>
				</div>
				<p class="w-60 pt-2">
					<?php if($errors->any()): ?>
						<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="w-24 text-sm leading-tight text-red-600" style="line-height: 0px"><?php echo e($message); ?></span>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					<?php else: ?>
						<span class="line max-w-[200px] leading-tight" style="line-height: 0px">Image allowed
							png,jpeg,
							jpg</span>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</form>
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/livewire/image-upload.blade.php ENDPATH**/ ?>