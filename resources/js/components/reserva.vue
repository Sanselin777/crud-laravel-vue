<form-products
          v-for="(product, index) in products"
          :key="index"
          :data="product"
          :index="index"
          @on-change="setProducts"
        ></form-products>

        setProducts(value, index) {
      this.products[index] = Object.assign(this.products[index], value);
    },

    <form-products
         @messageChanged="message = $event"
        ></form-products>
        <form-products
         @messageChanged="setProducts"
        ></form-products>

        <component
          :is="addNewForms"
          v-for="(addNewForms, index) in addNewForms"
          :key="index"
          @messageChanged="setProducts"
        ></component>