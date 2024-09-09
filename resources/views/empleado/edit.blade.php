<x-layout>
    <x-slot name="title">
        Empleado
    </x-slot>
    <x-slot name="titleContent">
        Editar
    </x-slot>
    <form action="{{route('empleado.update',$empleado->id)}}" id="Formulario" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Nombre" placeholder="Nombre" value="{{$empleado->Nombre}}">
        </div>

        <label for="">Apellidos</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Apellido" value="{{$empleado->Apellido}}" placeholder="Apellido">
        </div>

        <label for="">C.I.</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Ci" placeholder="C.I." value="{{$empleado->Ci}}">
        </div>

        <label for="">Telefono</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono" value="{{$empleado->Telefono}}">
        </div>

        {{--<label for="">Fecha De Contratacion</label>
        <div class="input-group date mb-3 " data-target-input="nearest">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-vcard-fill"></i>
            </span>
            <input type="date" class="form-control datatimepicker-input" name="FechaContratacion" id="Fecha" value="{{$empleado->FechaContratacion}}">
        </div>--}}

        <div class="form-group">
            <label for="">Fecha:</label>
            <div class="input-group date" id="">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-person-vcard-fill"></i>
                </span>
                <input type="text" class="form-control" id="FechaContratacion" name="FechaContratacion" placeholder="Seleccione una fecha" value="{{$empleado->FechaContratacion}}">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

        <label for="">Puesto</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-person-standing"></i>
            </span>
            <input type="text" class="form-control" name="Puesto" placeholder="Cocinero" value="{{$empleado->Puesto}}">
        </div>

        <label for="">Correo</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email" placeholder="exaple@gmail.com" value="{{$empleado->Email}}">
        </div>

        <label for="">Restaurante</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <select class="form-select" aria-label="Default select example" name="restaurante_id">
                <option selected disabled>Selecione un Restaurante</option>
                @foreach($restaurante as $res)
                    @if($empleado->restaurante_id == $res->id)
                        <option value="{{$res->id}}" selected>{{$res->Nombre}}</option>
                    @else
                        <option value="{{$res->id}}">{{$res->Nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br>

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

    <script type="module">

        flatpickr("#FechaContratacion", {
            locale: "es",
            dateFormat: "Y/m/d",
            enableTime: false,
        });
    </script>
</x-layout>
