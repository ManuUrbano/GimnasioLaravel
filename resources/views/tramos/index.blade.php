<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Listado de clases ACTIVAS') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    

    <div class="max-w-6xl mx-auto sm:px-6  shadow-xl lg:px-8 pt-2 mb-2 pb-2">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="text-center w-full">
            <thead class="bg-yellow-800 opacity-75  flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">ID</th>
                    <th class="p-4 w-1/4">Día</th>
                    <th class="p-4 w-1/4">Hora Inicio</th>
                    <th class="p-4 w-1/4">Hora fin</th>
                    <th class="p-4 w-1/4">Actividad ID</th>
                    <th class="p-4 w-1/4">Operaciones</th>
                </tr>
            </thead>
            
            <tbody class="bg-grey-light items-center justify-between w-full" style="height: 50vh;">
                @foreach( $tramos as $tramo )
                <tr class="flex w-full mb-4">
                    <td class="p-4 w-1/4">{{ $tramo->id  }}</td>
                    <td class="p-4 w-1/4">{{ $tramo->dia  }}</td>
                    <td class="p-4 w-1/4">{{ $tramo->hora_inicio  }}</td>
                    <td class="p-4 w-1/4">{{ $tramo->hora_fin  }}</td>
                    <td class="p-4 w-1/4">{{ $tramo->actividad_id  }}</td>
                    <td class="p-4 w-1/4">
                        <a href="{{ route('tramos.edit', $tramo->id)}}" class="btn btn-primary btn-sm"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 mb-2 rounded">Editar</button></a>

                        <form action="{{ url('/tramos/borrar/'. $tramo->id ) }}" method="GET">
                            @csrf
                            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Borrar</button> 
                    </td>
                    </form>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tramos->links() }}

    </div>

</x-app-layout>