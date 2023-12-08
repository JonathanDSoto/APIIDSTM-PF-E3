<script setup>
import { ref, watch } from 'vue';
import slugify from "slugify";
import "nonogram-editor";

const checkboxImage = window.checkboxImage
const emits = defineEmits(["guardar"])
const props = defineProps({
    titulo: String,
    difficulties: Array,
    categories: Array
})
const nombreNonograma = ref("")
const slugNonograma = ref("")
const idNonograma = ref()
const category_idNonograma = ref("");
const difficulty_idNonograma = ref("");
const generarslug = ref(true)
const editorNonograma = ref()

const validacionerrores = ref(null)
watch(nombreNonograma, (nuevonombre, viejonombre) => {
    if (generarslug.value) {
        slugNonograma.value = slugify(nuevonombre ?? "", {
            lower: true,      // convert to lower case, defaults to `false`
            strict: false,     // strip special characters except replacement, defaults to `false`
            locale: 'es',      // language code of the locale to use
            trim: true         // trim leading and trailing replacement chars, defaults to `true`
        })
    }

})
const closemodal = () => {
    $("#nonogramsmodal").modal("hide")


}
const guardarNonograma = () => {
    const data = editorNonograma.value.game.data;
    emits("guardar", {
        category_id: category_idNonograma.value,
        difficulty_id: difficulty_idNonograma.value,
        width: data.game_data.width,
        height: data.game_data.height,
        data: data.data,
        colors: editorNonograma.value.colors,
        name: nombreNonograma.value,
        slug: slugNonograma.value,
        id: idNonograma.value
    })
}
const cargarNonograma = (data) => {
    if (data?.data) {
        editorNonograma.value.colors = data.colors;
        editorNonograma.value.data = {
            game_data: {
                width: data.width, height: data.height
            },
            data: data.data,
        }
    }
    nombreNonograma.value = data?.name;
    slugNonograma.value = data?.slug;
    idNonograma.value = data?.id;
    validacionerrores.value = null;
    category_idNonograma.value = data?.category?.id;
    difficulty_idNonograma.value = data?.difficulty?.id;
    generarslug.value = (slugNonograma.value == slugify(nombreNonograma.value, {
        lower: true,      // convert to lower case, defaults to `false`
        strict: false,     // strip special characters except replacement, defaults to `false`
        locale: 'es',      // language code of the locale to use
        trim: true         // trim leading and trailing replacement chars, defaults to `true`
    }))
}

defineExpose({ cargarNonograma, closemodal, validacionerrores })
</script>
<template>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="nonogramsmodal" tabindex="-1" aria-labelledby="modal_editar" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
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
                        <nonogram-editor ref="editorNonograma" editable resizable addable></nonogram-editor>
                        <div class="input-area">
                            <label for="name" class="form-label">Nombre*</label>
                            <input v-model="nombreNonograma" required id="name" type="text" class="form-control"
                                placeholder="Nombre">
                            <span v-if="validacionerrores && validacionerrores.name"
                                v-for="message in validacionerrores.name"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="input-area">
                            <label for="slug" class="form-label">Slug*</label>
                            <input :disabled="generarslug" v-model="slugNonograma" required id="slug" type="text"
                                class="form-control" placeholder="Slug">
                            <span v-if="validacionerrores && validacionerrores.slug"
                                v-for="message in validacionerrores.slug"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="checkbox-area">
                            <label class="inline-flex items-center cursor-pointer">
                                <input v-model="generarslug" type="checkbox" class="appearance-none" name="remember_me">
                                <span
                                    class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                    <img :src="checkboxImage" alt=""
                                        class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Generar Slug
                                    automaticamente</span>
                            </label>
                        </div>
                        <div class="input-area">
                            <label for="difficulty" class="form-label">Dificultad</label>
                            <select v-model="difficulty_idNonograma" class="form-control" name="difficulty" id="difficulty">
                                <option v-for="difficulty in props.difficulties" :value="difficulty.id">{{ difficulty.name
                                }}</option>
                            </select>
                            <span v-if="validacionerrores && validacionerrores.difficulty_id"
                                v-for="message in validacionerrores.difficulty_id"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="input-area">
                            <label for="category" class="form-label">Categoria</label>
                            <select v-model="category_idNonograma" class="form-control" name="category" id="category">
                                <option v-for="category in props.categories" :value="category.id">{{ category.name
                                }}</option>
                            </select>
                            <span v-if="validacionerrores && validacionerrores.category_id"
                                v-for="message in validacionerrores.category_id"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-between items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                        <button data-bs-dismiss="modal" class="btn inline-flex justify-center btn-danger">Cancelar</button>
                        <button @click="guardarNonograma"
                            class="btn inline-flex justify-center btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

