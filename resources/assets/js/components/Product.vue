<template>
<div id="product">
<div class="card h-100">
                <img class="card-img-top" :src=imgsrc alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    <h2 href="#">{{title}}</h2>
                  </h4>
                  <h5>${{price}}</h5>
                  <p class="card-text">{{description}}</p>
                </div>
                  <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
</div>  
</template>

<script>
export default {
  props: ["title", "price", "imgsrc", "description"]
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
