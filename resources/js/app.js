import { createApp } from 'vue/dist/vue.esm-bundler';
import './bootstrap';
import CategoriesPage from "./pages/CategoriesPage.vue"
createApp({
    components:{
        CategoriesPage
    }
}).mount("#content_layout")
