<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation</a>
            </div>
           
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                     Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Stylist
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($reservations->load('stylist') as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td 
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <input type="hidden" name="name" value="">
                    {{$reservation->first_name}}  {{$reservation->last_name}}
                </td>
               
                <td 
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <input type="hidden" name="email" value="">
                    {{$reservation->email}}
                </td>
                
                <td 
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <input type="hidden" name="res_date" value="">
                    {{$reservation->res_date}}
                </td>
                <td 
                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <input type="hidden" name="stylist_id" value="">
                @if ($reservation->stylist)
    {{$reservation->stylist->name}}
       @else
    N/A
@endif

                </td>
                
                
                <td class="px-4 py-2 bg-green hover:bg-green-400 rounded-lg text-black"><a href="{{ route('admin.reservation.edit', $reservation->id) }}"
                input type="submit" class="btn btn-outline-danger rounded-pill">Edit</a></td>
                <td>
                <form
                        class="btn btn-outline-danger rounded-pill"
                        method="POST"
                        action="{{ route('admin.reservation.destroy', $reservation->id) }}"
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
