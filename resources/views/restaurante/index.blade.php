<x-layout>
    <x-slot name="title">
        Restaurante
    </x-slot>
    <x-slot name="titleContent">
        Reporte
    </x-slot>
    <a href="{{ route('restaurante.create') }}" class="btn btn-primary" role="button">Nuevo Restaurante</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Propietario</th>
            <th scope="col">Restaurante</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Nit</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($restaurantes as $restaurante)
            <tr>
                <th scope="row">{{$restaurante->id}}</th>
                <td>{{$restaurante->Propietario}}</td>
                <td>{{$restaurante->Nombre}}</td>
                <td>{{$restaurante->Direccion}}</td>
                <td>{{$restaurante->Telefono}}</td>
                <td>{{$restaurante->Nit}}</td>
                <td>{{$restaurante->Email}}</td>
                <td>
                    <div class="mb-3">
                        <a href="{{route('restaurante.edit',$restaurante->id)}}" role="button" class="btn btn-primary"> Editar</a>
                    </div>
                    <form action="{{route('restaurante.destroy',$restaurante->id)}}" method="post">
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
