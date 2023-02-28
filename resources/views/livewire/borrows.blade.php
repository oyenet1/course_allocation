<div class="w-full rounded-xl bg-white p-8">
	<div class="flex items-center justify-between">
		<div class="flex items-center space-x-4">
			<h2 class="my-6 text-2xl font-semibold uppercase text-gray-700 dark:text-gray-200">Histories</h2>
			{{-- <button data-toggle="modal" data-target="#form" wire:click="add()"
				class="rounded bg-red-600 px-3 py-2 text-sm text-white hover:bg-red-500 focus:outline-none">Add historie</button> --}}
		</div>
		<form action="">
			<input type="search" wire:model='search' class="rounded-md border-2 border-green-600 p-2 text-sm placeholder-gray-400"
				placeholder="search historie">
		</form>
	</div>
	<!-- The Modal -->
	<div class="modal fade" id="form" wire:ignore.self>
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-lg font-medium">
						@if ($update)
							Edit historie details
						@else
							Add new historie
						@endif
					</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form wire:submit.prevent=@if ($update) 'update' @else 'save' @endif
						class="w-ful row h-96 overflow-y-auto px-3" enctype="multipart/form-data">
						<div class="grid grid-cols-2 gap-4">
							<div class="w-full">
								<label for="title" class="mb-1 text-sm font-normal text-gray-600">Title</label>
								<input type="text" wire:model.defer="title"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('title')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal text-gray-600">Authors</label>
								<input type="text" wire:model.defer="authors"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('authors')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal text-gray-600">Cover Image</label>
								<input type="file" wire:model.defer="cover_image"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('cover_image')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal text-gray-600">ISBN</label>
								<input type="text" wire:model.defer="isbn"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('isbn')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal capitalize text-gray-600">revision number</label>
								<input type="text" wire:model.defer="revision_number"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('revision_number')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal capitalize text-gray-600">publishers</label>
								<input type="text" wire:model.defer="publisher"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('publisher')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="w-full">
								<label for="authors" class="mb-1 text-sm font-normal capitalize text-gray-600">Publishes date</label>
								<input type="date" wire:model.defer="published_at"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('published_at')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
							<div class="mb-3 w-full">
								<label for="authors" class="mb-1 text-sm font-normal capitalize text-gray-600">genre</label>
								<input type="text" wire:model.defer="genre"
									class="focus-within: w-full rounded border-2 p-2 font-medium placeholder-gray-400 focus:border-green-600 focus:outline-none">
								@error('genre')
									<span class="text-xs font-normal text-red-600">{{ $message }}</span>
								@enderror
							</div>
						</div>

						<div class="my-auto flex justify-end text-right lg:col-span-2">
							@if ($update)
								<button type="submit"
									class="rounded border-2 border-green-500 bg-green-600 py-2 px-3 text-center text-sm font-medium text-white hover:opacity-80">Update
									historie</button>
							@else
								<button type="submit"
									class="rounded border-2 border-green-500 bg-green-600 py-2 px-3 text-center text-sm font-medium text-white hover:opacity-80">Save
									historie</button>
							@endif
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	@if (\App\Models\Borrower::count() > 0)
		<table class="w-full table-auto border-collapse overflow-hidden rounded border border-white shadow">
			<thead>
				<tr class="px- border bg-green-600 text-left font-normal text-white">
					<th class="py-2 pl-2 font-normal">No</th>
					<th class="py-2 pl-2 font-normal">Borrower's Details</th>
					<th class="py-2 pl-2 font-normal">Book Borrowed</th>
					<th class="py-2 pl-2 font-normal">Status</th>
					<th class="py-2 pl-2 font-normal">Expected R. Date</th>
					<th class="py-2 pl-2 font-normal">Date Returned</th>
					<th class="py-2 pl-2 font-normal">Action</th>
				</tr>
			</thead>

			<tbody>
				@forelse ($histories as $history)
					<tr class="table-striped border even:bg-red-300">
						<td class="p-2">{{ $loop->iteration }}</td>
						<td class="p-2">
							<p>{{ $history->user->name }}</p>
							<p>{{ $history->user->email }}</p>
						</td>
						<td class="p-2 uppercase">
							{{ $history->book->title }}
						</td>
						<td class="p-2 font-medium uppercase"><span
								class="{{ $history->status == 'check-in' ? 'text-red-600' : 'text-green-600' }} rounded bg-gray-100 px-2 py-1">{{ $history->status }}</span>
						</td>
						<td class="p-2">{{ returnDate($history->date_borrowed) }}</td>
						<td class="p-2">
							{{ $history->date_returned ? $history->date_returned->format('d M, Y') : $history->date_borrowed->diffInDays(returnDate($history->date_borrowed)) . 'days left' }}
						</td>
						<td class="items-center justify-start p-2">
							@if ($history->status == 'check-in')
								<button wire:click='checkOut({{ $history->id }})' title="Click to confirm book return"
									data-toggle="tooltip" data-placement="left"
									class="mx-1 rounded-sm bg-blue-600 p-1 px-2 text-white transition duration-500 hover:opacity-80">
									Check-out
								</button>
							@else
								<span title="Click to confirm book return" data-toggle="Book already returned" data-placement="left"
									class="mx-1 cursor-not-allowed rounded-sm p-1 px-2 text-green-600">
									Returned
								</span>
							@endif

						</td>
					</tr>
				@empty
					<h2>No histories for the search terms, try search by borrowers name, book title, author</h2>
				@endforelse

			</tbody>
		</table>
	@else
		<p class="text-lg">No historie, kindly add histories</p>
	@endif
	<div class="flex justify-end p-4">
		<p class="my-2">{{ $histories->links() }}</p>
	</div>
</div>
