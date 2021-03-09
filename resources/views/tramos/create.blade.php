<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Editar perfil') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8  pt-2">

        
        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="GET" action="{{ route('tramos.store') }}">
            @csrf

            <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg flex flex-wrap justify-items-center">

                <!-- Día -->
                <div class="mr-2">
                    <x-label for="dia" :value="__('Día')" />

                    <select name="dia">
                        <option value="Lunes" selected>Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sabado">Sabado</option>
                    </select>
                </div>

                <!-- Hora Inicio -->
                <div class="mx-2">
                    <x-label for="hora_inicio" :value="__('Hora Inicio')" />

                    <select name="hora_inicio">
                        <option value="09:00:00" selected>09:00:00</option>
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="18:00:00">19:00:00</option>
                        <option value="18:00:00">20:00:00</option>
                        <option value="18:00:00">21:00:00</option>
                        <option value="18:00:00">22:00:00</option>
                        <option value="18:00:00">23:00:00</option>
                    </select>
                </div>

                <!-- Hora fin -->
                <div class="mx-2">
                    <x-label for="hora_fin" :value="__('Hora fin')" />

                    <select name="hora_fin">
                        <option value="10:00:00" selected>10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                        <option value="12:00:00">12:00:00</option>
                        <option value="13:00:00">13:00:00</option>
                        <option value="14:00:00">14:00:00</option>
                        <option value="15:00:00">15:00:00</option>
                        <option value="16:00:00">16:00:00</option>
                        <option value="17:00:00">17:00:00</option>
                        <option value="18:00:00">18:00:00</option>
                        <option value="18:00:00">19:00:00</option>
                        <option value="18:00:00">20:00:00</option>
                        <option value="18:00:00">21:00:00</option>
                        <option value="18:00:00">22:00:00</option>
                        <option value="18:00:00">23:00:00</option>
                    </select>
                </div>


                <div >
                    <x-label for="actividad_id" :value="__('Actividad')" />

                    <select class="form-control" name="actividad_id">

                        @foreach ($actividades as $actividad)
                        <option value="{{ $actividad->id }}">
                            {{ $actividad->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="flex-col">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 mt-6 ml-2 rounded">Guardar</button>
                </div>

            </div>

            

        </form>

    </div>

</x-app-layout>