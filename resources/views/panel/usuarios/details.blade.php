@extends('layouts.app')
@section('content')

<!-- BEGIN: Breadcrumb -->
<div class="mb-5">
    <ul class="m-0 p-0 list-none">
        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
            <a href="/admin">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
            </a>
        </li>
        <li class="inline-block relative text-sm text-primary-500 font-Inter ">
            <a href="/admin/usuarios">Usuarios</a>
            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
        </li>
        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
            Detalles
        </li>
    </ul>
</div>
<!-- END: BreadCrumb -->
<div class="space-y-5 profile-page">
    <div class="profiel-wrap px-[35px] pb-10 md:pt-[84px] pt-10 rounded-lg bg-white dark:bg-slate-800 lg:flex lg:space-y-0 space-y-6 justify-between items-end relative z-[1]">
        <div class="bg-slate-900 dark:bg-slate-700 absolute left-0 top-0 md:h-1/2 h-[150px] w-full z-[-1] rounded-t-lg"></div>
        <div class="profile-box flex-none md:text-start text-center">
            <div class="md:flex items-end md:space-x-6 rtl:space-x-reverse">
                <div class="flex-none">
                    <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4 ring-slate-100 relative">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="" class="w-full h-full object-cover rounded-full">
                        <a href="https://dashcode-html.codeshaper.tech/profile-setting" class="absolute right-2 h-8 w-8 bg-slate-50 text-slate-600 rounded-full shadow-sm flex flex-col items-center justify-center md:top-[140px] top-[100px]">
                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="text-2xl font-medium text-slate-900 dark:text-slate-200 mb-[3px]">
                        Albert Flores
                    </div>
                    <div class="text-sm font-normal text-slate-600 dark:text-slate-400">
                        @albert_f
                    </div>
                </div>
            </div>
        </div>
        <!-- end profile box -->
        <div class="profile-info-500 md:flex md:text-start text-center flex-1 max-w-[564px] md:space-y-0 space-y-4">
            <div class="flex-1">
                <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                    24/Nov/2023
                </div>
                <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                    Cuenta creada
                </div>
            </div>
            <!-- end single -->
            <div class="flex-1">
                <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                    10
                </div>
                <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                    Partidas completadas
                </div>
            </div>
            <!-- end single -->
            <div class="flex-1">
                <div class="text-base text-slate-900 dark:text-slate-300 font-medium mb-1">
                    50
                </div>
                <div class="text-sm text-slate-600 font-light dark:text-slate-300">
                    pertidas guardadas
                </div>
            </div>
            <!-- end single -->
        </div>
        <!-- profile info-500 -->
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-4 col-span-12">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title">Información personal</h4>
                    <div class="relative">
                        <div class="dropdown relative">
                            <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                            </button>
                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#modal_editar" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </span>
                                        <span class="text-sm">Editar</span>
                                    </button>
                                </li>
                                <li>
                                    <a href="#" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                        </span>
                                        <span class="text-sm">Eliminar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="card-body p-6">
                    <ul class="list space-y-8">
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:envelope"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    EMAIL
                                </div>
                                <a href="mailto:someone@example.com" class="text-base text-slate-600 dark:text-slate-50">
                                    a_flores@gmail.com
                                </a>
                            </div>
                        </li>
                        <!-- end single list -->
                        <li class="flex space-x-3 rtl:space-x-reverse">
                            <div class="flex-none text-2xl text-slate-600 dark:text-slate-300">
                                <iconify-icon icon="heroicons:calendar"></iconify-icon>
                            </div>
                            <div class="flex-1">
                                <div class="uppercase text-xs text-slate-500 dark:text-slate-300 mb-1 leading-[12px]">
                                    BIRTHDAY
                                </div>
                                <a href="tel:0189749676767" class="text-base text-slate-600 dark:text-slate-50">
                                    01/Nov/2002
                                </a>
                            </div>
                        </li>
                        <!-- end single list -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="lg:col-span-8 col-span-12">
            <div class="card ">
                <header class="card-header">
                    <h4 class="card-title">Estadísticas mensuales
                    </h4>
                </header>
                <div class="card-body">
                    <div id="areaChart"></div>
                </div>
            </div>
            <div class="card mt-5">
                <header class=" card-header noborder">
                    <h4 class="card-title">Partidas guardadas
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                        <tr>
                                            <th scope="col" class=" table-th w-[50px]">
                                                #
                                            </th>

                                            <th scope="col" class=" table-th ">
                                                Nonograma
                                            </th>

                                            <th scope="col" class=" table-th ">
                                                Completado
                                            </th>

                                            <th scope="col" class=" table-th w-[100px] ">
                                                Accion
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                        @for ($i = 1; $i < 50; $i++)
                                        <tr>
                                            <td class="table-td ">{{ $i}}</td>
                                            <td class="table-td ">Nonograma {{ $i}}</td>
                                            <td class="table-td ">{{ $i < 10 ? 'Sí' : 'No' }}</td>
                                            <td class="table-td ">
                                                <div>
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">

                                                                <li>
                                                                    <a href="#" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center rtl:space-x-reverse ">
                                                                        <span class="text-base">
                                                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                        </span>
                                                                        <span class="text-sm">Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        @endfor

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <header class=" card-header noborder">
                    <h4 class="card-title">Nonogramas calificados
                    </h4>
                </header>
                <div class="card-body px-6 pb-6">
                    <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                    <thead class=" border-t border-slate-100 dark:border-slate-800">
                                        <tr>
                                            <th scope="col" class=" table-th w-[50px]">
                                                #
                                            </th>

                                            <th scope="col" class=" table-th ">
                                                Nonograma
                                            </th>

                                            <th scope="col" class=" table-th ">
                                                Rating
                                            </th>

                                            <th scope="col" class=" table-th w-[100px] ">
                                                Accion
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                        @for ($i = 1; $i < 10; $i++)
                                        <tr>
                                            <td class="table-td ">{{ $i}}</td>
                                            <td class="table-td ">Nonograma {{ $i}}</td>
                                            <td class="table-td ">{{ fake()->numberBetween(0, 10) }} / 10</td>
                                            <td class="table-td ">
                                                <div>
                                                    <div class="relative">
                                                        <div class="dropdown relative">
                                                            <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                            </button>
                                                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                                <li>
                                                                    <a href="#" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center rtl:space-x-reverse ">
                                                                        <span class="text-base">
                                                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                        </span>
                                                                        <span class="text-sm">Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        @endfor

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal_editar" tabindex="-1" aria-labelledby="modal_editar" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 rounded-t dark:border-slate-600 bg-primary-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Editar informacion usuario
                    </h3>
                    <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <div class="input-area">
                        <label for="name" class="form-label">Nombre*</label>
                        <input required id="name" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-area">
                        <label for="name" class="form-label">Apellido*</label>
                        <input required id="name" type="text" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="input-area">
                        <label for="name" class="form-label">Nombre de usuario*</label>
                        <input required id="name" type="text" class="form-control" placeholder="Nombre de usuario">
                    </div>
                    <div class="input-area">
                        <label for="name" class="form-label">Email*</label>
                        <input required id="name" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div>
                        <label for="fecha_nacimiento" class=" form-label">Fecha de nacimiento</label>
                        <input class="form-control py-2 flatpickr flatpickr-input" id="fecha_nacimiento" type="text">
                    </div>
                    <script>
                        window.addEventListener('load', ()=>{
                            $("#fecha_nacimiento").flatpickr({
                                allowInput: true
                            })
                        })
                    </script>

                </div>
                <!-- Modal footer -->
                <div class="flex justify-between items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center btn-danger">Cancelar</button>
                    <button data-bs-dismiss="modal" class="btn inline-flex justify-center btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
