<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
    </tr>
    @foreach($data as $mhs)
    <tr>
        <td>{{ $mhs->id }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->email }}</td>
    </tr>
    @endforeach
</table>