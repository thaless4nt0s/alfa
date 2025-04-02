<html>
<x-head title="Include Contact"></x-head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <x-form action="{{ route('contacts.store') }}" title="Include new contact" submitText="Include">
            <x-input name="name" label="Name" type="text" placeholder="Type your name" required />
            <x-input name="email" label="E-mail" type="email" placeholder="Type your email" required />
            <x-input name="contact" label="Contact" type="text" placeholder="Type your contact" pattern="\d{9}"
                title="Deve conter 9 dígitos" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 9)"
                required />
        </x-form>
        <div class="mt-4">
            <button type="button"
                class="w-full bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors"
                onclick="window.location='{{ route('dashboard') }}'">
                Back
            </button>
        </div>
    </div>
</body>

</html>