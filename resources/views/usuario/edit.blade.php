<x-layout>
    <x-slot name="title">
        Usuario
    </x-slot>
    <x-slot name="titleContent">
        Listado
    </x-slot>
    <form action="{{route('usuario.update',$user->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label>Nombre Completo</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>

        <label>Correo</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-envelope"></i>
            </span>
            <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>

        <label>Contraseña</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>
            <input type="password" class="form-control" name="password">
        </div>

        <label for="password_confirmation">Confirmar contraseña</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
</x-layout>
