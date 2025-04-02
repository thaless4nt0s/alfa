<button type="{{ $type ?? 'button' }}"
    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors {{ $attributes->get('class') }}"
    {{ $attributes }}>
    {{ $slot }} <!-- Texto do botão -->
</button>
