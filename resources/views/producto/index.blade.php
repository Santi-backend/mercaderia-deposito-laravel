Mostrar la lista de productos
<br><br>
<a href="{{url('producto/create')}}">Crear nuevo producto</a>
<br>
<<<<<<< HEAD
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
=======
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
>>>>>>> 07b93e3eb3626f57a7ece87b2e82f48299a91530
@endif

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Marca}}</td>
            <td>{{$producto->Precio}}</td>
            <td>
                <img src="{{asset('storage') . '/' . $producto->Foto}}" alt="Foto del producto: " width="100px"><br><br>
            <td>
                <a href="{{url('/producto/' . $producto->id . '/edit')}}">Editar</a>
                <form action="{{url('/producto/' . $producto->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('Estas seguro de borrar el producto?')">
                </form>  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>