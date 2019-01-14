<template>
    <v-container>
    <v-form @submit.prevent="login">
        <v-text-field label="Uesr Name" v-model="form.username" type="text" required></v-text-field>
        <v-text-field label="Password" v-model="form.password" type="password" autocomplete="password" required></v-text-field>
        <v-btn color="green" type="submit">Login</v-btn>
       <router-link to="/signup"><v-btn color="blue" type="submit">Sign Up</v-btn></router-link>
    </v-form>
  </v-container>
</template>

<script>
export default {
 data() {
     return {
         form:{
             username:null,
             password:null
         }
     }
 },
    created() {
        if(User.loggedIn()){
        this.$router.push({name:'fourm'});
        }
    },
 methods:{
     login(){
       User.login(this.form)
         this.$router.push({name:'fourm'})

     }
 }
}
</script>

<style>

</style>
