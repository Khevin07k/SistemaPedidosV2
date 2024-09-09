<x-layout>
    <x-slot name="title">
        Empleado
    </x-slot>
    <x-slot name="titleContent">
        Editar
    </x-slot>
    <form action="{{route('persona.update',$persona->id)}}" id="Formulario" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Nombre" placeholder="Nombre" value="{{$persona->Nombre}}">
        </div>

        <label for="">Apellidos</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Apellido" value="{{$persona->Apellido}}" placeholder="Apellido">
        </div>

        <label for="">C.I.</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Ci" placeholder="C.I." value="{{$persona->Ci}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-house"></i>
            </span>
            <input type="text" class="form-control" name="Direccion" value="{{$persona->Direccion}}" placeholder="Direccion">
        </div>

        <label for="">Telefono</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono" value="{{$persona->Telefono}}">
        </div>

        <label for="">Correo</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email" placeholder="exaple@gmail.com" value="{{$persona->Email}}">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <br>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
</x-layout>
