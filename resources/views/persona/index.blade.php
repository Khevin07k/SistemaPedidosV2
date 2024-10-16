<x-layout>
    <x-slot name="title">
        Persona
    </x-slot>
    <x-slot name="titleContent">
        Personas
    </x-slot>
<a href="{{route('persona.create')}}" class="btn btn-primary" role="button">Nuevo Empleado</a>
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
        <th scope="col">Email</th>
        <th scope="col">Opciones</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($personas as $persona)
        <tr>
            <th scope="row">{{$persona->id}}</th>
            <td>{{$persona->Nombres}}</td>
            <td>{{$persona->Apellidos}}</td>
            <td>{{$persona->Ci}}</td>
            <td>{{$persona->Telefono}}</td>
            <td>{{$persona->Email}}</td>

            <td>
                <div class="mb-3">
                    <a href="{{route('persona.edit',$persona->id)}}" role="button" class="btn btn-primary"> Editar</a>
                </div>
                <form action="{{route('persona.destroy',$persona->id)}}" method="post">
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
