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
    


    <form method="POST" action="{{ route('actividades.update', $actividad->id) }}">
        @csrf
        <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            

            <!-- Nombre -->
            <div>
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$actividad->nombre" required autofocus />
            </div>

            <!-- descripcion -->
            <div class="mt-4">
                <x-label for="descripcion" :value="__('Descripcion')" />

                <x-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="$actividad->descripcion" required />
            </div>

            <!-- aforo -->
            <div class="mt-4">
                <x-label for="aforo" :value="__('Aforo')" />

                <x-input id="aforo" class="block mt-1 w-full" type="text" name="aforo" :value="$actividad->aforo" required />
            </div>



            <x-button class="ml-4 mt-3 float-right">
            {{ __('Guardar cambios') }}
            </x-button>
        </div>

    </form>

</x-app-layout>