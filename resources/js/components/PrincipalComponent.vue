<template>
  <div>
    <ol>
      <form-products></form-products>
      <form-products></form-products>
      <form-products></form-products>
      <component :is="addNewForms" v-for="(addNewForms, index) in addNewForms" :key="index" ></component>
    </ol>
    <button class="btn btn-primary" @click="addForm">ADD+</button>
  </div>
</template>

<script>
import FormProducts from "../components/FormProducts";
export default {
  components: {
    FormProducts,
  },
  data(){
      return{
          addNewForms:[]
      }
  },

  mounted() {
    console.log("Component mounted.");
  },
  methods:{
      addForm(){
          this.addNewForms.push(FormProducts)
      }
  }
};
</script>
