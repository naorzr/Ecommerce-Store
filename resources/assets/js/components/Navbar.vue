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
            <router-link class="nav-link" to="/shopping-cart"><span class="fas fa-shopping-cart"></span>  Cart</router-link>
          </li>
      </ul>
    </div>
    </nav>
    </div>
</template>

<script>
export default {
  name: "Navbar"
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
</style>


