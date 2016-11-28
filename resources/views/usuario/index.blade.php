<html>
<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $item)
        <tr>
            <td>{{ $item->UsuarioId }}</td>
            <td>{{ $item->UsuarioNombre }}</td>
            <td>{{ $item->UsuarioApellido }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>