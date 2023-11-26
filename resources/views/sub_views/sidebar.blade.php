<div class="sidebar-wrapper group  hidden xl:w-[248px] xl:block">
	<div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
	<div class="logo-segment">
		<a class="flex items-center" href="/admin">
			<img src="{{ asset("assets/images/logo/logo-c.svg") }}" class="black_logo" alt="logo">
			<img src="{{ asset("assets/images/logo/logo-c-white.svg") }}" class="white_logo" alt="logo">
			<span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
		</a>
		<!-- Sidebar Type Button -->
		<div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
			<iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
			<iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
		</div>
		<button class="sidebarCloseIcon text-2xl inline-block md:hidden">
			<iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
		</button>
	</div>
	<div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
	opacity-0"></div>
	<div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
		<ul class="sidebar-menu">
			<li class="sidebar-menu-title">APPS</li>
			<!-- Map -->
			<li class="">
				<a href="/admin/usuarios" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="heroicons:user-circle"></iconify-icon>
						<span>Usuarios</span>
					</span>
				</a>
			</li>
			<!-- Icons -->
			<li class="">
				<a href="/admin/tamaños" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="geo:turf-size"></iconify-icon>
						<span>Tamaños</span>
					</span>
				</a>
			</li>
            <li class="">
				<a href="/admin/nivelDificultad" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="material-symbols-light:stairs-outline-rounded"></iconify-icon>
						<span>Niveles de dificultad</span>
					</span>
				</a>
			</li>
            <li class="">
				<a href="/admin/etiquetas" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="system-uicons:tags" flip="horizontal"></iconify-icon>
						<span>Etiquetas</span>
					</span>
				</a>
			</li>
            <li class="">
				<a href="/admin/categorias" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="carbon:data-categorical"></iconify-icon>
						<span>Categorias</span>
					</span>
				</a>
			</li>
            <li class="">
				<a href="/admin/nonogramas" class="navItem">
					<span class="flex items-center">
						<iconify-icon class=" nav-icon" icon="material-symbols-light:crossword-outline-rounded"></iconify-icon>
						<span>Nonogramas</span>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>
