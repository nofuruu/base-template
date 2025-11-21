<aside id="sidebar"
    class="fixed w-64 shadow-md h-screen left-0 top-0 rounded-2xl shadow-sm h-full bg-white z-50 transition-all duration-300">

    <button id="toggle"
        class="absolute right-[-14px] top-5 w-7 h-7 rounded-full bg-teal-500 text-white items-center justify-center shadow-md hover:bg-teal-600 transition z-50">
        <i class="fa fa-chevron-left" id="toggleIcon"></i>
    </button>

    <div class="flex items-start gap-2 px-5 py-4 boder-b border-gray-100">
        <span class="text-2xl font-bold text-gray-800" id="sidebarLabel">
            <img src="<?= base_url('public/images/logo.png') ?>" alt="logo" class="w-17 h-17">
        </span>
    </div>

    <nav class="flex-1 px-3 py-3 space-y-1">

        <a href="<?= base_url('dashboard') ?>"
            class="flex items-center p-2 rounded-lg transition hover:bg-gray-100">
            <div class="w-7 h-7  flex items-center justify-center opacity-90">
                <i class='bx bx-grid-alt'></i>
            </div>
            <span class="ml-3 text-sm font-medium text-gray-700 menu-label">Dashboard</span>
        </a>

        <a href="#"
            class="flex items-center p-2 rounded-lg transition hover:bg-gray-100">
            <div class="w-7 h-7 flex items-center justify-center opacity-90">
                <i class='bx  bx-cog'></i>
            </div>
            <span class="ml-3 text-sm font-medium text-gray-700 menu-label">Settings</span>
        </a>

        <a href="#" id="subMenuToggle"
            class="flex items-center text-gray-600 p-2 rounded-lg transition hover:bg-gray-100">
            <div class="w-7 h-7 flex items-center justify-center opacity-90" id="subIcon">
                <i class="fa-solid fa-circle-arrow-down"></i>
            </div>
            <span class="ml-3 text-sm font-medium text-gray-700 menu-label">Settings</span>
        </a>

    </nav>








</aside>