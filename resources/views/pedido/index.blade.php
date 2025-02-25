<x-layout>
    <x-slot name="title">
        SiSAdmin
    </x-slot>
    <x-slot name="titleContent">
        Listado de Pedido
    </x-slot>
{{-- <a href="{{ route('menu.create') }}" class="btn btn-primary" role="button">Nuevo Menu</a> --}}


<br>
<br>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nº</th>
        <th scope="col">NombreCliente</th>
        {{-- <th scope="col">FechaPedido</th> --}}
        <th scope="col">Menus</th>
        <th scope="col">Pagado</th>
        <th scope="col">Fecha del Pedido</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($pedidos as $pedido)
        <tr>
            <th scope="row">{{$pedido->id}}</th>
            <td>{{ $pedido->cliente->persona->Nombres }} {{ $pedido->cliente->persona->Apellidos }}</td>
            {{-- <td>{{ $pedido->Fecha }}</td> --}}
            <td>
                <div class="d-flex flex-wrap">
                    @foreach($pedido->menus as $menu)
                        <div class="card m-1" style="width: 150px;">
                            <img src="{{ asset($menu->FotoMenu) }}" class="card-img-top" alt="{{ $menu->Nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu->Nombre }}</h5>
                                <p class="card-text">Cantidad: {{ $menu->pivot->Cantidad }}</p>
                                <p class="card-text">Precio: {{ $menu->Precio }} Bs</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </td>
            <td>{{ $pedido->EstadoPedido }}</td>
            <td>{{ $pedido->Fecha }}</td>
            <td>
                <div class="mb-3">
                    <a href="{{route('pedido.edit',$pedido->id) }}" role="button" class="btn btn-primary"> Editar</a>
                </div>
                <form action="{{route('pedido.destroy',$pedido->id)}}" method="post">
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