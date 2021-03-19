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
                                <span class="text-gray-700">Utilisateur</span>
                                <select name="utilisateur"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('utilisateur') is-invalid @enderror">
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach ($utilisateurs as $utilisateur)
                                        <option value="{{ $utilisateur->id }}"
                                            {{ old('utilisateur') == $utilisateur->id ? 'selected' : '' }}>
                                            {{ $utilisateur->nom }}</option>
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
                                <span class="text-gray-700">Plage horaire</span>
                                <select name="horaire"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('horaire') is-invalid @enderror">
                                    <option value="">Selectionnez une plage horaire</option>
                                    @forelse ($horaires as $horaire)
                                        <option value="{{ $horaire->id }}"
                                            {{ old('horaire') == $horaire->id ? 'selected' : '' }}>
                                            {{ $horaire->plage_horaire }}
                                        </option>
                                    @empty
                                        <option value="">Aucune plage horaire disponible à cette date</option>
                                    @endforelse
                                </select>
                                @error('horaire')
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Ordinateur</span>
                                <select name="ordinateur"
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700 @error('ordinateur') is-invalid @enderror">
                                    <option id="choixOrdi" value="">Sélectionnez un ordinateur</option>
                                    {{-- @foreach ($ordinateurs as $ordinateur)
                                        <option value="{{ $ordinateur->id }}"
                                            {{ old('ordinateur') == $ordinateur->id ? 'selected' : '' }}>
                                            {{ $ordinateur->nom }}</option>
                                    @endforeach --}}
                                </select>
                                @error('ordinateur')
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
<script src="{{ asset('js/slots.js', Request::secure()) }}" defer></script>