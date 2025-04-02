<!DOCTYPE html>
<html>

<x-head title="LOGIN"></x-head>

<body class="bg-gray-100">
    <x-alerts></x-alerts>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">E-mail</label>
                    <input type="email" name="email" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border rounded">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                    Send
                </button>
            </form>
            <div class="mt-4">
                <button type="button"
                    class="w-full bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors"
                    onclick="window.location='{{ url('/') }}'">
                    Back
                </button>
            </div>
        </div>
    </div>
</body>

</html>