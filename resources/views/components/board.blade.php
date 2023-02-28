<div class="w-full rounded bg-white px-6 md:px-8 py-8 shadow-sm relative overflow-hidden">
    <div class="flex justify-between w-full">
        <div class="">
            <p class="text-lg xl:text-xl  capitalize text-gray-400">{{ $name }}</p>
            <h1 class="text-xl lg:text-2xl  text-primary-dark font-medium font-poppin">
                @if ($money)
                    <span>&pound</span>
                @endif
                {{ $digit }}
            </h1>
        </div>
        <div class="text-{{ $color }} rounded p-2 ">
            <span class="bg-{{ $color }}">
                {{ $slot }}
            </span>
        </div>
    </div>
    {{-- <div class="p-3 left-0 absolute bottom-0 w-full bg-{{ $color }}"></div> --}}
</div>
