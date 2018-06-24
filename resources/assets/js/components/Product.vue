<template>
<div id="product">
<div class="card h-100">
                <img class="card-img-top" :src="imagePath" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    <h2 href="#">{{title}}</h2>
                  </h4>
                  <h5>${{price}}</h5>
                  <p class="card-text">{{description}}</p>
                </div>
                  <button type="button" class="btn btn-primary" v-on:click="addToCart(id)">Add to Cart</button>
              </div>
</div>  
</template>

<script>
import store from "../store";
export default {
  props: ["title", "price", "imagePath", "description", "id"],
  methods: {
    addToCart(id) {
      axios
        .get(`/add-to-cart/${this.id}`)
        .then(res => {
          console.log(this.imagePath);
          store.commit("setAmount", Object.keys(res.data.items).length);
        })
        .catch(e => console.log(e));
    }
  }
};
</script>


<style scoped>
#product {
  text-align: center;
  max-width: 350px;
}
img {
  border: none;
}
p {
  margin: 0;
}
button {
  width: 100%;
}
</style>
