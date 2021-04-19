<template>
  <div>
    <div class="card">
      <div class="card-header">
        <h2 class="text-center mt-3">Customers</h2>
        <form class="d-flex ml-auto">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            v-model="customersFilter"
          />
        </form>
      </div>

      <table class="table table-hover">
        <thead class="table-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">#Products</th>
            <th scope="col">Bill</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(customer, index) in  searching" :key="index">
            <th scope="row" v-text="index + 1"></th>
            <td  >{{customer.name+' '+ customer.last_name }}</td>
            <td v-text="customer.email"></td>
            <td v-text="customer.total_products"></td>
            <td v-text="'s/.' + customer.total_bill"></td>
            <td>
              <router-link :to="{ name: 'edit', params: {id:customer.customer_id} }" class="btn btn-info"><i class="fas fa-marker"></i></router-link>
              
              <button class="btn btn-danger" @click="deleteCustomer(customer, index)"
                ><i class="far fa-trash-alt"></i
              ></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      customers: [],
      customersFilter:[]
    };
  },
  created() {
    axios.get("/customers").then((res) => {
     
      this.customers = res.data;
      console.log(this.customers);
      
    });
  },
  computed:{
    searching(){
      return this.customers.filter(customer=>{
          let cus = `${customer.name} ${customer.last_name}`
        return cus.includes(this.customersFilter)
      })
    },
  },
  methods:{
    deleteCustomer(customer, index){
      const confirmacion = confirm(`Delete customer ${customer.name} ${customer.last_name} ?`);
      if(confirmacion){
      axios.delete(`/customers/${customer.customer_id}`)
        .then(() => {
         this.customers.splice(index,1);
        })
        }
    }
  },
  
};
</script>

<style>
</style>