<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créneaux
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 grid-rows-3">
                    <div class="col-span-2">
                        <h3 class="font-semibold text-lg text-gray-800 py-2">Liste des créneaux</h3>
                    </div>
                    <div>
                        <p class="text-right">
                            <a href="slots/create"
                                class="border-b-2 border-transparent text-2xl text-indigo-500 hover:font-semibold hover:text-indigo-700 transition duration-150 ease-in-out">
                                <i class="fas fa-plus"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-span-3 row-span-2">
                        <table class="table-fixed w-full">
                            <tbody>
                                @forelse ($slots as $slot)
                                    <tr class="py-2 flex justify-between border-b-2 mt-2">
                                        <td class="text-gray-600">
                                            {{ $slot->nom }}
                                        </td>
                                        <td>
                                            @if ($slot->etat == 1)
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
                                        <td>
                                            <a href="slots/{{ $slot->id }}/edit"
                                                class="border-b-2 border-transparent text-indigo-500 hover:font-semibold hover:border-indigo-700 hover:text-indigo-700 transition duration-150 ease-in-out">
                                                Modifier
                                            </a>
                                        </td>
                                        <td>
                                            <form action="slots/{{ $slot->id }}" method="post">
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
                                    <p class="text-gray-400">Aucun créneau</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $slots->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
