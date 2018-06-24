<template>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <CartItem v-on:updateTotal="updateTotal($event)" v-on:removeRow="removeRow()" v-for="(item,key) in cartItems" :key="key" :item="item.item" :qty="item.qty"/>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{totalPrice.toFixed(2)}}$</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <router-link to="/"><button class="btn btn-block btn-light">Continue Shopping</button></router-link>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import CartItem from "./CartItem";
export default {
  name: "Cart",
  data() {
    return {
      cartItems: {},
      totalPrice: 0,
      totalQty: 0
    };
  },
  components: {
    CartItem
  },
  created() {
    this.fetchCartItems();
  },
  methods: {
    fetchCartItems() {
      axios.get("/shopping-cart-items").then(res => {
        console.log(res);
        this.cartItems = res.data.items;
        this.totalPrice = res.data.totalPrice;
        this.totalQty = res.data.totalQty;
      });
    },
    removeRow() {
      this.fetchCartItems();
    },
    updateTotal(price) {
      this.totalPrice += price;
    }
  }
};
</script>