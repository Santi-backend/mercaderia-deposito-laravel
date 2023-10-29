Formulario de edicion de los productos

<form action="{{url('/producto/' . $producto->id)}}" method="post" enctype="multipart/form-data">
    {{method_field('PUT')}}
    @include('producto.form')
    </form>