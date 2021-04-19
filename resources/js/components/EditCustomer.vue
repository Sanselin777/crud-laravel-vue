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
            placeholder="name"
            class="form-control"
            v-model="customer.name"
          />
        </div>
        <div class="form-group col-md-4">
          <input
            type="text"
            name="last_name"
            placeholder="last name"
            class="form-control"
            v-model="customer.last_name"
          />
        </div>
        <div class="form-group col-md-4">
          <input
            type="email"
            name="email"
            placeholder="email"
            class="form-control"
            v-model="customer.email"
          />
        </div>
      </div>

      <h2 class="h4">Products</h2>
      <ol>
        <li v-for="(product, index) in oldCustomer" :key="index">
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
        <input
          type="submit"
          value="EDIT"
          class="btn btn-dark"
          @click.prevent="updateData"
        />
      </div>
    </form>
    {{ customerName }}
  </div>
</template>

<script>
export default {
  data() {
    return {
      oldCustomer : [],
      customer:{},
      customerName:''
    };
  },
  created() {
    axios.get(`/customers/${this.$route.params.id}/edit`).then((res) => {
      console.log(res.data);
      this.oldCustomer = res.data;
      this.customer = this.oldCustomer[0];
      console.log(this.customer);
    });
  },

  methods: {
    addForm() {
      this.oldCustomer.push({
        product_name: "",
        product_cost: "",
      });
    },
    updateData() {
      /* if (
        this.customer_products.name.trim() === "" ||
        this.customer_products.last_name.trim() === "" ||
        this.customer_products.email.trim() === ""
      ) {
        alert("You must complete all customer data");
        return;
      } */

      this.oldCustomer.push(this.customer)
      console.log(this.oldCustomer);
      
      const update = this.oldCustomer;
      axios
        .put(`/customers/${this.$route.params.id}`, update)
        .then((res) => {
          this.$router.push({ path: "/" });
          
        })
        .catch((error) => console.log(error));
    },
  },
  
};
</script>

<style>
</style>