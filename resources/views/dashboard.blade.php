{{--
// CRIAR UM COMPONENTE PARA MOSTRAR A TABELA
// CRIAR OS BOTOES PARA ATUALIZAR, EDITAR E MOSTRAR INDIVIDUALMENTE
// ATUALIZAR O ITEM UTILIZANDO O MESMO FORM DE CRIAR CONTATOS
// MOSTRAR UM usuário ITEM EM ESPECIFICO
// REMOVER UM USUÁRIO ESPECIFICO --}}
<!DOCTYPE html>
<html lang="pt-BR">
<x-head title="Dashboard"></x-head>


<body class="bg-gray-100">
    <div class="flex items-center justify-between mb-4 p-4">
        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors"
            onclick="window.location='{{ route('contacts.create') }}'">
            Create a new contact
        </button>
    </div>
</body>

</html>