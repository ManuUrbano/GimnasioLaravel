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
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pt-2">


        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('user.store') }}">
            @csrf

            <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <!-- Usuario -->
                <div>
                    <x-label for="usuario" :value="__('Usuario')" />

                    <x-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                </div>

                <!-- DNI -->
                <div class="mt-4">
                    <x-label for="dni" :value="__('DNI')" />

                    <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" required />
                </div>

                <!-- Nombre -->
                <div class="mt-4">
                    <x-label for="nombre" :value="__('Nombre')" />

                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required />
                </div>

                <!-- Apellidos -->
                <div class="mt-4">
                    <x-label for="apellidos" :value="__('Apellidos')" />

                    <x-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" >

                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>



                <input type="submit" value="Gaurdar Usuario">
            </div>

        </form>

    </div>

</x-app-layout>