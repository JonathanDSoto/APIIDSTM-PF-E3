<script setup>
import { ref, watch } from 'vue';
const checkboxImage = window.checkboxImage
const emits = defineEmits(["guardar"])
const props = defineProps({
    titulo: String
})
const nombreEtiqueta = ref("")
const colorEtiqueta = ref("")
const idEtiqueta = ref()
const validacionerrores = ref(null)

const closemodal = () => {
    $("#tagsmodal").modal("hide")


}
const guardarEtiqueta = () => {
    emits("guardar", {
        name: nombreEtiqueta.value,
        color: colorEtiqueta.value,
        id: idEtiqueta.value
    })
}
const cargarEtiqueta = (data) => {
    nombreEtiqueta.value = data?.name;
    colorEtiqueta.value = data?.color;
    idEtiqueta.value = data?.id;
    validacionerrores.value = null;
}

defineExpose({ cargarEtiqueta, closemodal, validacionerrores })
</script>
<template>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="tagsmodal" tabindex="-1" aria-labelledby="modal_editar" aria-hidden="true">
        <div class="modal-dialog top-1/2 !-translate-y-1/2 relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-5 rounded-t dark:border-slate-600 bg-primary-500">
                        <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                            {{ props.titulo }}
                        </h3>
                        <button type="button"
                            class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-600 dark:hover:text-white"
                            data-bs-dismiss="modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-4">
                        <div class="input-area">
                            <label for="name" class="form-label">Nombre*</label>
                            <input v-model="nombreEtiqueta" required id="name" type="text" class="form-control"
                                placeholder="Nombre">
                            <span v-if="validacionerrores && validacionerrores.name"
                                v-for="message in validacionerrores.name"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="input-area">
                            <label for="color" class="form-label">Color*</label>
                            <input v-model="colorEtiqueta" required id="color" type="color" class="form-control"
                                placeholder="Color">
                            <span v-if="validacionerrores && validacionerrores.color"
                                v-for="message in validacionerrores.color"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-between items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                        <button data-bs-dismiss="modal" class="btn inline-flex justify-center btn-danger">Cancelar</button>
                        <button @click="guardarEtiqueta"
                            class="btn inline-flex justify-center btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

