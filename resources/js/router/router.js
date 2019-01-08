import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from '../components/login/Login.vue'
import Signup from '../components/login/Signup.vue'
import Fourm from '../components/fourm/Fourm.vue'
import Logout from '../components/login/Logout.vue'
const routes = [
    { path: '/login', component: Login, name:"login" },
    { path: '/logout', component: Logout },
    { path: '/signup', component: Signup },
    { path: '/fourm', component: Fourm, name:"fourm" },
  ]
  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang :false,
    mode:'history'
  })
  
  



  export default router