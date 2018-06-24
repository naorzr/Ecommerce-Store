<template>
  <div class="container-fluid">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top"  role="navigation">
      <div class="container-fluid">
      <div class="navbar-header">
      <router-link class="navbar-brand" to="/"> T I F E R E T </router-link>
    </div>
      <ul class="navbar-nav mr-auto mt-2">
        <li class="nav-item px-2">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
          <li class="nav-item px-2">
            <router-link class="nav-link" to="/#about">About</router-link>
          </li>
          <li class="nav-item px-2">
            <router-link class="nav-link" to="/#contact">Contact Us</router-link>
          </li>
      </ul>    
      <ul class="navbar-nav ml-auto mt-2">
            <li class="nav-item px-3">
            <router-link class="nav-link" to="/shopping-cart">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
            <a class="fa fa-shopping-cart">
            <span class="fa fa-circle"></span>
            <span class="num">{{items}}</span>
            </a>      
             Cart
             </router-link>
          </li>
      </ul>
    </div>
    </nav>
    </div>
</template>

<script>
import store from "../store";
export default {
  computed: { items: () => store.state.items }
};
</script>

<style scoped>
.navbar-brand {
  font-size: xx-large;
}

@media only screen and (max-width: 640px) {
  nav {
    display: none;
  }
}
a.fa-shopping-cart {
  position: relative;
  font-size: 2em;
  color: grey;
  cursor: pointer;
}
span.fa-circle {
  position: absolute;
  font-size: 0.6em;
  top: -5px;
  color: purple;
  right: -6px;
}
span.num {
  position: absolute;
  font-size: 0.3em;
  top: 1px;
  color: #fff;
  right: 2px;
}
</style>


