<h1>Formulario para un nuevo superheroe</h1>

<form action="{{url('/Superheroe')}}" method="post" enctype="multiplatform/form-data">
@csrf

<label for="nombreReal">Nombre Real</label>   
<input type="text" name="nombreReal">
<br>

<label for="nombreSuper">Nombre de Heroe</label>   
<input type="text" name="nombreSuper">
<br>

<label for="fotoURL">Foto (URL)</label>   
<input type="text" name="fotoURL">
<br>

<label for="extra">Informacion extra</label>   
<input type="text" name="InfoExtra">
<br>
    
<input type="submit" value="Guardar Heroe">
<br>

</form>