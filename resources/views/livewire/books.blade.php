<div class="w-full rounded-xl bg-white p-8">
	<div class="flex items-center justify-between">
		<div class="flex items-center space-x-4">
			<h2 class="my-6 text-2xl font-semibold uppercase text-gray-700 dark:text-gray-200">Library</h2>
		</div>
		<form action="">
			<input type="search" wire:model='search'
				class="w-72 rounded-md border-2 border-green-600 p-2 text-sm placeholder-gray-400"
				placeholder="search book by author, title, genre">
		</form>
	</div>
	@if ($books->count() > 0)
		<div class="grid grid-cols-1 gap-8 md:grid-cols-2 2xl:gap-12">
			@forelse ($books as $book)
				<div
					class="relative flex flex-col space-x-4 overflow-hidden rounded-lg border font-medium hover:shadow md:flex-row">
					<img src="{{ asset('/storage/' . $book->cover_image) }}" alt="{{ $book->authors }}"
						class="my-auto block max-h-full w-full bg-gray-50 object-cover p-2 md:mx-0 md:h-48 md:w-48">
					<div class="space-y-2 p-2">
						<p class="text-lg font-semibold capitalize">{{ $book->title }}</p>
						<div>
							<p><span class="font-semibold uppercase">Author</span><span class="text-sm">(s): </span>{{ $book->authors }}</p>
							<p class=""><span class="font-semibold uppercase">GENRE:</span> {{ $book->genre }}</p>
							<p class=""><span class="font-semibold uppercase">No of Revision:</span> {{ $book->revision_number }}</p>
							<p class="rounded"><span class="font-semibold uppercase">Published By:</span>
								{{ $book->publisher }}
								<br> On {{ $book->published_at->format('d M, Y') }}
							</p>
						</div>

						<buttok data-toggle="tooltip" data-placement="right" title="Borrow book" wire:click="borrow({{ $book->id }})"
							class="mt-2 inline-block cursor-pointer rounded bg-green-600 p-1 px-2 text-white"><span
								class="font-semibold uppercase"></span>
							Check In
						</buttok>

					</div>
				</div>

			@empty
			@endforelse
		</div>
	@else
		<p class="text-lg">No book in the library at the moment, kindly add books</p>
	@endif
</div>
