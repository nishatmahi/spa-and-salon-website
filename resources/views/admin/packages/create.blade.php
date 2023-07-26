<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.packages.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Packages Index</a>
            </div>
        
        <div class="m-2 p-2 bg-slate-100 rounded">
            <form method="POST" action=" {{ route('admin.packages.store') }} " enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <input type="text" placeholder="name" class="form-control @error('name') border-red-400 @enderror" name="name" id="name">
                </div>
                @error('name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="file"  class="form-control @error('image') border-red-400 @enderror" name="image" id="image">
                </div>
                @error('image')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="description" class="form-control @error('description') border-red-400 @enderror" name="description" id="description">
                </div>
                @error('description')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
               
                
                <div class="mb-2">
                    <input type="text" placeholder="price" class="form-control @error('price') border-red-400 @enderror" name="price" id="price">
                </div>
                @error('price')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="sm:col-span-6 pt-5">
                    <label for="body"class="block text-sm font-medium text-gray-700">catagories</label>
                    <div class="mt-1">
                <select id="catagories" name="catagories" class="form-multiselect block w-full mt-1" multiple>
                    @foreach ($catagories as $catagory)
                    <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                    @endforeach
                </select>

                    </div>
                </div>
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
