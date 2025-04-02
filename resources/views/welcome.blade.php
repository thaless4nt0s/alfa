<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alfasoft</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <x-alerts></x-alerts>
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Logo/Cabeçalho -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600">Alfasoft</h1>
            </div>

            <!-- Formulário de Cadastro (Componente Reutilizado) -->
            <x-form action="{{ route('register') }}" submitText="Create Account"
                class="bg-white p-6 rounded-lg shadow-md" method="POST">
                <x-input name="name" label="Full Name" autofocus type="text" required />
                <x-input name="email" label="E-mail" type="email" required />
                <x-input name="password" label="Password" type="password" required />
                <x-input name="password_confirmation" label="Confirm Password" type="password" required />
                <x-input name="contact" label="Contact" type="text" pattern="\d{9}" title="" maxlength="9"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')" required />
            </x-form>

            <!-- Link para Login -->
            <div class="mt-4 text-center">
                <p class="text-gray-600">
                    Already have an account ?
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">login</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>