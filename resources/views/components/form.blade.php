<form action="{{ $action }}" method="{{ $method ?? 'POST' }}" {{ $attributes->merge(['class' => 'bg-white p-6 rounded shadow-md']) }}>
    @csrf
    @if(isset($title))
        <h2 class="text-2xl font-bold mb-6">{{ $title }}</h2>
    @endif

    {{ $slot }}

    @if(empty($viewOnly)) <!-- Só mostra o botão se não for visualização -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors">
            {{ $submitText ?? 'Enviar' }}
        </button>
    @endif
</form>