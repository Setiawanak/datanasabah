<h1>Edit Data Nasabah</h1>

<form action="/data/{{$Data->id}}" method="POST">
    @method('PUT')
    @csrf
    Nama Nasabah : <input type"text" name="name" value="{{$Data->name}}"><br>
    No Rekening: <input type"number" name="noRek" value="{{$Data->noRek}}"><br>
    No KTP: <input type"text" name="noKtp" value="{{$Data->noKtp}}"><br>


    <input type="submit" value="Save">
</form>