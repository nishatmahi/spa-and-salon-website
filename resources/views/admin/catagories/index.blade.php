<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.catagories.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Catagories</a>
            </div>
            <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th>
                    Edit
                </th>
                <!-- <th>
                    Delete
                </th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($catagories as $catagory)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <!-- <form action="update" method="get"> -->
                <td 
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <input type="hidden" name="name" value="{{$catagory['name']}}">
                    {{$catagory->name}}
                </td>
                <td 
                 class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img src="{{ Storage::url($catagory->image) }}" class="w-16 h-16 rounded">
                </td>
                
                <td class="px-4 py-2 bg-green hover:bg-green-300 rounded-lg text-black"><a href="{{ route('admin.catagories.edit', $catagory->id) }}"
                input type="submit" class="btn btn-outline-danger rounded-pill">Edit</a></td>
                <td>
                <form
                        class="btn btn-outline-danger rounded-pill"
                        method="POST"
                        action="{{ route('admin.catagories.destroy', $catagory->id) }}"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                </td>
        
               
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
