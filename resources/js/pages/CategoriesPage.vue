<script setup>
import NonoBreadcrums from '../components/NonoBreadcrums.vue';
import CategoriesModal from '../components/categories/CategoriesModal.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import { getCategories } from '../api/categories';
DataTable.use(DataTablesCore);
const DataTableoptions = {
    serverSide: true,
    createdRow: (e) => {
        e.getElementsByTagName('td').forEach(e => e.classList.add('table-td'))
    },
    dom: "<'grid grid-cols-12 gap-5 px-6 mt-6'<'col-span-4'l><'col-span-8 flex justify-end'f><'#pagination.flex items-center'>><'min-w-full't><'flex justify-end items-center'p>",
    language: {
        "lengthMenu": "Show _MENU_ entries",
        "paginate": {
            "previous": "<iconify-icon icon=\"ic:round-keyboard-arrow-left\"></iconify-icon>",
            "next": "<iconify-icon icon=\"ic:round-keyboard-arrow-right\"></iconify-icon>"
        },
    },
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
            data:categories.data,
            recordsTotal: categories.meta.total,
            recordsFiltered: categories.meta.total,
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
                <button class="btn inline-flex justify-center btn-success" data-bs-toggle="modal" data-bs-target="#categoriesmodal">Añadir categoria</button>
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

                                    <th scope="col" class=" table-th !w-[100px] ">
                                        Accion
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                            </tbody>
                        </DataTable>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<CategoriesModal>

</CategoriesModal>
</template>

