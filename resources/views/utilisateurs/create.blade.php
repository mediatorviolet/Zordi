<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer un nouvel utilisateur
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/utilisateurs" method="post">
                        @csrf
                        <label class="block">
                            <span class="text-gray-700">Nom de l'utilisateur</span>
                            <input type="text"
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-indigo-200 focus:ring-0 focus:border-indigo-700"
                                placeholder="Jane Doe" name="nom" autofocus>
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
