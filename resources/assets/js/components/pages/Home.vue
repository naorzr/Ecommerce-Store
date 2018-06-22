<template>
    <div>
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <About/>
      </div>
        <div id="contact" class="col-3">
           <Contact/>
        </div>
      </div>
     </div>
      <hr>
      <h1>Our Awesome Products</h1>
      <br>
      <products/>
    </div>
</template>

<script>
import ProductList from "../ProductList.vue";
import About from "./About.vue";
import Contact from "./Contact.vue";

export default {
  name: "Home",
  components: {
    products: ProductList,
    About,
    Contact
  }
};
</script>

<style scoped>
#contact {
  max-width: none;
}
</style>

