<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Utilisateurs
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 grid-rows-custom">
                    <div class="col-span-2">
                        <h3 class="font-semibold text-lg text-gray-800 py-2">Liste des utilisateurs</h3>
                    </div>
                    <div>
                        <p class="text-right">
                            <a href="utilisateurs/create"
                                class="border-b-2 border-transparent text-2xl text-indigo-500 hover:font-semibold hover:text-indigo-700 transition duration-150 ease-in-out">
                                <i class="fas fa-plus"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-span-3 row-span-2">
                        <table class="table-fixed w-full mb-6">
                            <tbody>
                                @forelse ($utilisateurs as $utilisateur)
                                    <tr class="py-2 grid grid-cols-4 border-b-2 mt-2">
                                        <td class="text-gray-600">
                                            {{ $utilisateur->nom }}
                                        </td>
                                        <td class="flex items-center justify-center md:justify-end">
                                            @if ($utilisateur->etat == 1)
                                                <span
                                                    class="px-2 inline-flex leading-5 rounded-full bg-green-100 text-green-800">
                                                    actif
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 inline-flex leading-5 rounded-full bg-red-100 text-red-800">
                                                    inactif
                                                </span>
                                            @endif
                                        </td>
                                        <td class="flex items-center justify-center md:justify-end">
                                            <a href="utilisateurs/{{ $utilisateur->id }}/edit"
                                                class="border-b-2 border-transparent text-indigo-500 hover:font-semibold hover:border-indigo-700 hover:text-indigo-700 transition duration-150 ease-in-out">
                                                Modifier
                                            </a>
                                        </td>
                                        <td class="flex items-center justify-center md:justify-end">
                                            <form action="utilisateurs/{{ $utilisateur->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-gray-800 hover:text-red-500 transition duration-150 ease-in-out">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <p class="text-gray-400">Aucun utilisateur</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $utilisateurs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
