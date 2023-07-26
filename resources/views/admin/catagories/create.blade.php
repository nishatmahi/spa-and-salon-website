<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.catagories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Catagory Index</a>
            </div>
        
        <div class="m-2 p-2 bg-slate-100 rounded">
            <form method="POST" action="{{ route('admin.catagories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <input type="text" placeholder="Name" class="form-control @error('name') border-red-400 @enderror" name="name" id="name">
                    @error('name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                </div>
              
                <div class="mb-2">
                    <input type="file"  class="form-control border-red-400 @error('image') border-red-400 @enderror" name="image" id="image">
                  
                </div>
                @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
               
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
