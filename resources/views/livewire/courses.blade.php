<div class="flex flex-col w-full mx-auto gap-8 p-8 xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">
  {{-- form --}}
  {{-- modal forms and inputs components --}}
  <x-modal class="max-w-lg">
    <x-form title="course" :update="$update">
      <x-text-input label="Course Title*" name="title" type="text" wire:model.defer="title" />
      <div class="flex items-center justify-between w-full">
        <x-text-input label="Course code*" name="code" type="text" wire:model.defer="code" class="w-[96%]" />
        <x-text-input label="Course Unit*" name="unit" type="text" wire:model.defer="unit" class="w-[96%]" />
      </div>
      <div class="w-full h-12 space-y-1">
        <select wire:model.defer="level_id" class='w-full h-full pl-4 space-y-1 font-medium text-gray-500 placeholder-gray-500 capitalize bg-gray-100 border-0 rounded peer tt focus:border-2 focus:border-primary focus:bg-white focus:outline-none' id="">
          <option value="select" class="text-sm">Level*</option>
          @foreach (\App\Models\Level::select(['id', 'name'])->get() as $option)
          <option class="py-2 capitalize" value="{{ $option->id }}">{{ $option->name }}</option>
          @endforeach
        </select>
        @error('level_id')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
      </div>
    </x-form>
  </x-modal>
  {{-- buttons --}}
  <div class="flex items-center justify-between ">
    <div class="flex items-center space-x-6">
      <h1 class="text-3xl font-semibold capitalize text-primary">courses</h1>
      @if ($checked)
      <button class="font-normal btn btn-secondary">Select All {{ count($checked) }}</button>
      <x-button.bulk-delete />
      @else
      <x-button.add name="courses" />
      @endif

    </div>

    {{-- right side --}}
    <div class="flex items-center space-x-6">
      <x-search name="courses" />
    </div>
  </div>

  {{-- tables --}}
  <div class="w-full px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-sm">
    @if (\App\Models\Course::count() > 1)
    <table class="w-full space-y-2 overflow-x-auto whitespace-nowrap">
      <thead class="w-full pb-4 text-xl border-b">
        <tr class="font-medium">
          <th class="p-2 whitespace-nowrap"></th>
          <th class="p-2 text-xl font-medium text-left">Title</th>
          <th class="p-2 text-xl font-medium text-left">Code</th>
          <th class="p-2 text-xl font-medium text-left">Unit</th>
          <th class="p-2 text-xl font-medium text-left">Level</th>
          <th class="p-2"></th>
        </tr>
      </thead>
      <tbody class="w-full overflow-x-auto break-normal">
        @forelse ($courses as $course)
        <tr class="">
          <td class="p-2 whitespace-nowrap">
            <input type="checkbox" wire:model="checked" id="" value="{{ $course->id }}" class="block rounded whitespace-nowrap text-primary focus:outline-none focus:ring-primary">
          </td>
          <td class="p-2 whitespace-nowrap">
            <p class="">{{ $course->title }}</p>
          </td>
          <td class="p-2 whitespace-nowrap">
            {{ $course->code }}
          </td>
          <td class="p-2 whitespace-nowrap">
            {{ $course->unit }}
          </td>
          <td class="p-2 whitespace-nowrap">
            {{ $course->level->name }}
          </td>
          <td class="p-2 whitespace-nowrap">
            <div class="flex space-x-2 item-center">
              <span wire:click="edit({{ $course->id }})" class="w-8 h-8 p-2 text-blue-600 border border-blue-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-auto bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
              </span>
              <span wire:click="confirmDelete({{ $course->id }})" class="w-8 h-8 p-2 text-red-600 border border-red-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
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
        {{ $courses->links() }}
      </x-per-page>
    </div>
    @else
    <div class="p-8 text-center">
      <p class="font-medium text-xl">No course yet, add courses to the system</p>
    </div>
    @endif
  </div>
</div>
