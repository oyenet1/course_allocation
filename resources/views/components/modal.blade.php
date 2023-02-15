<div x-cloak
    class="fixed inset-0 left-0 flex flex-col justify-between w-full h-screen p-4 bg-black bg-opacity-75 modal background-blur"
    x-data="{ form: @entangle('form').defer }" x-show="form" style="z-index: 100">
    <div @click.away="form = false"
        {{ $attributes->merge(['class' => 'relative w-full py-6 px-4 overflow-y-auto mx-auto my-auto bg-white rounded-md shadow md:p-4 max-h-[500px] sm:max-w-xs md:max-w-lg']) }}>
        <span @click="form = false"
            class="tt absolute top-0 right-0 m-2 cursor-pointer rounded-full px-[10px] py-0 text-4xl text-gray-500 hover:bg-gray-200">
            &times;
        </span>
        {{ $slot }}
    </div>
</div>
