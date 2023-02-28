<div class="w-full gap-4 mx-auto mt-4">
    <div class="w-full">
        <h4 class="mx-auto text-2xl font-bold text-center capitalize lg:text-3xl">
            @if ($update)
                Edit {{ $title }} details
            @else
                {{ $header ?? 'Add' }} {{ $title }}
            @endif
        </h4>
    </div>

    <!-- Modal body -->
    <form wire:submit.prevent=@if ($update) 'update' @else 'save' @endif
        class="flex flex-col w-full gap-6 mx-auto my-4 overflow-y-auto max-h-max min-h-fit">
        {{ $slot }}

        @if ($update)
            <button wire:loading.attr="disabled"
                class="w-[200px] mx-auto btn submit-primary capitalize tt submit-primary font-normal"
                type="submit">Update
                {{ $title }}
                <img wire:loading.delay wire:target='update' src="/img/spin-white.svg" alt="" class="w-11 h-11">
            </button>
        @else
            <button wire:loading.attr="disabled"
                class="w-[200px] mx-auto submit-primary py-2 capitalize tt submit-primary font-normal"
                type="submit">{{ $header ?? 'add' }}
                {{ $title }}
                <img wire:loading.delay wire:target='save' src="/img/spin-white.svg" alt="" class="w-11 h-11">
            </button>
        @endif
    </form>
</div>
