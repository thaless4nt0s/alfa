@section('content')
    <x-form action="{{ route('register') }}" title="Crie sua Conta" method="POST">
        <x-input name="name" label="Nome Completo" />
        <x-input name="email" label="E-mail" type="email" />
        <x-input name="password" label="Senha" type="password" />
        <x-input name="password_confirmation" label="Confirme a Senha" type="password" />
    </x-form>
@endsection