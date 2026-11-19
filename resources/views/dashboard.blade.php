<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center space-x-3">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                    + New Report
                </button>
                <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                    Export
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Welcome back, {{ auth()->user()->name }}!</h1>
                <p class="text-gray-500 mt-1 text-sm">Here's what's happening with your business today.</p>
            </div>

            <!-- KPI Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
                <!-- Total Revenue -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-md p-5 text-white h-36">
                    <div class="flex items-center justify-between h-full">
                        <div class="flex-1">
                            <p class="text-blue-100 text-xs font-medium uppercase tracking-wide">Total Revenue</p>
                            <p class="text-3xl font-bold mt-1">$128,430</p>
                            <p class="text-blue-100 text-xs mt-2 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                12.5% from last month
                            </p>
                        </div>
                        <div class="bg-white/20 p-2.5 rounded-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Orders -->
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl shadow-md p-5 text-white h-36">
                    <div class="flex items-center justify-between h-full">
                        <div class="flex-1">
                            <p class="text-emerald-100 text-xs font-medium uppercase tracking-wide">Total Orders</p>
                            <p class="text-3xl font-bold mt-1">1,842</p>
                            <p class="text-emerald-100 text-xs mt-2 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                8.2% from last month
                            </p>
                        </div>
                        <div class="bg-white/20 p-2.5 rounded-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- New Customers -->
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-md p-5 text-white h-36">
                    <div class="flex items-center justify-between h-full">
                        <div class="flex-1">
                            <p class="text-purple-100 text-xs font-medium uppercase tracking-wide">New Customers</p>
                            <p class="text-3xl font-bold mt-1">324</p>
                            <p class="text-purple-100 text-xs mt-2 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                15.3% from last month
                            </p>
                        </div>
                        <div class="bg-white/20 p-2.5 rounded-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Pending Orders -->
                <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl shadow-md p-5 text-white h-36">
                    <div class="flex items-center justify-between h-full">
                        <div class="flex-1">
                            <p class="text-amber-100 text-xs font-medium uppercase tracking-wide">Pending Orders</p>
                            <p class="text-3xl font-bold mt-1">45</p>
                            <p class="text-amber-100 text-xs mt-2 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                                </svg>
                                5.1% from last month
                            </p>
                        </div>
                        <div class="bg-white/20 p-2.5 rounded-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-6">
                <!-- Revenue Chart (Spans 2 columns) -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-base font-semibold text-gray-900">Revenue Overview</h3>
                        <select class="text-xs border border-gray-300 rounded-lg px-2.5 py-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>Last 12 months</option>
                            <option>Last 6 months</option>
                            <option>Last 30 days</option>
                        </select>
                    </div>
                    <canvas id="revenueChart" height="260"></canvas>
                </div>

                <!-- Sales by Category -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                    <h3 class="text-base font-semibold text-gray-900 mb-4">Sales by Category</h3>
                    <canvas id="salesChart" height="260"></canvas>
                </div>
            </div>

            <!-- Secondary Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-6">
                <!-- Orders Trend -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-base font-semibold text-gray-900">Weekly Orders Trend</h3>
                        <select class="text-xs border border-gray-300 rounded-lg px-2.5 py-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>This Week</option>
                            <option>Last Week</option>
                        </select>
                    </div>
                    <canvas id="ordersChart" height="180"></canvas>
                </div>

                <!-- Quick Stats -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">
                    <h3 class="text-base font-semibold text-gray-900 mb-4">Quick Stats</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-2.5 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-1.5 rounded-lg mr-2.5">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-gray-900">Conversion Rate</p>
                                    <p class="text-xs text-gray-500">3.2%</p>
                                </div>
                            </div>
                            <span class="text-green-600 text-xs font-medium">+0.8%</span>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="bg-green-100 p-1.5 rounded-lg mr-2.5">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-gray-900">Avg. Order Value</p>
                                    <p class="text-xs text-gray-500">$69.78</p>
                                </div>
                            </div>
                            <span class="text-green-600 text-xs font-medium">+2.1%</span>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="bg-purple-100 p-1.5 rounded-lg mr-2.5">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-gray-900">Active Users</p>
                                    <p class="text-xs text-gray-500">1,247</p>
                                </div>
                            </div>
                            <span class="text-green-600 text-xs font-medium">+5.4%</span>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <div class="bg-amber-100 p-1.5 rounded-lg mr-2.5">
                                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-gray-900">Support Tickets</p>
                                    <p class="text-xs text-gray-500">23</p>
                                </div>
                            </div>
                            <span class="text-red-600 text-xs font-medium">-3.2%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions Table -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-5 py-3.5 border-b border-gray-200 flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-900">Recent Transactions</h3>
                    <a href="#" class="text-indigo-600 hover:text-indigo-700 text-xs font-medium">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Order ID</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Product</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-5 py-2.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">#ORD-001</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-7 w-7 rounded-full bg-indigo-100 flex items-center justify-center mr-2.5">
                                            <span class="text-indigo-600 font-medium text-xs">JS</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">John Smith</p>
                                            <p class="text-xs text-gray-500">john@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-600">Enterprise License</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">$2,499.00</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-500">Nov 18, 2026</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-medium">View</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">#ORD-002</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-7 w-7 rounded-full bg-pink-100 flex items-center justify-center mr-2.5">
                                            <span class="text-pink-600 font-medium text-xs">SJ</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">Sarah Johnson</p>
                                            <p class="text-xs text-gray-500">sarah@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-600">Pro Plan Annual</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">$899.00</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-500">Nov 18, 2026</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-medium">View</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">#ORD-003</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-7 w-7 rounded-full bg-green-100 flex items-center justify-center mr-2.5">
                                            <span class="text-green-600 font-medium text-xs">MB</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">Michael Brown</p>
                                            <p class="text-xs text-gray-500">michael@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-600">Starter Plan Monthly</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">$49.00</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-500">Nov 17, 2026</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-medium">View</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">#ORD-004</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-7 w-7 rounded-full bg-blue-100 flex items-center justify-center mr-2.5">
                                            <span class="text-blue-600 font-medium text-xs">ED</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">Emily Davis</p>
                                            <p class="text-xs text-gray-500">emily@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-600">Team Plan Annual</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">$1,799.00</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-blue-100 text-blue-800">Processing</span>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-500">Nov 17, 2026</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-medium">View</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">#ORD-005</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-7 w-7 rounded-full bg-orange-100 flex items-center justify-center mr-2.5">
                                            <span class="text-orange-600 font-medium text-xs">DW</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-900">David Wilson</p>
                                            <p class="text-xs text-gray-500">david@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-600">Enterprise License</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs font-semibold text-gray-900">$2,499.00</td>
                                <td class="px-5 py-3 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span>
                                </td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs text-gray-500">Nov 16, 2026</td>
                                <td class="px-5 py-3 whitespace-nowrap text-xs">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-medium">View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Revenue Chart
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Revenue',
                        data: [65000, 72000, 68000, 85000, 92000, 88000, 95000, 102000, 98000, 115000, 128430, 135000],
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#6366f1',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1f2937',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 12,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    return '$' + context.parsed.y.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f3f4f6'
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                },
                                font: {
                                    size: 11
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });

            // Sales by Category Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Enterprise', 'Pro Plan', 'Team Plan', 'Starter Plan'],
                    datasets: [{
                        data: [45, 25, 20, 10],
                        backgroundColor: ['#6366f1', '#10b981', '#f59e0b', '#8b5cf6'],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true,
                                pointStyle: 'circle',
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });

            // Orders Trend Chart
            const ordersCtx = document.getElementById('ordersChart').getContext('2d');
            new Chart(ordersCtx, {
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Orders',
                        data: [145, 162, 158, 175, 210, 98, 85],
                        backgroundColor: '#6366f1',
                        borderRadius: 6,
                        barThickness: 32
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1f2937',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            padding: 12,
                            displayColors: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f3f4f6'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>
