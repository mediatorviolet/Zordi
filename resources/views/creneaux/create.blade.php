<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer un nouveau créneau
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/slots" method="post">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">

                            <label class="block">
                                <span class="text-gray-700">Ordinateur</span>
                                <select name="ordinateur"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('ordinateur') is-invalid @enderror">
                                    <option value="">Sélectionnez un ordinateur</option>
                                    @foreach ($ordinateurs as $ordinateur)
                                        <option value="{{ $ordinateur->id }}">{{ $ordinateur->nom }}</option>
                                    @endforeach
                                </select>
                                @error('ordinateur')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Utilisateur</span>
                                <select name="utilisateur"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('utilisateur') is-invalid @enderror">
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach ($utilisateurs as $utilisateur)
                                        <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }}</option>
                                    @endforeach
                                </select>
                                @error('utilisateur')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Date</span>
                                <input type="date" name="date"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('date') is-invalid @enderror"
                                    value="{{ old('date') }}">
                                @error('date')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Heure de début</span>
                                <input type="time" name="heure_debut"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('heure_debut') is-invalid @enderror"
                                    value="{{ old('heure_debut') }}">
                                @error('heure_debut')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Heure de fin</span>
                                <input type="time" name="heure_fin"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('heure_fin') is-invalid @enderror"
                                    value="{{ old('heure_fin') }}">
                                @error('heure_fin')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                        </div>
                        <button type="submit"
                            class="bg-indigo-500 rounded-xl px-4 py-2 text-gray-100 mt-6 hover:bg-indigo-700 transition duration-150 ease-in-out">
                            Créer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
