<template>
  <li>
    <div class="form-row mt-2">
      <div class="col">
        <input
          type="text"
          class="form-control"
          placeholder="Product"
          v-model="item.product"
          @input="inputProduct"
        />
      </div>
      <div class="col">
        <input
          type="number"
          class="form-control"
          placeholder="Cost"
          v-model="item.cost"
         @input="inputProduct"
        />
      </div>
    </div>
  </li>
</template>

<script>
export default {
    
    data(){
        return{
            item:{
                product:'',
                cost:''
            }
        }
    },
    methods : {
        inputProduct(e){
            //set th model
            this.item = e.target.value
            this.$emit('messageChanged', this.item)
        }
    }
};
</script>

<style>
</style>