<x-layout>
    <x-slot name="title">
        SiSAdmin
    </x-slot>
    <x-slot name="titleContent">
        Home
    </x-slot>
    <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Nombre">
        <br>

        <div class="mb-3">
                <img src="" width="70px" alt="" name="AnteriorFotoMenu" id="AnteriorFotoMenu">
        </div>
        <label for="">Foto: </label>
        <input type="file" name="FotoMenu" class="form-control-file" id="FotoMenu" accept="image/*">
        <br>

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion">
        <br>
        <label for="">Precio</label>
        <input type="number" class="form-control" name="Precio">
        <br>
        <input class="btn btn-primary" type="submit" value="Crear">
    </form>
</x-layout>
