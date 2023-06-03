<script setup>

let props = defineProps({
    items: Object,
});
let emit = defineEmits([]);

</script>
<template>
  <div class="pt-6 flex justify-between">
    <div class="grow">Showing {{items.from}} to {{items.to}} of {{items.total}} entries</div>
    <div class="flex">
      <div v-for="link in items.links" class="flex items-center">
        <Link class="mx-2 hover:text-indigo-600" v-if="link.label.includes('Previous') || link.label.includes('Next')" v-html="link.label" :href="link.url"></Link>
        <Link v-else class="mx-0 py-1 px-2 rounded border border-white hover:inset-1 hover:border hover:border-indigo-600" :class="{'bg-indigo-600 text-white': link.active}" :href="link.url">
          {{link.label}}
        </Link>
      </div>
    </div>
  </div>
</template>
