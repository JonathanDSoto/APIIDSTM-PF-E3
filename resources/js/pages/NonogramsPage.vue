<script setup>
import NonoBreadcrums from '../components/NonoBreadcrums.vue';
import NonogramsModal from '../components/nonograms/NonogramsModal.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import { getNonograms, getNonogram, updateNonogram, addNonogram, deleteNonogram } from '../api/nonograms';
import { ref } from "vue"
import Swal from "sweetalert2"
import { computed } from 'vue'
const props = defineProps({
    difficulties: Object,
    categories: Object
})
const difficulties = computed(() => {
    return JSON.parse(props.difficulties)
})
const categories = computed(() => {
    return JSON.parse(props.categories)
})

DataTable.use(DataTablesCore);
const DataTableoptions = {
    searching: false,
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
    { data: "id" },
    { data: "name" },
    {
        data: null,
        render: function (data) {
            return '<div>' + data.colors.map(color => `<div class="inline-block w-5 h-5 rounded-full border-2 border-gray shadow-2xl mr-2" style="background: ${color}"></div>`).join('') + '</div>'
        }
    },
    {
        data: null,
        render: function (data) {
            return `${data.width * data.height} (${data.width} x ${data.height})`;
        }
    },
    {
        data: null,
        render: function (data) {
            const dificultad = (difficulties.value ?? []).find(e => e.id == data.difficulty_id || e.id == data.difficulty?.id)?.name ?? '< dificultad no definida >'
            return `${dificultad}`;
        }
    },
    {
        data: null,
        render: function (data) {
            const categoria = (categories.value ?? []).find(e => e.id == data.category_id || e.id == data.category?.id)?.name ?? '< categoria no definida >'
            return `${categoria}`;
        }
    },
    {
        data: null, render: function (data, type, row, meta) {
            return `<div>
        <div class="relative">
            <div class="dropdown relative">
                <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                </button>
                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                    <li>
                        <button data-bs-toggle="modal" data-bs-target="#nonogramsmodal" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center rtl:space-x-reverse " onclick = "editarnonograma(${data.id})">
                            <span class="text-base">
                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                            </span>
                            <span class="text-sm">Editar</span>
                        </button>
                    </li>
                    <li>
                        <button onclick="eliminarnonograma(${data.id})" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center rtl:space-x-reverse ">
                            <span class="text-base">
                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                            </span>
                            <span class="text-sm">Eliminar</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>`
        }
    }

]
const DataTableajax = (data, callback) => {
    getNonograms(parseInt(data.start / data.length) + 1, data.length).then((nonograms) => {
        callback({
            draw: data.draw,
            data: nonograms.data,
            recordsTotal: nonograms.meta.total,
            recordsFiltered: nonograms.meta.total,
        })
    })
}
const nombremodal = ref()
const modal = ref()
const datatable = ref()
const guardarNonograma = (e) => {
    if (e.id) {
        Swal.showLoading()
        updateNonogram(e.id, e).then(() => {
            Swal.fire({
                icon: 'success',
                onBeforeOpen() {
                    Swal.hideLoading()
                },
                title: 'Se ha actualizado la nonograma exitosamente',
            })
            modal.value.closemodal()
            datatable.value.dt.ajax.reload()
        }).catch((e) => {
            if (e.response?.status == 422) {
                modal.value.validacionerrores = e.response.data.errors
                Swal.close()
            } else {
                Swal.fire({
                    icon: 'error',
                    onBeforeOpen() {
                        Swal.hideLoading()
                    },
                    title: 'Ocurrio un error del lado del servidor, intente nuevamente mas tarde',
                })
            }
        })

    } else {
        Swal.showLoading()
        addNonogram(e).then(() => {
            Swal.fire({
                icon: 'success',
                onBeforeOpen() {
                    Swal.hideLoading()
                },
                title: 'Se ha agregado la nonograma exitosamente',
            })
            modal.value.closemodal()
            datatable.value.dt.ajax.reload()
        }).catch((e) => {
            if (e.response?.status == 422) {
                modal.value.validacionerrores = e.response.data.errors
                Swal.close()
            } else {
                Swal.fire({
                    icon: 'error',
                    onBeforeOpen() {
                        Swal.hideLoading()
                    },
                    title: 'Ocurrio un error del lado del servidor, intente nuevamente mas tarde',
                })
            }
        })
    }

}
const agregarnonograma = () => {
    nombremodal.value = "Agregar nonograma"
    modal.value.cargarNonograma()
}
const editarnonograma = (id) => {
    nombremodal.value = "Editar nonograma"
    getNonogram(id).then(modal.value.cargarNonograma)
}
window.editarnonograma = editarnonograma;

const eliminarnonograma = (id) => {
    Swal.fire({
        title: '¿Seguro de eliminar esta nonograma ?',
        showCancelButton: true,
        confirmButtonText: 'Si, estoy seguro!',
        cancelButtonText: `Cancelar`,
        allowEnterKey: false,
        allowOutsideClick: false,
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.showLoading()
            deleteNonogram(id).then(() => {
                datatable.value.dt.ajax.reload()
                Swal.fire({
                    icon: 'success',
                    onBeforeOpen() {
                        Swal.hideLoading()
                    },
                    title: 'Se ha eliminado la nonograma exitosamente',
                })
            })
        }
    })



}
window.eliminarnonograma = eliminarnonograma;
</script>
<template>
    <NonoBreadcrums first="Nonogramas"></NonoBreadcrums>


    <div class=" space-y-5">
        <div class="card">
            <header class=" card-header noborder">
                <h4 class="card-title">Nonogramas
                </h4>
                <button @click="agregarnonograma" class="btn inline-flex justify-center btn-success" data-bs-toggle="modal"
                    data-bs-target="#nonogramsmodal">Añadir nonograma</button>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                    <span class=" col-span-8  hidden"></span>
                    <span class="  col-span-4 hidden"></span>
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <DataTable class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700"
                                ref="datatable" :ajax="DataTableajax" :options="DataTableoptions" :columns="DataTabledata">
                                <thead class="border-t border-slate-100 dark:border-slate-800">

                                    <tr>

                                        <th scope="col" class=" table-th w-[100px] ">
                                            Id
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Nombre
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Colores
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Tamaño
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Dificultad
                                        </th>
                                        <th scope="col" class=" table-th ">
                                            Categoria
                                        </th>
                                        <th scope="col" class=" table-th w-[100px] ">
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
    <NonogramsModal :categories="categories" :difficulties="difficulties" :titulo="nombremodal" ref="modal" @guardar="guardarNonograma">

    </NonogramsModal>
</template>
