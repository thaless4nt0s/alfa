<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 mb-1">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" @if($required)
        required @endif class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
    @error($name)
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
