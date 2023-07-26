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
            <form method="POST" action="{{ route('admin.catagories.update',$catagory->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <input type="text" placeholder="Name" class="form-control @error('name') border-red-400 @enderror" name="name" id="name" value="{{ $catagory->name }}">
                </div>
                @error('name')
          <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="file"  class="form-control @error('name') border-red-400 @enderror" name="image" id="image">
                    <div>
                        <img class="w-32 h-32" src="{{ Storage::url($catagory->image) }}">
                    </div>
                    @error('name')
          <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                </div>
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Update</button>
                </div>
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
