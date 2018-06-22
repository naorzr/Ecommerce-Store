import Vue from "vue";
import Router from "vue-router";
import Home from "../components/pages/Home";
import Main from "../components/pages/admin-routes/Main";
import Add from "../components/pages/admin-routes/Add";
import Edit from "../components/pages/admin-routes/Edit";
import Products from "../components/pages/admin-routes/Products";
import Cart from "../components/pages/Cart";
import About from "../components/pages/About";
import Contact from "../components/pages/Contact";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "Home",
      component: Home
    },
    {
      path: "/about",
      name: "About",
      component: About
    },
    {
      path: "/customer-support",
      name: "Contact",
      component: Contact
    },
    {
      path: "/cart",
      name: "Cart",
      component: Cart
    },
    {
      path: "/main",
      component: Main,
      children: [
        {
          path: "add",
          name: "Add",
          component: Add
        },
        {
          path: "edit/:id",
          name: "Edit",
          component: Edit
        },
        {
          path: "",
          name: "Products",
          component: Products
        }
      ]
    }
  ]
});
