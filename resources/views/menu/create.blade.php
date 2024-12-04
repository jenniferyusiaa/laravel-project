<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">{{ __('New Menu Form') }}</h3>

                    <!-- Display validation errors -->
                    @if ($errors->any())
                    <div class="mb-4">
                        <ul class="text-red-600">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="kode_makanan" class="block text-sm font-medium text-gray-700">{{ __('Kode Makanan') }}</label>
                            <input type="text" name="kode_makanan" id="kode_makanan" value="{{ old('kode_makanan') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="nama_makanan" class="block text-sm font-medium text-gray-700">{{ __('Nama Makanan') }}</label>
                            <input type="text" name="nama_makanan" id="nama_makanan" value="{{ old('nama_makanan') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="rincian" class="block text-sm font-medium text-gray-700">{{ __('Rincian') }}</label>
                            <textarea name="rincian" id="rincian" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('rincian') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="harga" class="block text-sm font-medium text-gray-700">{{ __('Harga') }}</label>
                            <input type="number" name="harga" id="harga" value="{{ old('harga') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="flex items-center justify-end">
                            <a href="{{ route('menus.index') }}" class="text-indigo-600 hover:text-indigo-900 mr-4">{{ __('Cancel') }}</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>