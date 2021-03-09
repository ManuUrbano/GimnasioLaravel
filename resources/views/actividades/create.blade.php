<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('Crear nueva clase') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pt-2">
        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->    
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="GET" action="{{ route('actividades.store') }}">
            @csrf

            <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <!-- Usuario -->
                <div>
                    <x-label for="nombre" :value="__('Nombre')" />

                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="descripcion" :value="__('Descripcion')" />

                    <x-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" required />
                </div>

                <!-- DNI -->
                <div class="mt-4">
                    <x-label for="aforo" :value="__('Aforo')" />

                    <x-input id="aforo" class="block mt-1 w-full" type="text" name="aforo" required />
                </div>



                <input class="mt-4" type="submit" value="Guardar Actividad">
                
            </div>

        </form>

    </div>

</x-app-layout>