<x-layout>
    <x-slot name="title">
        Empleado
    </x-slot>
    <x-slot name="titleContent">
        Reporte
    </x-slot>
<a href="{{route('empleado.create')}}" class="btn btn-primary" role="button">Nuevo Empleado</a>
<br>
<br>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nº</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Ci</th>
        <th scope="col">Telefono</th>
        <th scope="col">Fecha De Contratacion</th>
        <th scope="col">Puesto</th>
        <th scope="col">Email</th>
        <th scope="col">Restaurante</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($empleados as $empleado)
        <tr>
            <th scope="row">{{$empleado->id}}</th>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Ci}}</td>
            <td>{{$empleado->Telefono}}</td>
            <td>{{$empleado->FechaContratacion}}</td>
            <td>{{$empleado->Puesto}}</td>
            <td>{{$empleado->Email}}</td>
            <td>{{$empleado->restaurante->Nombre}}</td>

            <td>
                <div class="mb-3">
                    <a href="{{route('empleado.edit',$empleado->id)}}" role="button" class="btn btn-primary"> Editar</a>
                </div>
                <form action="{{route('empleado.destroy',$empleado->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</x-layout>
