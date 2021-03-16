<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier un utilisateur
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/utilisateurs/{{ $utilisateur->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <label class="block">
                            <span class="text-gray-700">Nom du poste</span>
                            <input type="text"
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700"
                                name="nom" value="{{ $utilisateur->nom }}">
                        </label>
                        <label class="block mt-4 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                            <span class="text-gray-700">Etat</span>
                            <div class="block mb-2">
                                <span class="text-gray-700 mr-6">
                                    <input type="radio" name="etat" id="1" value="1" {{ $utilisateur->etat == 1 ? 'checked' : '' }}>
                                    Activer
                                </span>
                                <span class="text-gray-700">
                                    <input type="radio" name="etat" id="0" value="0" {{ $utilisateur->etat == 0 ? 'checked' : '' }}>
                                    Désactiver
                                </span>
                            </div>
                        </label>
                        <button type="submit"
                            class="bg-indigo-500 rounded-xl px-4 py-2 text-gray-100 mt-6 hover:bg-indigo-700 transition duration-150 ease-in-out">
                            Enregistrer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
