<!-- resources/views/components/form.blade.php -->
<form action="{{ $action }}" method="{{ $method ?? 'POST' }}" {{ $attributes->merge(['class' => 'bg-white p-6 rounded shadow-md']) }}>
    @csrf
    @if(isset($title))
        <h2 class="text-2xl font-bold mb-6">{{ $title }}</h2>
    @endif

    {{ $slot }} <!-- Local onde os inputs serão injetados -->

    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded">
        {{ $submitText ?? 'Enviar' }}
    </button>
</form>