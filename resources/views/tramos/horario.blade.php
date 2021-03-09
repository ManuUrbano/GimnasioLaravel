<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Horario para el registro de clases') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 shadow-xl  pt-4">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="w-full mt-3 border-separate" >
            <thead class="bg-yellow-800 opacity-75 flex text-white w-full  table-auto text-center">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">Horas</th>
                    <th class="p-4 w-1/4">Lunes</th>
                    <th class="p-4 w-1/4">Martes</th>
                    <th class="p-4 w-1/4">Miercoles</th>
                    <th class="p-4 w-1/4">Jueves</th>
                    <th class="p-4 w-1/4">Viernes</th>
                    <th class="p-4 w-1/4">Sabado</th>
                </tr>
            </thead>

            <tbody class="bg-grey-light items-center justify-between w-full text-center" style="height: 50vh;">
                @foreach( $horario as $hora )

                <tr class="flex w-full mb-4">
                    <td class="p-4 w-1/4">{{ $hora }}</td>

                    <td class="p-4 w-1/4 ">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Lunes" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                            @csrf
                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  

                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>


                    <td class="p-4 w-1/4">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Martes" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                            @csrf

                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  

                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>

                    <td class="p-4 w-1/4">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Miercoles" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                            @csrf

                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  
                                        
                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>

                    <td class="p-4 w-1/4">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Jueves" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                            @csrf

                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  

                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>

                    <td class="p-4 w-1/4">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Viernes" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                        @csrf

                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  
                                       
                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>

                    <td class="p-4 w-1/4">
                        @foreach( $tramos as $tra )
                            @if($tra->dia == "Sabado" && $tra->hora_inicio == $hora)

                                <!-- Foreach para recojer la tabla actividades y poder compararla con tramos -->
                                @foreach($actividades as $act)
                                    <!-- IF para sacar el nombre de la actividad a imprimir -->
                                    @if($tra->actividad_id == $act->id)

                                        <!-- Formulario para enviar los datos al controlador de tramo-user y hacer el metodo store para guardar -->
                                        <form method="GET" action="{{ route('tramouser.store') }}">
                                        @csrf

                                            <x-input name="tramo_id"  type="hidden" value="{{ $tra->id }}" />
                                            <x-input name="usuario_id" type="hidden" value="{{ Auth::user()->id }}" />
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{$act->nombre }}</button>  

                                        </form>

                                    @endif
                            @endforeach

                            @endif
                        @endforeach
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

</x-app-layout>