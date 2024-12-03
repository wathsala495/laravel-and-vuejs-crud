<template>
 
  <Frontend>
     <Head title="AboutUs Page"/>
      <h1>{{title}} Page</h1>
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