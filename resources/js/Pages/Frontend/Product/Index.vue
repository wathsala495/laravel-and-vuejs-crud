<template>
<Head title="Products" />
  <Frontend>
     <div v-if="$page.props.flash.message" class="alert bg-green-200 mt-4 mx-5 px-4 py-3">
        {{ $page.props.flash.message }}
      </div>
    <div class="mt-4 mx-4">
      <div class="flex justify-center">
       <h5>Product Lists</h5>
       <Link :href="route('products.create')" class="bg-blue-500 text-white p-3 rounded mb-4">Add Product</Link>
      </div>
      <table class="w-full bg-white border border-gray-200 shadow">
      <thead>
      <tr>
      <th class="py-2 px-4 text-left border">Id</th>
      <th class="py-2 px-4 text-left border">Name</th>
      <th class="py-2 px-4 text-left border">Price</th>
      <th class="py-2 px-4 text-left border">Action</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="(item,index) in products.data" :key="index">
      <td class="py-2 px-4 border">{{item.id}}</td>
      <td class="py-2 px-4 border">{{item.name}}</td>
      <td class="py-2 px-4 border">{{item.price}}</td>
      <td class="py-2 px-4 border">
          <Link :href="route('products.show',item.id)" class="bg-blue-300 text-sm px-2 py-1 text-dark rounded me-2 inline-block">Show</Link>
          <Link :href="route('products.edit',item.id)" class="bg-green-500 text-sm px-2 py-1 text-white rounded me-2 inline-block">Edit</Link>
          <button @click="deleteProduct(item.id)" type="submit" class="bg-red-500 text-sm px-2 py-1 text-white rounded me-2 inline-block">Delete</button>
      </td>
      </tr>
      </tbody>
      
      </table>
      <Pagination class="mt-4" :links="products.links"/>
    </div>
  </Frontend>
   


</template>

<script setup>
import Frontend from '@/Layouts/FrontendLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import {Head,Link,useForm} from '@inertiajs/vue3';

defineProps({
  products:[Object,Array],
})
const form=useForm({})

const deleteProduct=(productId)=>{
   if(confirm('Are you sure to delete this product?')){
    form.delete(route('products.destroy',productId))
}
}
</script>

<style>
</style>