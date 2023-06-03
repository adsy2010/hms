<script setup>
import Pagination from "@/Pages/Settings/Roles/Pagination.vue";

let emit = defineEmits([]);
let props = defineProps({
    cols: Array,
    items: Object,
    showPagination: {
        type: Boolean,
        default: true
    }
});

</script>

<template>
    <div class="w-full">
        <slot name="buttons"/>
        <slot name="filters"/>
        <table class="w-full">
            <tr class="border-b border-b-gray-300">
                <th
                    v-for="col in cols"
                    class="px-3 py-2"
                    :class="col.classes ?? 'text-left'"
                >
                    {{col.name}}
                </th>
            </tr>

            <slot/>
        </table>

        <Pagination v-if="showPagination && items" :items="items"/>
    </div>

</template>
