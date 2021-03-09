<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Tus inscripciones a las clases') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8  shadow-xl pt-2">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="text-center w-full">
            <thead class="bg-yellow-800 opacity-75  flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">ID</th>
                    <th class="p-4 w-1/4">Actividad</th>
                    <th class="p-4 w-1/4">Día</th>
                    <th class="p-4 w-1/4">Hora de Inicio</th>
                    <th class="p-4 w-1/4">Hora fin</th>
                    <th class="p-4 w-1/4">Operaciones</th>
                </tr>
            </thead>
            
            <tbody class="text-center" style="height: 50vh;">
                @foreach( $datos as $trUser )
                
                <tr class="flex w-full mb-4">
                    @foreach( $datos2 as $tramos )
                    @foreach( $datos3 as $act )

                    <!-- BUCLES PARA CONSEGUIR EL ID DE LA ACTIVIDAD -->
                    @if($trUser->tramo_id == $tramos->id && $tramos->actividad_id == $act->id)
                    <td class="p-4 w-1/4">
                        {{"$tramos->id"}}
                    </td>
                    @endif


                    <!-- BUCLES PARA CONSEGUIR EL NOMBRE DE LA ACTIVIDAD -->
                    @if($trUser->tramo_id == $tramos->id )
                    @if($tramos->actividad_id == $act->id)
                    <td class="p-4 w-1/4">
                        {{"$act->nombre"}}
                    </td>
                    @endif
                    @endif

                    <!-- BUCLES PARA CONSEGUIR EL DIA DE LA ACTIVIDAD -->
                    @if($trUser->tramo_id == $tramos->id)
                    @if($tramos->actividad_id == $act->id)
                    <td class="p-4 w-1/4">
                        {{"$tramos->dia"}}
                    </td>
                    @endif
                    @endif

                    <!-- BUCLES PARA CONSEGUIR EL HORA INICIO DE LA ACTIVIDAD -->
                    @if($trUser->tramo_id == $tramos->id)
                    @if($tramos->actividad_id == $act->id)
                    <td class="p-4 w-1/4">
                        {{"$tramos->hora_inicio"}}
                    </td>
                    @endif
                    @endif


                    <!-- BUCLES PARA CONSEGUIR EL HORA FIN DE LA ACTIVIDAD -->
                    @if($trUser->tramo_id == $tramos->id)
                    @if($tramos->actividad_id == $act->id)
                    <td class="p-4 w-1/4">
                        {{"$tramos->hora_fin"}}
                    </td>

                    <td class="p-4 w-1/4">
                    <div class="content-center">
                        <a href="{{ url('/tramouser/borrar/'. $trUser->id ) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="35px" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg></a>
                    </div>
                    </td>

                    @endif
                    @endif
                    @endforeach
                    @endforeach
                </tr>

                @endforeach


            </tbody>

        </table>
    </div>

</x-app-layout>