<h1>List Data Nasabah</h1>

<style>
table, th, td {
  border:1px solid black;
  margin: 20px 0;
}
</style>

<Table>
    <thead>
        <tr>
            <th>ID Nasabah</th>
            <th>Nama Nasabah</th>
            <th>Nomer Rekening</th>
            <th>No KTP</th>
            <th>Edit Data</th>
            <th>Delete Data</th>
        </tr>
    </thead>
    <tbody></tbody>
        @foreach ($data as $Data)
        <tr>
            <td>{{$Data->id}}</td>
            <td>{{$Data->name}}</td>
            <td>{{$Data->noRek}}</td>
            <td>{{$Data->noKtp}}</td>
            <td>
                <a href="/data/{{$Data->id}}/edit">Edit</a>
                
            </td>
            <td>
                <form action="/data/{{$Data->  id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach


    </tbody> 


    <a href="/data/create">Create Data</a>
</Table>