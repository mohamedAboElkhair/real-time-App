
<template>
    <v-container>
 <v-form @submit.prevent="signup">
     <v-text-field label="Name" v-model="form.name" type="text" required></v-text-field>
    <span class="red--text" v-if="errors.name" >{{errors.name[0]}}</span>
    <v-text-field label="Uesr Name" v-model="form.username" type="text" required></v-text-field>
    <span class="red--text" v-if="errors.username" >{{errors.username[0]}}</span>
    <v-text-field label="Email" v-model="form.email" type="email" required></v-text-field>
     <span class="red--text" v-if="errors.email" >{{errors.email[0]}}</span>
    <v-flex xs12 sm6 d-flex><v-select :items="position" label="Position" v-model="form.position "></v-select></v-flex>
     <span class="red--text" v-if="errors.position" >{{errors.position[0]}}</span>
    <v-text-field label="Password" v-model="form.password" type="password" autocomplete="password" required></v-text-field>
         <span class="red--text" v-if="errors.password" >{{errors.password[0]}}</span>
    <v-text-field label="Confirm Password" v-model="form.password_confirmation" type="password"  autocomplete="password" required></v-text-field>
      <span class="red--text" v-if="errors.password_confirmation" >{{errors.password_confirmation[0]}}</span>
    <v-btn color="green" type="submit">Sign Up</v-btn>
    <router-link to="/login"><v-btn color="blue" type="submit">Login</v-btn></router-link>
 </v-form>
 
 </v-container>
</template>

<script>
export default {
         data() {
            return {
               form:{
             name:null,
             username:null,
             email:null,
             position:null,
             password:null,
             password_confirmation:null,
               },
                position: ['SuAdmin', 'Fo'],
                errors:{}
            }
           
         },
      created() {
            if(User.loggedIn()){
            this.$router.push({name:'fourm'});
    }
},
         methods: {
            signup(){
               axios.post('/api/auth/singup',this.form)
                .then(res => {
                   User.responseAfterLogin(res)
                   //this.$router.push({name:'fourm'})
                })
               .catch(error=> this.errors = error.response.data.errors)
            }
         }
}
</script>

<style>

</style>
