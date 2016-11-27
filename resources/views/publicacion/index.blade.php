<html>
<body>
<table>
    <thead>
    <tr>
        <th>Titulo</th>
        <th>Precio Noche</th>
        <th>Nro Habitaciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($publicaciones as $item)
        <tr>
            <td>{{ $item->PublicacionTitulo}}</td>
            <td>{{ $item->PublicacionPrecioNoche }}</td>
            <td>{{ $item->PublicacionNroDormitorios }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>