<html>
<x-head title="View Contact"></x-head>
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-6 rounded shadow-md">
        <x-form title="View Contact" viewOnly="true" action='dashboard'>
            <x-input name="name" label="Name" type="text" value="{{ $contact->name }}" disabled />
            <x-input name="email" label="E-mail" type="email" value="{{ $contact->email }}" disabled />
            <x-input name="contact" label="Contact" type="text" value="{{ $contact->contact }}" disabled />
        </x-form>
        <div class="mt-4 text-center">
            <button type="button"
                class="w-full bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors"
                onclick="window.location='{{ route('dashboard') }}'">
                Back
            </button>
        </div>
    </div>
</div>

</html>