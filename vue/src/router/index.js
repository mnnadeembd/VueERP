import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Login from "../login/Login.vue";
import About from "../pages/about/About.vue";
import Contact from "../pages/contact/Contact.vue";
import Dashboard from "../pages/dashboard/Dashboard.vue";
import Main from "../layouts/Main.vue";
import Blog from "../pages/blog/Blog.vue";
import CustomerList from "../pages/customer/CustomerList.vue";
import CustomerEdit from "../pages/customer/CustomerEdit.vue";
import CustomerCreate from "../pages/customer/CustomerCreate.vue";

const routes = [
  // Dashboard + Main layout nested
  {
    path: "/dashboard",
    component: Main,
    children: [
      {path: "",  name: "Dashboard",  component: Dashboard  },
      {path: "/dashboard/customer", name: "CustomerList", component: CustomerList},
      {path: "/dashboard/customer/:id", name: "CustomerEdit", component: CustomerEdit},
      {path: "/dashboard/customer/create", name: "CustomerCreate", component: CustomerCreate},


    ],
  },

  // Public pages
  { path: "/", name: "Home", component: Home },
  { path: "/login", name: "Login", component: Login },
  { path: "/about", name: "About", component: About },
  { path: "/contact", name: "Contact", component: Contact },
  {path: '/blog', name: "Blog", component: Blog},

  // Catch-all 404
  { path: "/:pathMatch(.*)*", redirect: "/" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
