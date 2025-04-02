<html>
<x-head title="Update Contact"></x-head>
<x-alerts />
<div class="min-h-screen flex items-center justify-center p-4">
    <x-form action="{{ route('contacts.update', $contact->id) }}" method="POST" title="Edit Contact"
        submitText="Update">
        @method('PUT')
        <x-input name="name" label="Name" type="text" placeholder="Type your name" value="{{ $contact->name }}"
            required />
        <x-input name="email" label="E-mail" type="email" placeholder="Type your email" value="{{ $contact->email }}"
            required />
        <x-input name="contact" label="Contact" type="text" placeholder="Type your contact" pattern="\d{9}"
            title="Deve conter 9 dígitos" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 9)"
            value="{{ $contact->contact }}" required />

        <div class="mt-4">
            <button type="button"
                class="w-full bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors"
                onclick="window.location='{{ route('dashboard') }}'">
                Back
            </button>
        </div>
    </x-form>
</div>

</html>