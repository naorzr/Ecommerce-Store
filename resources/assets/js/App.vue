<template>
  <div id="app">
    <Navbar/>
    <body>
    <jumbotron/>

    <router-view/>
    <Footer/>
    </body>
    
  </div>
</template>

<script>
import Jumbotron from "./components/Jumbotron.vue";
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    Navbar,
    Footer,
    Jumbotron
  }
};
</script>

<style>
#app {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: x-large;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
body {
  padding-top: 70px;
}
</style>
