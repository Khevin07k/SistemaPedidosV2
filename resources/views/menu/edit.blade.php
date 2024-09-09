<x-layout>
    <x-slot name="title">
        SiSAdmin
    </x-slot>
    <x-slot name="titleContent">
        Home
    </x-slot>
    <form action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        {{--        @method('PUT')--}}
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{$menu->Nombre}}">
        <br>

        <label for="fileInput">Foto: </label>
        <div class="mb-3">
            <img src="{{asset($menu->FotoMenu)}}" width="70px" alt="" name="AnteriorFotoMenu" id="AnteriorFotoMenu">
        </div>
        <input type="file" name="FotoMenu" class="form-control-file" id="FotoMenu" accept="image/*">
        <br>
        {{--<h1>Previsualización de imagen</h1>
        <a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
        <br>
        <!-- El input para seleccionar los archivos, fíjate en su id -->
        <input type="file" id="seleccionArchivos" accept="image/*">
        <br><br>
        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
        <img id="imagenPrevisualizacion">
--}}
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion" value="{{$menu->Descripcion}}">
        <br>
        <label for="">Precio</label>
        <input type="number" class="form-control" name="Precio" value="{{$menu->Precio}}">
        <br>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>



</x-layout>

