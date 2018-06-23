<template>
    <div>
    <div class="container-fluid">
      <div class="row">
        <div id="about" class="col-sm-9">
          <About/>
      </div>
        <div id="contact" class="col-sm-3">
           <Contact/>
        </div>
      </div>
     </div>
      <hr>
      <br>
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
#about {
  max-width: 70%;
}
#contact {
  max-width: none;
}
</style>

