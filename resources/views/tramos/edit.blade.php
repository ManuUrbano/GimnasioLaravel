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
    <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <form method="POST" action="{{ route('tramos.update', $tramos->id) }}">
        @csrf
        <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <!-- Día -->
            <div>
                <x-label for="dia" :value="__('Día')" />

                <select name="dia">
                    <option value="Lunes" {{ ($tramos->dia) == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                    <option value="Martes" {{ ($tramos->dia) == 'Martes' ? 'selected' : '' }}>Martes</option>
                    <option value="Miercoles" {{ ($tramos->dia) == 'Miercoles' ? 'selected' : '' }}>Miercoles</option>
                    <option value="Jueves" {{ ($tramos->dia) == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                    <option value="Viernes" {{ ($tramos->dia) == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                    <option value="Sabado" {{ ($tramos->dia) == 'Sabado' ? 'selected' : '' }}>Sabado</option>
                </select>
            </div>

            <!-- Hora Inicio -->
            <div>
                <x-label for="hora_inicio" :value="__('Hora Inicio')" />

                <select name="hora_inicio">
                    <option value="09:00" {{ ($tramos->hora_inicio) == '09:00:00' ? 'selected' : '' }}>09:00:00</option>
                    <option value="10:00" {{ ($tramos->hora_inicio) == '10:00:00' ? 'selected' : '' }}>10:00:00</option>
                    <option value="11:00" {{ ($tramos->hora_inicio) == '11:00:00' ? 'selected' : '' }}>11:00:00</option>
                    <option value="12:00" {{ ($tramos->hora_inicio) == '12:00:00' ? 'selected' : '' }}>12:00:00</option>
                    <option value="13:00" {{ ($tramos->hora_inicio) == '13:00:00' ? 'selected' : '' }}>13:00:00</option>
                    <option value="14:00" {{ ($tramos->hora_inicio) == '14:00:00' ? 'selected' : '' }}>14:00:00</option>
                    <option value="15:00" {{ ($tramos->hora_inicio) == '15:00:00' ? 'selected' : '' }}>15:00:00</option>
                    <option value="16:00" {{ ($tramos->hora_inicio) == '16:00:00' ? 'selected' : '' }}>16:00:00</option>
                    <option value="17:00" {{ ($tramos->hora_inicio) == '17:00:00' ? 'selected' : '' }}>17:00:00</option>
                    <option value="18:00" {{ ($tramos->hora_inicio) == '18:00:00' ? 'selected' : '' }}>18:00:00</option>
                </select>
            </div>

            <!-- Hora fin -->
            <div>
                <x-label for="hora_fin" :value="__('Hora fin')" />

                <select name="hora_fin">
                    <option value="09:00" {{ ($tramos->hora_fin) == '09:00:00' ? 'selected' : '' }}>09:00:00</option>
                    <option value="10:00" {{ ($tramos->hora_fin) == '10:00:00' ? 'selected' : '' }}>10:00:00</option>
                    <option value="11:00" {{ ($tramos->hora_fin) == '11:00:00' ? 'selected' : '' }}>11:00:00</option>
                    <option value="12:00" {{ ($tramos->hora_fin) == '12:00:00' ? 'selected' : '' }}>12:00:00</option>
                    <option value="13:00" {{ ($tramos->hora_fin) == '13:00:00' ? 'selected' : '' }}>13:00:00</option>
                    <option value="14:00" {{ ($tramos->hora_fin) == '14:00:00' ? 'selected' : '' }}>14:00:00</option>
                    <option value="15:00" {{ ($tramos->hora_fin) == '15:00:00' ? 'selected' : '' }}>15:00:00</option>
                    <option value="16:00" {{ ($tramos->hora_fin) == '16:00:00' ? 'selected' : '' }}>16:00:00</option>
                    <option value="17:00" {{ ($tramos->hora_fin) == '17:00:00' ? 'selected' : '' }}>17:00:00</option>
                    <option value="18:00" {{ ($tramos->hora_fin) == '18:00:00' ? 'selected' : '' }}>18:00:00</option>
                </select>
            </div>


            <div>
                <x-label for="actividad_id" :value="__('Actividad')" />

                <select class="form-control" name="actividad_id">
                    @foreach ($actividades as $actividad)
                    <option value="{{ $actividad->id }}">
                        {{ $actividad->nombre }}
                    </option>
                    @endforeach
                </select>
            </div>



            <x-button class="ml-4 mt-3 float-right">
                {{ __('Guardar cambios') }}
            </x-button>
        </div>

    </form>

</x-app-layout>