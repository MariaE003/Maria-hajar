<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-200 p-4">
                <!-- Sidebar content -->
                <h2 class="text-lg font-semibold mb-4">Sidebar</h2>
                <ul>
                    <li>Menu Item 1</li>
                    <li>Menu Item 2</li>
                    <li>Menu Item 3</li>
                    <!-- Add more menu items here -->
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="flex flex-col w-full">
            <x-slot name="header">
                <div class="flex justify-between items-center">
                    <div class="flex-shrink-0">
                        <!-- Logo -->
                        <img class="h-8 w-auto" src="your_logo.png" alt="Logo">
                    </div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                    <div>
                        <!-- Add any additional header elements here -->
                        <!-- For example, user profile information, notifications, etc. -->
                    </div>
                </div>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h2>
                            <!-- Recent Orders section -->
                            <ul>
                                <li>Order 1</li>
                                <li>Order 2</li>
                                <!-- Add more orders here -->
                            </ul>
                        </div>
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Analytics</h2>
                            <!-- Analytics section -->
                            <p>Analytics charts and graphs can go here.</p>
                        </div>
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
                            <!-- Recent Activity section -->
                            <ul>
                                <li>User 1 logged in</li>
                                <li>User 2 registered</li>
                                <!-- Add more recent activities here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
