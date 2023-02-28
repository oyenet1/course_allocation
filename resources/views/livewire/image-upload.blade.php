<div class="w-full rounded-xl bg-white p-8">
	<form wire:submit.prevent='changeProfileImage' class="w-full">
		<div class="flex items-center space-x-4 py-4">
			<div class="relative">
				<input type="file" wire:model.defer="image" id="image" class="hidden">
				@if (auth()->user()->image && !$image)
					<img src="{{ asset('/storage/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				@elseif($image)
					<img src="{{ $image->temporaryUrl() }}" alt="{{ auth()->user()->name }}"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				@else
					<img src="/img/avatar.png" alt="{{ auth()->user()->name }}"
						class="mt-2 h-20 w-20 rounded-full border border-gray-200 object-cover shadow-sm lg:h-24 lg:w-24 xl:h-28 xl:w-28">
				@endif
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
					@if ($errors->any())
						@error('image')
							<span class="w-24 text-sm leading-tight text-red-600" style="line-height: 0px">{{ $message }}</span>
						@enderror
					@else
						<span class="line max-w-[200px] leading-tight" style="line-height: 0px">Image allowed
							png,jpeg,
							jpg</span>
					@endif
				</p>
			</div>
		</div>
	</form>
</div>
