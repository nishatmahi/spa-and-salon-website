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
        <form method="POST" action=" {{ route('admin.stylist.update', $stylist->id) }} " enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-2">
                    <input type="text" placeholder="name" class="form-control" name="name" id="name" value="{{ $stylist->name }}">
                </div>
                <div>
                        <img class="w-32 h-32" src="{{ Storage::url($stylist->image) }}">
                    </div>
                <div class="mb-2">
                    <input type="file"  class="form-control" name="image" id="image">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="status" class="form-control" name="status" id="status" value="{{ $stylist->status }}">
                </div>
               
                
                
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>
            
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
