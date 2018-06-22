<template>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark" role="navigation">
      <div class="container-fluid">
      <div class="navbar-header">
      <router-link class="navbar-brand" to="/">T I F E R E T</router-link>
    </div>
      <ul class="navbar-nav mr-auto mt-2">
        <li class="nav-item">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/admin">Admin</router-link>
        </li>
      </ul>    
      <ul class="secondary-nav navbar-nav ml-auto">
 
          <li class="nav-item">
            <router-link class="nav-link" to="/about">About</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/contact">Contact Us</router-link>
          </li>
            <li class="nav-item">
            <router-link class="nav-link" to="/cart">Cart</router-link>
          </li>
      </ul>
    </div>
    </nav>
</template>

<script>
export default {
  name: "Navbar"
};
</script>

<style>
nav {
  margin-bottom: 2%;
}
</style>


