<template>
  <tr>
      <td><img :src="item.imagePath" /> </td>
      <td>{{item.title}}</td>
      <td>{{item.description}}</td>
      <td><input class="form-control" type="text"  :value="currentQty" v-on:blur="updateQty" /></td>
      <td class="text-right">{{(this.price*1).toFixed(2)}}</td>
      <td class="text-right"><button v-on:click="deleteFromCart" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
  </tr>
</template>

<script>
import store from "../../store";
export default {
  props: ["item", "qty"],
  data() {
    return {
      price: this.item.price,
      currentQty: this.qty
    };
  },
  methods: {
    updateQty(event) {
      if (event.target.value >= 1 && event.target.value <= 50) {
        var priceToAdd =
          this.price * (Math.ceil(event.target.value) - this.currentQty);
        this.currentQty = Math.ceil(event.target.value);
        this.$emit("updateTotal", priceToAdd);
      } else {
        event.target.value = this.currentQty;
      }
    },
    deleteFromCart() {
      axios
        .delete(`/delete-from-cart/${this.item.id}`)
        .then(res => {
          if (res) {
            this.$emit("removeRow");
            store.commit("setAmount", Object.keys(res.data.items).length);
          } else {
            store.commit("setAmount", 0);
          }
        })
        .catch(e => console.log(e));
    }
  }
};
</script>
