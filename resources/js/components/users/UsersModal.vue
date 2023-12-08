<script setup>
import { ref, watch } from 'vue';
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
import {Spanish} from 'flatpickr/dist/l10n/es.js';

const checkboxImage = window.checkboxImage
const emits = defineEmits(["guardar"])
const props = defineProps({
    titulo: String
})

const idUsuario = ref()
const terms = ref(false)
const validacionerrores = ref(null)
const first_name = ref('');
const last_name = ref('');
const username = ref('');
const email = ref('');
const date_of_birth = ref('');
const password = ref('password')
const editing_password = ref(false)
const show_editing_password = ref(true)

const closemodal = () => {
    $("#usersmodal").modal("hide")
}

const guardarUsuario = () => {
    emits("guardar", {
        id: idUsuario.value,
        terms: terms.value,
        first_name: first_name.value,
        last_name: last_name.value,
        username: username.value,
        password: editing_password.value ? password.value : undefined,
        email: email.value,
        date_of_birth: date_of_birth.value,
    })
}
const cargarUsuario = (data) => {
    idUsuario.value = data?.id ?? null;
    terms.value = data?.terms ?? '';
    first_name.value = data?.first_name ?? '';
    last_name.value = data?.last_name ?? '';
    username.value = data?.username ?? '';
    email.value = data?.email ?? '';
    date_of_birth.value = data?.date_of_birth ?? '';
    password.value = data?.id ? "password" : '';
    editing_password.value = !(data?.id);
    show_editing_password.value = !!(data?.id);
    validacionerrores.value = null;
}

defineExpose({ cargarUsuario, closemodal, validacionerrores })
</script>
<template>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="usersmodal" tabindex="-1" aria-labelledby="modal_editar" aria-hidden="true">
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
                        <div class="flex gap-2">
                            <div class="input-area flex-1">
                                <label for="first_name" class="form-label">Nombre*</label>
                                <input v-model="first_name" required id="first_name" type="text" class="form-control" placeholder="Nombre">
                                <span v-if="validacionerrores && validacionerrores.first_name"
                                    v-for="message in validacionerrores.first_name"
                                    class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                            </div>
                            <div class="input-area flex-1">
                                <label for="last_name" class="form-label">Apellido*</label>
                                <input v-model="last_name" required id="last_name" type="text" class="form-control" placeholder="Apellido">
                                <span v-if="validacionerrores && validacionerrores.last_name"
                                    v-for="message in validacionerrores.last_name"
                                    class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                            </div>
                        </div>
                        <div class="input-area">
                            <label for="username" class="form-label">Nombre de usuario*</label>
                            <input v-model="username" required id="username" type="text" class="form-control" placeholder="Nombre de usuario">
                            <span v-if="validacionerrores && validacionerrores.username"
                                v-for="message in validacionerrores.username"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="input-area">
                            <label for="password" class="form-label">Contraseña*</label>
                            <input :disabled="!editing_password" v-model="password" required id="password" type="password" class="form-control" placeholder="Contraseña">
                            <span v-if="validacionerrores && validacionerrores.password"
                                v-for="message in validacionerrores.password"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="checkbox-area" v-if="show_editing_password">
                            <label class="inline-flex items-center cursor-pointer">
                                <input v-model="editing_password" type="checkbox" class="appearance-none" name="remember_me">
                                <span
                                    class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                    <img :src="checkboxImage" alt=""
                                        class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Editar contraseña</span>
                            </label>
                        </div>
                        <div class="input-area">
                            <label for="email" class="form-label">Email*</label>
                            <input v-model="email" required id="email" type="text" class="form-control" placeholder="Email">
                            <span v-if="validacionerrores && validacionerrores.email"
                                v-for="message in validacionerrores.email"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div>
                            <label for="date_of_birth" class=" form-label">Fecha de nacimiento</label>
                            <flat-pickr id="date_of_birth" :config="{ allowInput: true, maxDate: 'today' }" class="form-control py-2 flatpickr flatpickr-input" v-model="date_of_birth" />
                            <span v-if="validacionerrores && validacionerrores.date_of_birth"
                                v-for="message in validacionerrores.date_of_birth"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>
                        <div class="checkbox-area" v-if="!show_editing_password">
                            <label class="inline-flex items-center cursor-pointer">
                                <input v-model="terms" type="checkbox" class="appearance-none" name="remember_me">
                                <span
                                    class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                    <img :src="checkboxImage" alt=""
                                        class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Acepto los terminos y condiciones</span>
                            </label>
                            <span v-if="validacionerrores && validacionerrores.terms"
                                v-for="message in validacionerrores.terms"
                                class="font-Inter block text-sm text-danger-500 pt-2">{{ message }}</span>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-between items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                        <button data-bs-dismiss="modal" class="btn inline-flex justify-center btn-danger">Cancelar</button>
                        <button @click="guardarUsuario"
                            class="btn inline-flex justify-center btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
