<x-layout>
    <x-slot name="title">
        Restaurante
    </x-slot>
    <x-slot name="titleContent">
        Reporte
    </x-slot>

    <form action="{{route('restaurante.store')}}" method="POST">
        @csrf
        <label>Propietario</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Propietario">
        </div>

        <label>Reataurante</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-utensils"></i>
            </span>
            <input type="text" class="form-control" name="Nombre">
        </div>

        <label>Dirrecion</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-house-fill"></i>
            </span>
            <input type="text" class="form-control" name="Direccion">
        </div>

        <label>Telefono</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono">
        </div>

        <label>Nit</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Nit">
        </div>

        <label>Correo</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email">
        </div>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
</x-layout>
