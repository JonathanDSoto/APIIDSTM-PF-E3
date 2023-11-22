@extends("layouts.app")
@section("content")


              <!-- BEGIN: Breadcrumb -->
              <div class="mb-5">
                <ul class="m-0 p-0 list-none">
                  <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                    <a href="index.html">
                      <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                      <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                    </a>
                  </li>
                  <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                    Categorias
                  </li>
                </ul>
              </div>
              <!-- END: BreadCrumb -->


              <div class=" space-y-5">
                <div class="card">
                  <header class=" card-header noborder">
                    <h4 class="card-title">Categorias
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

                                <th scope="col" class=" table-th w-[100px] ">
                                  Id
                                </th>

                                <th scope="col" class=" table-th ">
                                  Nombre
                                </th>

                                <th scope="col" class=" table-th w-[100px] ">
                                  Accion
                                </th>

                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                            @for ($i = 1; $i < 50; $i++)
                                <tr>
                                    <td class="table-td">{{ $i }}</td>
                                    <td class="table-td ">Categoria {{ $i}}</td>
                                    <td class="table-td ">
                                        <div>
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
              <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal_editar" tabindex="-1" aria-labelledby="modal_editar" aria-hidden="true">
    <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 rounded-t dark:border-slate-600 bg-primary-500">
                    <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                        Editar Categoria
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
