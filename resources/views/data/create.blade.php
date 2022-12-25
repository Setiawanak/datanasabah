<h1>Create Data Nasabah</h1>

<form action="/data" method="POST">
    @csrf
    Nama Nasabah : <input type"text" name="name"><br>
    No Rekening: <input type"number" name="noRek"><br>
    No KTP: <input type"text" name="noKtp"><br>


    <input type="submit" value="Save">
</form>