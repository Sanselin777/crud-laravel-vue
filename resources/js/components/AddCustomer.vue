<template>
  <div class="">
    <h1 class="text-center mb-3 h3">NEW CUSTOMER AND PRODUCTS</h1>
    <form method="POST">
      <h2 class="h4">Customer</h2>
      <div class="form-row">
        <div class="form-group col-md-4">
          <input
            type="text"
            name="name"
            value=""
            placeholder="name"
            class="form-control"
            v-model="customer_products.name"
          />
        </div>
        <div class="form-group col-md-4">
          <input
            type="text"
            name="last_name"
            value=""
            placeholder="last name"
            class="form-control"
            v-model="customer_products.last_name"
          />
        </div>
        <div class="form-group col-md-4">
          <input
            type="email"
            name="email"
            value=""
            placeholder="email"
            class="form-control"
            v-model="customer_products.email"
          />
        </div>
      </div>

      <h2 class="h4">Products</h2>
      <ol>
        <li v-for="(product, index) in customer_products.products" :key="index">
          <div class="form-row mt-2">
            <div class="col">
              <input
                type="text"
                class="form-control"
                placeholder="Product"
                v-model="product.product_name"
              />
            </div>
            <div class="col">
              <input
                type="number"
                class="form-control"
                placeholder="Cost"
                v-model="product.product_cost"
              />
            </div>
          </div>
        </li>
      </ol>
      <input
        class="btn btn-primary"
        @click.prevent="addForm"
        value="ADD+"
        type="submit"
        
      />
      <div class="text-right">
        <input type="submit" value="SAVE" class="btn btn-dark" @click.prevent="sendData"/>
      </div>
    </form>

  
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      customer_products:{
      name:'',
      last_name:'',
      email:'',

      products:[
        {
          product_name:'',
          product_cost:''
        },
        {
          product_name:'',
          product_cost:''
        },
        {
          product_name:'',
          product_cost:''
        },
        {
          product_name:'',
          product_cost:''
        },
        {
          product_name:'',
          product_cost:''
        },
      ]
      }
      
    };
  },

  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    addForm(){
      this.customer_products.products.push({
        product_name:'',
        product_cost:''
      })
    },
   sendData(){
     if(this.customer_products.name.trim()==='' || this.customer_products.last_name.trim()==='' || this.customer_products.email.trim()===''){
       alert('You must complete all customer data');
       return;
     }
     const data = this.customer_products;
     axios.post('/customers', data)
      .then(res=>{
        this.$router.push({path:'/'})
        console.log(res.data);
        
      })
      .catch(error=>console.log(error))
   }

  },
};
</script>

<style>
</style>