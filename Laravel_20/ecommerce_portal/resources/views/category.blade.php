@extends('layouts.main')

@push('title')
<title>Category</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
</div>

<!-- Similar Car Section  -->
<section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-12">Similar Vehicles</h2>

        <!-- Cars Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Car Card 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                data-category="luxury">
                <div class="relative">
                    <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car1.jpeg')}}" alt="Mercedes S-Class"
                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-500"></a>
                    <div
                        class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                        Available Now
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Mercedes S-Class</h3>
                        <div class="text-2xl font-bold text-indigo-600">$299<span
                                class="text-sm text-gray-500">/day</span></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Automatic
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            4 Seats
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            GPS
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Bluetooth
                        </div>
                    </div>
                    <a href="car-details.html"
                        class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Car Card 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                data-category="suv">
                <div class="relative">
                    <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car2.jpeg')}}" alt="Range Rover Sport"
                        class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute top-4 right-4 bg-indigo-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                        Available Now
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Range Rover Sport</h3>
                        <div class="text-2xl font-bold text-indigo-600">$249<span
                                class="text-sm text-gray-500">/day</span></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Automatic
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            5 Seats
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            GPS
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Bluetooth
                        </div>
                    </div>
                    <a href="car-details.html"
                        class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Car Card 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300 car-card"
                data-category="sports">
                <div class="relative">
                    <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car3.jpeg')}}" alt="Porsche 911"
                        class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute top-4 right-4 bg-red-600 text-white text-sm font-medium px-3 py-1 rounded-full">
                        Limited
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Porsche 911</h3>
                        <div class="text-2xl font-bold text-indigo-600">$399<span
                                class="text-sm text-gray-500">/day</span></div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Manual
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            2 Seats
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            GPS
                        </div>
                        <div class="flex items-center text-gray-600">
                            <span class="text-indigo-600 mr-2">✓</span>
                            Bluetooth
                        </div>
                    </div>
                    <a href="car-details.html"
                        class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center px-4 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-purple-700 transition">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection