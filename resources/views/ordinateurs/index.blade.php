<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ordinateurs
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 grid-rows-custom">
                    <div class="col-span-2">
                        <h3 class="font-semibold text-lg text-gray-800 py-2">Liste des ordinateurs</h3>
                    </div>
                    <div>
                        <p class="text-right">
                            <a href="ordinateurs/create"
                                class="border-b-2 border-transparent text-2xl text-indigo-500 hover:font-semibold hover:text-indigo-700 transition duration-150 ease-in-out">
                                <i class="fas fa-plus"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-span-3 row-span-2">
                        <table class="table-fixed w-full mb-6">
                            <tbody>
                                @forelse ($ordinateurs as $ordinateur)
                                    <tr class="py-2 grid grid-cols-4 border-b-2 mt-2">
                                        <td class="text-gray-600">
                                            {{ $ordinateur->nom }}
                                        </td>
                                        <td class="flex items-center justify-center md:justify-end">
                                            @if ($ordinateur->etat == 1)
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
                                            <a href="ordinateurs/{{ $ordinateur->id }}/edit"
                                                class="border-b-2 border-transparent text-indigo-500 hover:font-semibold hover:border-indigo-700 hover:text-indigo-700 transition duration-150 ease-in-out">
                                                Modifier
                                            </a>
                                        </td>
                                        <td class="flex items-center justify-center md:justify-end">
                                            <form action="ordinateurs/{{ $ordinateur->id }}" method="post">
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
                                    <p class="text-gray-400">Aucun ordinateur</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $ordinateurs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
