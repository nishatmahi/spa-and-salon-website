<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation Index</a>
            </div>
        
        <div class="m-2 p-2 bg-slate-100 rounded">
        <form method="POST" action=" {{ route('admin.reservation.store') }} " enctype="multipart/form-data">
        @csrf
                <div class="mb-2">
                    <input type="text" placeholder="first_name" class="form-control @error('first_name') border-red-400 @enderror" name="first_name" id="first_name">
                </div>
                @error('first_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="last_name" class="form-control @error('last_name') border-red-400 @enderror" name="last_name" id="last_name">
                </div>
                @error('last_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="Email" class="form-control @error('email') border-red-400 @enderror" name="email" id="email">
                </div>
                @error('email')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="tel_number" class="form-control @error('tel_number') border-red-400 @enderror" name="tel_number" id="tel_number">
                </div>
                @error('tel_number')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="datetime-local" placeholder="reservation_date" class="form-control @error('res_date') border-red-400 @enderror" name="res_date" id="res_date">
                </div>
                @error('res_date')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="sm:col-span-6 pt-5">
                    <label for="body"class="block text-sm font-medium text-gray-700">Stylist</label>
                    <div class="mt-1">
                  
                <select id="stylists_id" name="stylists_id" class="form-multiselect block w-full mt-1">
                    @foreach ($stylist as $stylist)
                    <option value="{{ $stylist->id }}">{{ $stylist->name }}</option>
                    @endforeach
                </select>

                    </div>
                    @error('stylists_id')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                </div>
               
                
                <div class="mt-6 p-4">
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>
            
            </form>
        </div>

        </div>
    </div>
</x-admin-layout>
