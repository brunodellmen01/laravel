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
            @forelse ($incomes as $i)
                <tr class="text-success">
                    <td class="text-nowrap">{{ $i->due_date }}</td>
                    <td class="text-nowrap">{{$i->name}}</td>
                    <td class="text-nowrap">{{$i->categories->name}}</td>
                    <td class="text-nowrap">{{$i->price}}</td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
