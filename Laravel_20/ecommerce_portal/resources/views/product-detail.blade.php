@extends('layouts.main')

@push('title')
<title>Product Detail</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Product Details</h1>
</div>
@extends('layouts.main')
@push('title')
<title>Home Page</title>
@endpush
@section('content')

<!-- Hero Section -->
<section class="relative h-[80vh] overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car5.webp')}}" alt="Mercedes S-Class"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    </div>
    <div class="absolute bottom-5 left-0 right-0 p-8 text-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-8">
                <div>
                    <span
                        class="inline-block bg-white/20 backdrop-blur-sm text-sm px-3 py-1 rounded-full mb-4">Luxury
                        Sedan</span>
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">Mercedes S-Class</h1>
                    <div class="flex items-center gap-4">
                        <div class="flex text-yellow-400">★★★★★</div>
                        <span class="text-white/80">(48 Reviews)</span>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-5xl font-bold">
                        $299
                        <span class="text-2xl text-white/80">/day</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Bar  -->
<section class="bg-white shadow-lg relative z-10 -mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-gray-200">
            <div class="p-8 text-center">
                <span class="block text-gray-500 text-sm mb-1">Engine</span>
                <h2 class="block text-xl font-bold text-gray-900">4.0L V8</h2>
            </div>
            <div class="p-8 text-center">
                <span class="block text-gray-500 text-sm mb-1">Power</span>
                <h2 class="block text-xl font-bold text-gray-900">496 HP</h2>
            </div>
            <div class="p-8 text-center">
                <span class="block text-gray-500 text-sm mb-1">0-60 mph</span>
                <h2 class="block text-xl font-bold text-gray-900">4.5s</h2>
            </div>
            <div class="p-8 text-center">
                <span class="block text-gray-500 text-sm mb-1">Top Speed</span>
                <h2 class="block text-xl font-bold text-gray-900">155 mph</h2>
            </div>
        </div>
    </div>
</section>

