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
                                <span class="text-gray-700">Poste</span>
                                <select name=""
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                                    <option value="">Sélectionnez un poste</option>
                                    @foreach ($ordinateurs as $ordinateur)
                                        <option value="">{{ $ordinateur->nom }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->any())
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Utilisateur</span>
                                <select name=""
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach ($utilisateurs as $utilisateur)
                                        <option value="">{{ $utilisateur->nom }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->any())
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Date</span>
                                <input type="date" name=""
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                                @if ($errors->any())
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Heure de début</span>
                                <input type="time" name=""
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                                @if ($errors->any())
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Heure de fin</span>
                                <input type="time" name=""
                                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700">
                                @if ($errors->any())
                                    <div class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
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
