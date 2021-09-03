<div class="table-responsive">
    <table class="table data-table table-stripped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome da Conta</th>
                <th>Categoria</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($expenses as $e)
                <tr class="text-danger">
                    <td class="text-nowrap">{{ $e->due_date }}</td>
                    <td class="text-nowrap">{{$e->name}}</td>
                    <td class="text-nowrap">{{$e->categories->name}}</td>
                    <td class="text-nowrap">{{$e->price}}</td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
