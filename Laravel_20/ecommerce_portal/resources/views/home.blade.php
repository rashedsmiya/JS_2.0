@extends('layouts.main')
@push('title')
<title>Home Page</title>
@endpush
@section('content')
<!-- Main Content  -->


<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class=" duration-200 ease-linear " data-carousel-item>
            <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class=" duration-200 ease-linear" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class=" duration-200 ease-linear" data-carousel-item="active">
            <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class=" duration-200 ease-linear" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class=" duration-200 ease-linear" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- product section    -->
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Products</h2>

        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg-grid-cols-4">
            <!-- Product Card -->
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1743704458905-9edf92294d7e?q=80&w=1508&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Best Electronic    -->
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Best Electronic</h2>

        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg-grid-cols-4">
            <!-- Product Card -->
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection