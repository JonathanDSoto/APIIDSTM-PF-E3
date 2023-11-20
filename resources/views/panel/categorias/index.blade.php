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
                                                            <a href="invoive-preview.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center rtl:space-x-reverse ">
                                                                <span class="text-base">
                                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                                </span>
                                                                <span class="text-sm">Edit</span>
                                                            </a>
                                                        </li>
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
@endsection
