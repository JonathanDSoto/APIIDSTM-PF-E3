import { createApp } from 'vue/dist/vue.esm-bundler';
import './bootstrap';
import CategoriesPage from "./pages/CategoriesPage.vue"
import DifficultiesPage from "./pages/DifficultiesPage.vue"
import TagsPage from "./pages/TagsPage.vue"
import NonogramsPage from "./pages/NonogramsPage.vue"
import UsersPage from "./pages/UsersPage.vue"
createApp({
    components:{
        CategoriesPage,
        DifficultiesPage,
        TagsPage,
        NonogramsPage,
        UsersPage,
    }
}).mount("#content_layout")
