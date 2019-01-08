
<template>
  <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>Home</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">
       <router-link
        v-for="item in items" :key="item.title"
        :to="item.to"
        v-if="item.show"
        ><v-btn flat>{{item.title}}</v-btn></router-link>
    </div>
  </v-toolbar>
</template>

<script>
export default {
  data(){
    return{
      items:[
          {title:'Fourm', to:'/fourm',show:User.loggedIn()},
          {title:'Ask Question', to:'/question',show:User.loggedIn()},
          {title:'Catgory', to:'/catgory',show:User.loggedIn()},
          {title:'Login', to:'/login',show:!User.loggedIn()},
           {title:'LogOut', to:'/logout',show:User.loggedIn()},
      ]
    }
  },
  created() {
    EventBus.$on('logout',()=>{
      User.logout()
    })
  }
}
</script>

<style>

</style>
