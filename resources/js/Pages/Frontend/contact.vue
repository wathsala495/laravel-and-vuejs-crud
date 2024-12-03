<template>

  <Frontend>
    <Head title="Contact Page"/>
   <h1>{{title}} </h1>
  </Frontend>
   


</template>

<script setup>
import Frontend from '@/Layouts/FrontendLayout.vue';
import {Head} from '@inertiajs/vue3';

defineProps({
'title':String
})
</script>

<style>
</style>