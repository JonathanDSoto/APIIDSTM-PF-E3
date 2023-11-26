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
            <a href="/admin/nonogramas">Nonogramas</a>
            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
        </li>
        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
            Detalles
        </li>
    </ul>
</div>
<!-- END: BreadCrumb -->
<div class="space-y-5 profile-page">
    <div class="grid grid-cols-12 gap-6">
        <div class="lg:col-span-4 col-span-12">
            <div class="card">
                <header class="card-header gap-4">
                    <h4 class="card-title flex-1">Nonograma 1</h4>
                    <h4 class="card-title flex items-center" title="Calificación 8/10">
                        <iconify-icon icon="heroicons-outline:star" class="relative mr-1"></iconify-icon>
                        <span class="text-lg self-start">8</span>/<span class="self-end font-normal text-sm">10</span>
                    </h4>
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
                    <div class="flex justify-center py-2">
                        <table>
                            <tr>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]"  style="background: #fb0366"></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                                <td class="border border-gray-500 w-[24px] h-[24px]" ></td>
                            </tr>
                        </table>
                    </div>
                    <h5 class="flex flex-col gap-1 mb-4">
                        <span class="font-medium leading-5">Tamaño</span>
                        <span class="leading-3">Grande (5 x 5)</span>
                    </h5>
                    <h5 class="flex flex-col gap-1 mb-4">
                        <span class="font-medium leading-5">Categoría</span>
                        <span class="leading-3">Cute</span>
                    </h5>
                    <h5 class="flex flex-col gap-1 mb-4">
                        <span class="font-medium leading-5">Dificultad</span>
                        <span class="leading-3">Preschooler</span>
                    </h5>
                    <h5 class="flex flex-col gap-1 mb-4">
                        <span class="font-medium leading-5">Etiquetas</span>
                        <div class="flex gap-2">
                            <span class="badge bg-primary-500 text-white capitalize pill">Fun</span>
                            <span class="badge bg-primary-500 text-white capitalize pill">Love</span>
                            <span class="badge bg-primary-500 text-white capitalize pill">For-kids</span>
                            <span class="badge bg-primary-500 text-white capitalize pill">Heart</span>
                        </div>
                    </h5>
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
                                                Usuario
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
                                            <td class="table-td ">{{ fake()->userName() }}</td>
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
                    <h4 class="card-title">Calificaciones</h4>
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
                                                Usuario
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
                                            <td class="table-td ">{{ fake()->userName() }}</td>
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
                        Editar nonograma
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
                        <label for="sizes_select" class="form-label">Tamaño*</label>
                        <select required id="sizes_select" class="form-control">
                            <option value="size1" class="dark:bg-slate-700">Tamaño 1</option>
                            <option value="size2" class="dark:bg-slate-700">Tamaño 2</option>
                            <option value="size3" class="dark:bg-slate-700">Tamaño 3</option>
                            <option value="size4" class="dark:bg-slate-700">Tamaño 4</option>
                        </select>
                    </div>
                    <div class="input-area">
                        <label for="category_select" class="form-label">Categoría*</label>
                        <select required id="category_select" class="form-control">
                            <option value="category1" class="dark:bg-slate-700">Categoría 1</option>
                            <option value="category2" class="dark:bg-slate-700">Categoría 2</option>
                            <option value="category3" class="dark:bg-slate-700">Categoría 3</option>
                            <option value="category4" class="dark:bg-slate-700">Categoría 4</option>
                        </select>
                    </div>
                    <div class="input-area">
                        <label for="difficulty_select" class="form-label">Dificultad*</label>
                        <select required id="difficulty_select" class="form-control">
                            <option value="difficulty1" class="dark:bg-slate-700">Dificultad 1</option>
                            <option value="difficulty2" class="dark:bg-slate-700">Dificultad 2</option>
                            <option value="difficulty3" class="dark:bg-slate-700">Dificultad 3</option>
                            <option value="difficulty4" class="dark:bg-slate-700">Dificultad 4</option>
                        </select>
                    </div>
                    <div>
                      <label for="tags_select" class="form-label">Etiquetas</label>
                      <select name="tags_select" id="tags_select" class="select2 form-control w-full mt-2 py-2" multiple="multiple">
                        <option selected="selected" value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 1</option>
                        <option value="option2" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 2</option>
                        <option value="option3" class=" inline-block font-Inter font-normal text-sm text-slate-600">Option 3</option>
                      </select>
                    </div>
                    <script>
                        window.addEventListener('load', () => {
                            $('#tags_select').select2()
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
