<script setup>
const props=defineProps({
    first: Object,
    second: Object
})
</script>
<template>
    <!-- BEGIN: Breadcrumb -->
    <div class="mb-5">
        <ul class="m-0 p-0 list-none">
            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                <a href="/admin">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                {{ props.first }}
                <iconify-icon v-if="props.second" icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
            </li>

            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                {{ props.second }}
            </li>

        </ul>

    </div>
    <!-- END: BreadCrumb -->
</template>
