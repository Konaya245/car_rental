<link rel="stylesheet" href={{ asset("css/maboyu.css") }}>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-4 " style="position: relative; margin: 0 auto;">
            <div class="inner" style="position: relative;">
                <!-- <x-jet-welcome /> -->
                <!-- // write the content of the page here  -->
                <table border=1 style="margin: 0 auto">
                    <tr>
                        <td>Customer name</td>
                        <td>Payment Method</td>
                        <td>Price</td>
                    </tr>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->custName}}</td>
                        <td>{{ $user->paymentMethod}}</td>
                        <td>RM{{ $user->price}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</x-app-layout>