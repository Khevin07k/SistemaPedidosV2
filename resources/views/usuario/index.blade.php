<x-layout>
    <x-slot name="title">
        Usuario
    </x-slot>
    <x-slot name="titleContent">
        Listado
    </x-slot>
    <a href="{{ route('usuario.create') }}" class="btn btn-primary" role="button">Nuevo Restaurante</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        {{print_r($usuario)}}
        <tbody class="table-group-divider">
        @foreach($usuario as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <div class="mb-3">
                        <a href="{{route('usuario.edit',$user->id)}}" role="button" class="btn btn-primary"> Editar</a>
                    </div>
                    <form action="{{route('usuario.destroy',$user->id)}}" method="post">
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
