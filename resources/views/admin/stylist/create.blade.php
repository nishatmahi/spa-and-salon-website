<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.stylist.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Stylist Index</a>
            </div>
        
        <div class="m-2 p-2 bg-slate-100 rounded">
        <form method="POST" action=" {{ route('admin.stylist.store') }} " enctype="multipart/form-data">
        @csrf
                <div class="mb-2">
                    <input type="text" placeholder="name" class="form-control" name="name" id="name">
                </div>
                @error('name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                
                <div class="mb-2">
                    <input type="file"  class="form-control" name="image" id="image">
                </div>
                @error('image')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
               
                <div class="mb-2">
                    <input type="text" placeholder="status" class="form-control" name="status" id="status">
                </div>
                @error('name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>
            
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