<!-- Main Content  -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Car Details -->
            <div class="lg:col-span-2 space-y-12">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car5.webp')}}"
                            alt="Mercedes S-Class Front" class="w-full h-80 object-cover rounded-2xl">
                    </div>
                    <img src="https://carrent.aanwebsolutions.com/demo/imgs/carpart1.webp"
                        alt="Mercedes S-Class Interior" class="w-full h-48 object-cover rounded-2xl">
                    <img src="https://carrent.aanwebsolutions.com/demo/imgs/carpart2.webp"
                        alt="Mercedes S-Class Back" class="w-full h-48 object-cover rounded-2xl">
                </div>
                <!-- Description  -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">About this Mercedes S-Class</h2>
                    <p class="text-gray-600 leading-relaxed">Experience unparalleled luxury with the Mercedes
                        S-Class,
                        the flagship
                        sedan that
                        sets the
                        standard for automotive excellence. This masterpiece of German engineering combines
                        sophisticated design with cutting-edge technology to deliver an exceptional driving
                        experience.</p>
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">⛽</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Fuel Type Premium</span>
                                <span class="block font-medium">Luxury Sedan</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🚘</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Type</span>
                                <span class="block font-medium">Luxury Sedan</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">⚙️</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Transmission</span>
                                <span class="block font-medium">Automatic</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🚘</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Type</span>
                                <span class="block font-medium">Luxury Sedan</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🚘</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Type</span>
                                <span class="block font-medium">Luxury Sedan</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🚘</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Type</span>
                                <span class="block font-medium">Luxury Sedan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Premium Features</h2>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <h3 class="font-medium text-gray-900">Comfort &amp; Convenience</h3>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    Air Conditioning with 4-zone Climate Control
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    Heated &amp; Ventilated Seats
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    Panoramic Sunroof
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    Power Trunk Lid
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-6">
                            <h3 class="font-medium text-gray-900">Technology &amp; Safety</h3>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    12.3" Digital Instrument Cluster
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    MBUX Infotainment System
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    360° Camera System
                                </li>
                                <li class="flex items-center gap-3 text-gray-600">
                                    <span
                                        class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center text-green-500">✓</span>
                                    Active Parking Assist
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Reviews -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-gray-900">Customer Reviews</h2>
                        <div class="flex items-center gap-2">
                            <div class="flex text-yellow-400">★★★★★</div>
                            <span class="text-gray-600">(48 Reviews)</span>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <!-- Reviews 1  -->
                        <div class="border-b border-gray-200 pb-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/profile1.jpeg')}}"
                                        alt="Reviews" class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <h4 class="font-medium text-gray-900">Michael Brown</h4>
                                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                </div>
                                <span class="text-gray-500 text-sm">2 days ago</span>
                            </div>
                            <p class="text-gray-600">
                                "An absolute masterpiece of luxury and technology. The ride quality is
                                exceptional, and the interior is a perfect blend of comfort and sophistication.
                                Highly recommended for business trips or special occasions."
                            </p>
                        </div>
                        <!-- Reviews 2 -->
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/profile2.jpeg')}}"
                                        alt="Reviewer" class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <h4 class="font-medium text-gray-900">Sarah Wilson</h4>
                                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                </div>
                                <span class="text-gray-500 text-sm">1 week ago</span>
                            </div>
                            <p class="text-gray-600">
                                "The perfect luxury car for my business trip. The advanced driver assistance systems
                                made
                                city driving a breeze, and the massage seats were a welcome bonus during long
                                drives."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking from   -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl p-8 shadow-lg sticky top-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Book Your Experience</h2>
                    <form class="space-y-6">
                        <!-- Dates -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pick-up Date</label>
                                <input type="date"
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label for="block text-sm font-medium text-gray-700 mb-2">Return Date</label>
                                <input type="date"
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pick-up Location</label>
                            <select
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black focus:border-transparent">
                                <option>Select Location</option>
                                <option>New York City</option>
                                <option>Los Angeles</option>
                                <option>Chicago</option>
                                <option>Miami</option>
                            </select>
                        </div>
                        <!-- Additional Option  -->
                        <div class="space-y-4">
                            <h3 class="font-medium text-gray-900">Additional Options</h3>
                            <label
                                class="flex items-center justify-between p-4 border border-gray-200 rounded-xl hover:bg-gray-50 transition cursor-pointer">
                                <span class="flex items-center">
                                    <input type="checkbox"
                                        class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                                    <span class="ml-3">
                                        <span class="block text-gray-900">Insurance Coverage</span>
                                        <span class="block text-sm text-gray-500">Full coverage protection</span>
                                    </span>
                                </span>
                                <span class="text-gray-900">$29/day</span>
                            </label>
                            <label
                                class="flex items-center justify-between p-4 border border-gray-200 rounded-xl hover:bg-gray-50 transition cursor-pointer">
                                <span class="flex items-center">
                                    <input type="checkbox"
                                        class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                                    <span class="ml-3">
                                        <span class="block text-gray-900">Chauffeur Service</span>
                                        <span class="block text-sm text-gray-500">Professional driver</span>
                                    </span>
                                </span>
                                <span class="text-gray-900">$199/day</span>
                            </label>
                            <label
                                class="flex items-center justify-between p-4 border border-gray-200 rounded-xl hover:bg-gray-50 transition cursor-pointer">
                                <span class="flex items-center">
                                    <input type="checkbox"
                                        class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                                    <span class="ml-3">
                                        <span class="block text-gray-900">Additional Driver</span>
                                        <span class="block text-sm text-gray-500">Add one more driver</span>
                                    </span>
                                </span>
                                <span class="text-gray-900">$15/day</span>
                            </label>
                        </div>
                        <!-- Price Summary  -->
                        <div class="border-t border-gray-200 pt-6 space-y-4">
                            <div class="flex justify-between text-gray-600">
                                <span>Base Rate (3 days)</span>
                                <span>$897</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Insurance Coverage</span>
                                <span>$87</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Taxes &amp; Fees</span>
                                <span>$98</span>
                            </div>
                            <div
                                class="flex justify-between text-xl font-bold text-gray-900 pt-4 border-t border-gray-200">
                                <span>Total</span>
                                <span>$1,082</span>
                            </div>
                        </div>
                        <a
                            class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-4 rounded-xl font-medium hover:from-indigo-700 hover:to-purple-70 transition flex items-center justify-center gap-2"><span>Book
                                Now</span><i class="fa-solid fa-arrow-right"></i>

                        </a>
                        <p class="text-center text-sm text-gray-500">
                            Free cancellation up to 24 hours before pickup
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <img src="{{asset('https://carrent.aanwebsolutions.com/demo/imgs/car1.jpeg')}}" alt="Mercedes S-Class"
                        class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
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
<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-indigo-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Experience Luxury?</h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
            Join thousands of satisfied customers who choose MyCarRental for their premium car rental needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
                class="bg-white text-indigo-600 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition">Browse
                Our
                Fleet</a>
            <a href="#"
                class="bg-transparent text-white border-2 border-white px-8 py-3 rounded-full font-medium hover:bg-white/10 transition">Contact
                Us</a>
        </div>
    </div>
</section>

<!-- Footer  -->

@endsection

</body>

</html>

@endsection