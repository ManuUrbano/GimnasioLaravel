<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-auto">
            {{ __('API COMIDAS') }}
        </h2>
    </x-slot>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- LLAMAMOS AL COMPONENTE messega-status -->
    <x-message-status class="mb-4" :status="session('status')" />
   

    <div class="max-w-6xl mx-auto sm:px-6  shadow-xl lg:px-8 pt-2 pb-2 b-2">

        <!-- LLAMAMOS AL COMPONENTE messega-status validation-errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="text-center w-full">
            <thead class="bg-yellow-800 opacity-75 flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-2/12">Nombre Receta</th>
                    <th class="p-4 w-2/12">Categoria</th>
                    <th class="p-4 w-8/12">Instruciones</th>
                </tr>
            </thead>
            
            <tbody class="bg-grey-light justify-between w-full" style="height: 50vh;">
                @foreach( $responseBody as $Body )
                <tr class="flex w-full mb-4">
                    <td class="p-4 w-2/12">{{ $Body[0]->strMeal  }}</td>
                    <td class="p-4 w-2/12">{{ $Body[0]->strCategory  }}</td>
                    <td class="p-4 w-8/12">{{ $Body[0]->strInstructions  }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-app-layout>