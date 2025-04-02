<div class="overflow-x-auto p-4">
    <p class="text-xl font-semibold mb-4 text-gray-800 text-center">{{$tableTitle}}</p>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
        @if(isset($headers) && is_array($headers))
            <thead>
                <tr class="bg-gray-200">
                    @foreach($headers as $header)
                        <th class="py-3 px-4 text-gray-700 font-semibold text-left">{{ ucfirst($header) }}</th>
                    @endforeach
                </tr>
            </thead>
        @endif
        <tbody>
            @foreach($rows as $row)
                <tr class="border-b hover:bg-gray-100 transition-colors">
                    <td class="py-3 px-4 text-gray-600">{{ $row->id }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $row->name }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $row->email }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $row->contact }}</td>
                    <td class="py-3 px-4 text-gray-600 flex gap-2 justify-center">
                        <a href="{{ route('contacts.show', $row->id) }}" class="text-blue-500 hover:text-blue-700">👁️</a>
                        <a href="{{ route('contacts.edit', $row->id) }}" class="text-green-500 hover:text-green-700">✏️</a>
                        <form action="{{ route('contacts.destroy', $row->id) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja remover?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">🗑️</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>