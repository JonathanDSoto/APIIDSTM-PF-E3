<script setup>
import NonoBreadcrums from '../components/NonoBreadcrums.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import { getCategories } from '../api/categories';
DataTable.use(DataTablesCore);
const DataTableoptions = {
    serverSide: true
}
const DataTabledata = [
    {data:"id"},{data:"name"},
    {data: null,render: function ( data, type, row, meta ) {
  return 'Acciones';
}}

]
const DataTableajax = (data, callback) => {
    getCategories(parseInt(data.start/data.length)+1).then((categories) => {
        callback({
            draw: data.draw,
            recordsTotal: categories.total,recordsFiltered: categories.total,
            data:categories.data,
            recordsTotal: categories.total,
            recordsFiltered: categories.total,
        })
    })
}

</script>
<template>
    <NonoBreadcrums first="Categorias"></NonoBreadcrums>


    <div class=" space-y-5">
        <div class="card">
            <header class=" card-header noborder">
                <h4 class="card-title">Categorias
                </h4>
                <button class="btn inline-flex justify-center btn-success">Añadir categoria</button>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class=" col-span-8  hidden"></span>
                    <span class="  col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <DataTable class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                            :ajax="DataTableajax" :options="DataTableoptions" :columns="DataTabledata" >
                                <thead class="border-t border-slate-100 dark:border-slate-800">
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
                            </DataTable>
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
</template>

