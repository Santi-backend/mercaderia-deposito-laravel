@csrf 
<label for="Nombre"> Nombre: </label>
<input type="text" name="Nombre" id="Nombre" value="{{isset($producto->Nombre) ? $producto->Nombre : '' }} ">
<br>
<label for="Marca"> Marca: </label>
<input type="text" name="Marca" id="Marca" value="{{isset($producto->Marca) ? $producto->Marca : '' }}">
<br>
<label for="Precio"> Precio: </label>
<input type="number" name="Precio" id="Precio" value="{{isset($producto->Precio) ? $producto->Precio : '' }}">
<br>
<label for="Foto"> Foto: </label>
@if (isset($producto->Foto))
    <img src="/storage/{{$producto->Foto}}" alt="" width="100px"><br><br>

@endif
<input type="file" name="Foto" id="Foto">
<br> 

<input type="submit" value="{{$accion}} producto">

<br>
<a href="{{url('producto')}}">Regresar</a>