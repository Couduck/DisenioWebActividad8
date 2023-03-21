Vista para mostrar empleados

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre Real</th>
            <th>Nombre de Heroe</th>
            <th>Foto (URL)</th>
            <th>Informacion Extra</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($superheroes as $superheroe)
        <tr>
            <td>{{$superheroe->id}}</td>
            <td>{{$superheroe->NombreReal}}</td>
            <td>{{$superheroe->NombreSuper}}</td>
            <td>{{$superheroe->FotoURL}}</td>
            <td>{{$superheroe->InfoExtra}}</td>
            <td>Modificar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>