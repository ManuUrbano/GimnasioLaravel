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


    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        <div class="w-full sm:max-w-lg mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <!-- Usuario -->
            <div>
                <x-label for="usuario" :value="__('Usuario')" />

                <x-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" :value="$user->usuario" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
            </div>

            <!-- DNI -->
            <div class="mt-4">
                <x-label for="dni" :value="__('DNI')" />

                <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="$user->dni" required />
            </div>

            <!-- Nombre -->
            <div class="mt-4">
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$user->nombre" required />
            </div>

            <!-- Apellidos -->
            <div class="mt-4">
                <x-label for="apellidos" :value="__('Apellidos')" />

                <x-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="$user->apellidos" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <x-button class="ml-4 mt-3 float-right">
            {{ __('Guardar cambios') }}
            </x-button>
        </div>

    </form>

</x-app-layout>