<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">{{ __('Available Menus') }}</h3>
                    <table class="min-w-full bg-white border-collapse">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">{{ __('ID') }}</th>
                                <th class="border px-4 py-2">{{ __('Kode Makanan') }}</th>
                                <th class="border px-4 py-2">{{ __('Nama Makanan') }}</th>
                                <th class="border px-4 py-2">{{ __('Rincian') }}</th>
                                <th class="border px-4 py-2">{{ __('Harga') }}</th>
                                <th class="border px-4 py-2">{{ __('Created At') }}</th>
                                <th class="border px-4 py-2">{{ __('Updated At') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($menus as $menu)
                            <tr>
                                <td class="border px-4 py-2">{{ $menu->id }}</td>
                                <td class="border px-4 py-2">{{ $menu->kode_makanan }}</td>
                                <td class="border px-4 py-2">{{ $menu->nama_makanan }}</td>
                                <td class="border px-4 py-2">{{ $menu->rincian }}</td>
                                <td class="border px-4 py-2">{{ number_format($menu->harga, 2) }}</td>
                                <td class="border px-4 py-2">{{ $menu->created_at }}</td>
                                <td class="border px-4 py-2">{{ $menu->updated_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="border px-4 py-2 text-center">
                                    {{ __('No menus available.') }}
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>