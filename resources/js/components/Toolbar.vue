
<template>
  <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>Home</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">
       <router-link to="/fourm"><v-btn flat>Fourm</v-btn></router-link>
       <router-link to="/question">  <v-btn flat>Ask Question</v-btn></router-link>
       <router-link to="/catgory"><v-btn flat>Catgory</v-btn></router-link>
       <router-link to="/login"><v-btn flat>login</v-btn></router-link>
    </div>
  </v-toolbar>
</template>

<script>
export default {

}
</script>

<style>

</style>
