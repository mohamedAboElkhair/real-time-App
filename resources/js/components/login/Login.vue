<template>
    <v-container>
    <v-form @submit.prevent="login">
        <v-text-field label="Uesr Name" v-model="form.username" type="text" required></v-text-field>
        <v-text-field label="Password" v-model="form.password" type="password" autocomplete="password" required></v-text-field>
        <v-btn color="blue" type="submit">Login</v-btn>
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
 methods:{
     login(){
       User.login(this.form)
     }
 }
}
</script>

<style>

</style>
