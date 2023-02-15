<div class="flex flex-col w-full gap-8 p-8 mx-auto xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">
    {{-- form --}}
    {{-- modal forms and inputs components --}}
    <x-modal class="lg:max-w-2xl">
        <x-form title="book" :update="$update">
            <x-text-input label="Book Title*" name="title" type="text" wire:model.defer="title" />
            <x-text-input label="Book Cover*" name="cover_image" type="file" wire:model="cover_image" />
            <x-text-input label="List of Authors*" name="authors" type="text" wire:model.defer="authors" />
            <div class="flex items-center justify-between w-full">
                <x-text-input label="Uk price*" name="uk_price" type="text" wire:model.defer="uk_price"
                    class="w-[96%]" />
                <x-text-input label="US Price*" name="us_price" type="text" wire:model.defer="us_price"
                    class="w-[96%]" />
            </div>
            {{-- position --}}
            <div class="w-full h-12 space-y-1">
                <select wire:model.defer="user_id"
                    class='w-full h-full pl-4 space-y-1 font-medium text-gray-500 placeholder-gray-500 capitalize bg-gray-100 border-0 rounded peer tt focus:border-2 focus:border-primary focus:bg-white focus:outline-none'
                    id="">
                    <option value="select" class="text-sm">Owner*</option>
                    @foreach (\App\Models\User::with('roles')->whereRelation('roles', 'name', 'author')->get() as $option)
                        <option class="py-2 capitalize" value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <x-text-input label="ISBN*" name="isbn" type="text" wire:model.defer="isbn" />
            <div class="flex items-center justify-between w-full">
                <x-text-input label="Weight(kg)*" name="weight" type="text" wire:model.defer="weight"
                    class="w-[30%]" />
                <x-text-input label="Book Pages*" name="pages" type="text" wire:model.defer="pages"
                    class="w-[30%]" />
                <div class="flex flex-1 w-full space-x-4">
                    <label for="featured">Featured</label>
                    <label for="yes" class="flex items-center">
                        <input
                            class="mx-2 text-secondary focus:outline-0 focus:border-secondary focus:border-2 focus:ring-2 focus:ring-secondary"
                            type="checkbox" name="featured" id="yes" value="{{ true }}"
                            wire:model="featured">
                    </label>
                </div>
            </div>

            <div>
                <label for="description" class="capitalize">Book description</label>
                <textarea wire:model="description" id="description"
                    class="w-full h-full px-0 font-medium placeholder-gray-500 bg-white border rounded border-primary text-dark focus:outline-none focus:bg-white tt focus:ring-0 focus:border-secondary"
                    cols="30" rows="5"></textarea>
            </div>
        </x-form>
    </x-modal>
    <div class="flex items-center justify-between ">
        <div class="flex items-center space-x-6">
            <h1 class="text-3xl font-semibold capitalize text-primary">books</h1>
            @if ($checked)
                <button class="font-normal btn btn-secondary">Select All {{ count($checked) }}</button>
                <x-button.bulk-delete />
            @else
                <x-button.add name="books" />
            @endif

        </div>

        {{-- right side --}}
        <div class="flex items-center space-x-6">
            <x-search name="books" />
        </div>
    </div>

    {{-- tables --}}
    <div class="w-full px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-sm">
        @if (\App\Models\Book::count() > 0)
            <table class="w-full space-y-2 overflow-x-auto whitespace-nowrap">
                <thead class="w-full pb-4 text-xl border-b">
                    <tr class="font-medium">
                        <th class="p-2 whitespace-nowrap"></th>
                        <th class="p-2 text-xl font-medium text-left">Image</th>
                        <th class="p-2 text-xl font-medium text-left">Title</th>
                        <th class="p-2 text-xl font-medium text-left">Owner</th>
                        <th class="p-2 text-xl font-medium text-left">Authors</th>
                        <th class="p-2 text-xl font-medium text-left">Uk Price</th>
                        <th class="p-2 text-xl font-medium text-left">Us Price</th>
                        <th class="p-2 text-xl font-medium text-left">Total Sell</th>
                        <th class="p-2"></th>
                    </tr>
                </thead>
                <tbody class="w-full overflow-x-auto break-normal">
                    @forelse ($books as $book)
                        <tr class="even:bg-primary-light">
                            <td class="p-2 whitespace-nowrap">
                                <input type="checkbox" wire:model="checked" id="" value="{{ $book->id }}"
                                    class="block rounded whitespace-nowrap text-primary focus:outline-none focus:ring-primary">
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <img src="{{ asset('/storage/' . $book->cover_image) }}"
                                    alt="{{ $book->title . 'Adonis abbey' }}" class="w-20 rounded">

                            </td>
                            <td class="p-2 whitespace-nowrap">
                                {{ $book->title }}
                            </td>
                            <td class="p-2 capitalize">
                                {{ $book->user->name ?? '' }}
                            </td>
                            <td class="p-2 capitalize">
                                <span class=""> {{ $book->authors }}</span>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                {{ $book->uk_price }}
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                {{ $book->us_price }}
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex space-x-2 item-center">
                                    <span wire:click="edit({{ $book->id }})"
                                        class="w-8 h-8 p-2 text-blue-600 border border-blue-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="my-auto bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </span>
                                    <span wire:click="confirmDelete({{ $book->id }})"
                                        class="w-8 h-8 p-2 text-red-600 border border-red-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <h1 class="text-2xl font-bold">No records found in the database</h1>
                    @endforelse
                </tbody>
            </table>

            {{-- pagnation components --}}
            <div class="mt-4">
                <x-per-page>
                    {{ $books->links() }}
                </x-per-page>
            </div>
        @else
            <div class="p-8 text-center">
                <p class="text-xl font-medium">No book yet, add books to the system</p>
            </div>
        @endif
    </div>
</div>
