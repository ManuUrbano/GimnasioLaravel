<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('CRUD Actividades') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
   

    <div class="max-w-6xl mx-auto sm:px-6  shadow-xl lg:px-8 pt-2 pb-2 b-2">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="text-center w-full">
            <thead class="bg-blue-800 opacity-75 flex text-white w-full">
                <tr class="flex w-full mb-4">

                    <th class="p-4 w-2/12">Nombre</th>
                    <th class="p-4 w-6/12">Descripción</th>
                    <th class="p-4 w-2/12">Aforo</th>
                    <th class="p-4 w-2/12">Operaciones</th>
                </tr>
            </thead>
            <tbody class="bg-grey-light justify-between w-full" style="height: 50vh;">
                @foreach( $actividades as $actividad )
                <tr class="flex w-full mb-4">
                    <td class="p-4 w-2/12">{{ $actividad->nombre  }}</td>
                    <td class="p-4 w-6/12">{{ $actividad->descripcion  }}</td>
                    <td class="p-4 w-2/12">{{ $actividad->aforo  }}</td>

                    <td class="p-4 w-2/12">
                        <a href="{{ route('actividades.edit', $actividad->id)}}" class="btn btn-primary btn-sm"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 mb-2 rounded">Editar</button></a>

                        <form action="{{ url('/actividades/borrar/'.$actividad->id ) }}" method="GET">
                            @csrf
                            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Borrar</button> 
                    </td>
                    </form>


                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $actividades->links() }}

    </div>

</x-app-layout>