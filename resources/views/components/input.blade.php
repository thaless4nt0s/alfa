<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-bold mb-2">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value ?? '' }}"
        placeholder="{{ $placeholder ?? '' }}" {{ $attributes->merge(['class' => 'w-full p-2 border rounded']) }}
        @if(!empty($disabled)) disabled @endif>
</div>