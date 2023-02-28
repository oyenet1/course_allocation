<div class="w-full">
    <label for="{{ $name }}" class="text-sm capitalize m-0 p-0">{{ $label }}</label>
    <input
        {{ $attributes->merge(['class' => 'w-full border-0 border-b-2 border-primary bg-white placeholder-gray-500 text-dark px-0 h-full focus:outline-none font-medium focus:bg-white tt focus:ring-0 focus:border-secondary', 'type' => $type, 'name' => $name, 'id' => $name]) }} />
    @error($name)
        <span class="mb-2 text-red-600 text-sm pt-2">{{ $message }}</span>
    @enderror
</div>
