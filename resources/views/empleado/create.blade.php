<x-layout>
    <x-slot name="title">
        Empleado
    </x-slot>
    <x-slot name="titleContent">
        Crear
    </x-slot>
    <form action="{{route('empleado.store')}}" id="Formulario" method="POST" class="row g-3">
        @csrf


        <div class="col-md-9">
            <div class="input-group">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
                <input type="text" class="form-control" name="Nombres" placeholder="Nombre">
                <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-circle"></i>
            </span>
                <input type="text" class="form-control" name="Apellidos"
                       placeholder="Apellido">
            </div>
        </div>
        <div class="col-md-3" >
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-person-workspace"></i>
            </span>
                <input type="text" class="form-control" name="Puesto" placeholder="Nombre del puesto">
            </div>
        </div>

        <div class="col-md-5">
            <label for="">Direccion</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-house"></i>
            </span>
                <input type="text" class="form-control" name="Direccion" placeholder="Dirrecion de su casa">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Fecha:</label>
                <div class="input-group date" id="">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-person-vcard-fill"></i>
                </span>
                    <input type="text" class="form-control" id="FechaContratacion" name="FechaContratacion"
                           placeholder="Seleccione una fecha">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="">Salario</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-currency-dollar"></i>
            </span>
                <input type="number" class="form-control" name="Salario" placeholder="Pago Mensual">
            </div>
        </div>

        <div class="col-md-6">
            <label for="">Restaurante</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
                <select class="form-select" aria-label="Default select example" name="restaurante_id">
                    <option selected disabled>Selecione un Restaurante</option>
                    @foreach($restaurante as $res)
                        <option value="{{$res->id}}">{{$res->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <label for="">Telefono</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
                <input type="number" class="form-control" name="Telefono" placeholder="Nº Telefono">
            </div>
        </div>

        <div class="col-md-2">
            <label for="">C.I.</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
                <input type="text" class="form-control" name="Ci" placeholder="C.I.">
            </div>
        </div>

        <div class="col-md-6">
            <label for="">Correo</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
                <input type="email" class="form-control" name="Email" placeholder="exaple@gmail.com">
            </div>
        </div>
        <div class="col-md-6">
            <label for="">Constraseña</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-lock-fill"></i>
            </span>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
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
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn btn-primary" value="Crear">
        </div>
    </form>
    <script type="module">

        flatpickr("#FechaContratacion", {
            locale: "es",
            dateFormat: "Y/m/d",
            enableTime: false,
        });
    </script>
</x-layout>
