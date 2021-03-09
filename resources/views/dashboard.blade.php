<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <h2 class="text-lg font-extrabold mt-2" >Mira la activiades que tenemos disponobles!</h2>
                        <a href="{{ route('actividades.index')}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Lista de actividades</button></a>
                        <h2 class="text-lg font-extrabold mt-2" >O tambien puedes echar un vistazo al horario de esta semana!!</h2>
                        <a href="{{ route('tramos.horario')}}"> <button class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Horario</button></a>
                        <h2 class="text-lg font-extrabold mt-2" >¿Quieres saber en cúal actividades estás insctritas?</h2>
                        <a href="{{ route('tramosUser.index')}}"> <button class="bg-yellow-700 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded">Inscripciones</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
