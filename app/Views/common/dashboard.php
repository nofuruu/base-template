<div class="p-6 space-y-6 text-gray-800">

    <!-- Header Top (Simple + CRM style) -->
    <div class="border-b border-gray-300 pb-2">
        <h1 class="text-2xl font-bold tracking-wide">Dashboard Overview</h1>
        <p class="text-sm text-gray-500">System Status & Quick Management Panel</p>
    </div>

    <!-- UP / LEFT HEAVY LAYOUT (OFF-BALANCE CRM PANEL STYLE) -->
    <div class="grid grid-cols-12 gap-6">

        <!-- LEFT LARGE PANEL -->
        <div class="col-span-12 md:col-span-7 border border-gray-300 rounded-lg shadow-sm">

            <!-- Panel Header -->
            <div class="bg-teal-500 text-white px-4 py-2 rounded-t-lg text-sm font-semibold tracking-wider">
                SYSTEM METRICS
            </div>

            <!-- Panel content -->
            <div class="p-5 grid grid-cols-3 gap-4">

                <div class="border border-gray-200 rounded-md p-4">
                    <p class="text-sm font-semibold text-gray-600">Active Users</p>
                    <p class="text-3xl font-bold text-teal-600">14</p>
                </div>

                <div class="border border-gray-200 rounded-md p-4">
                    <p class="text-sm font-semibold text-gray-600">Requests Today</p>
                    <p class="text-3xl font-bold text-teal-600">278</p>
                </div>

                <div class="border border-gray-200 rounded-md p-4">
                    <p class="text-sm font-semibold text-gray-600">System Load</p>
                    <p class="text-3xl font-bold text-teal-600">42%</p>
                </div>

            </div>
        </div>

        <!-- RIGHT TWO SMALL STACKED PANELS -->
        <div class="col-span-12 md:col-span-5 space-y-6">

            <!-- Panel 1 -->
            <div class="border border-gray-300 rounded-lg shadow-sm">
                <div class="bg-gray-100 px-4 py-2 rounded-t-lg text-sm font-bold">
                    QUICK ACTIONS
                </div>
                <div class="p-4 space-y-3">
                    <button class="w-full py-2 border border-teal-500 text-teal-600 rounded-md font-semibold hover:bg-teal-500 hover:text-white transition">
                        Refresh Data
                    </button>
                    <button class="w-full py-2 border border-gray-300 rounded-md font-semibold hover:bg-gray-100 transition">
                        Export Report
                    </button>
                </div>
            </div>

            <!-- Panel 2 -->
            <div class="border border-gray-300 rounded-lg shadow-sm">
                <div class="bg-gray-100 px-4 py-2 rounded-t-lg text-sm font-bold">
                    SYSTEM FLAGS
                </div>
                <div class="p-4 text-sm space-y-2">
                    <p class="flex justify-between">
                        <span>Database Status:</span>
                        <span class="font-bold text-teal-600">Connected</span>
                    </p>

                    <p class="flex justify-between">
                        <span>Queue Tasks:</span>
                        <span class="font-bold text-gray-700">3 Pending</span>
                    </p>

                    <p class="flex justify-between">
                        <span>Cron Jobs:</span>
                        <span class="font-bold text-gray-700">Running</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- LOWER WIDE PANEL (FULL-WIDTH INVENTORY STYLE PANEL) -->
    <div class="border border-gray-300 rounded-lg shadow-sm mt-4">

        <div class="bg-teal-500 text-white px-4 py-2 rounded-t-lg text-sm font-semibold tracking-wider">
            ACTIVITY LOG
        </div>

        <div class="p-5 space-y-3 text-sm">

            <div class="border-b pb-2 flex justify-between">
                <span>User admin performed update</span>
                <span class="text-gray-500">10:42</span>
            </div>

            <div class="border-b pb-2 flex justify-between">
                <span>Database backup completed</span>
                <span class="text-gray-500">09:15</span>
            </div>

            <div class="border-b pb-2 flex justify-between">
                <span>New user registered: johndoe</span>
                <span class="text-gray-500">08:31</span>
            </div>

        </div>
    </div>

</div>