import { createApp } from 'vue/dist/vue.esm-bundler';
import './bootstrap';
import CategoriesPage from "./pages/CategoriesPage.vue"
import DifficultiesPage from "./pages/DifficultiesPage.vue"
createApp({
    components:{
        CategoriesPage,
        DifficultiesPage
    }
}).mount("#content_layout")
