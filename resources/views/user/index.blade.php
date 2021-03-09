<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Listado de usarios registrados') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8  shadow-xl pb-2 pt-2">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="w-full mt-3 border-separate text-center">
            <thead class="bg-yellow-800 opacity-75 flex text-white w-full  table-auto ">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">Nombre</th>
                    <th class="p-4 w-1/4">Apellidos</th>
                    <th class="p-4 w-1/4">E-Mail</th>
                    <th class="p-4 w-1/4">Usuario</th>
                    <th class="p-4 w-1/4">DNI</th>
                    <th class="p-4 w-1/4">Rol</th>
                    <th class="p-4 w-1/4">Creado en:</th>
                    <th class="p-4 w-1/4">Borrar</th>
                </tr>
            </thead>
            
            <tbody class="bg-grey-light items-center justify-between w-full" style="height: 50vh;">
                @foreach( $users as $user )
                <tr class="flex w-full mb-4">

                    <td class="p-4 w-1/4">{{ $user->nombre  }}</td>
                    <td class="p-4 w-1/4">{{ $user->apellidos  }}</td>
                    <td class="p-4 w-1/4">{{ $user->email  }}</td>
                    <td class="p-4 w-1/4">{{ $user->usuario  }}</td>
                    <td class="p-4 w-1/4">{{ $user->dni  }}</td>
                    <td class="p-4 w-1/4">{{ $user->rol_id }}</td>
                    <td class="p-4 w-1/4">{{ $user->created_at }}</td>

                    <td class="p-4 w-1/4">
                    <a href="{{ route('user.edit', $user->id)}}" class="btn btn-primary btn-sm">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 mb-2 rounded">Editar</button></a>

                        <form action="{{ url('/usuario/borrar/'.$user->id ) }}" method="GET">
                            @csrf
                            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Borrar</button>  
                    </td>
                    </form>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}

    </div>

</x-app-layout>