<template>
<v-container fluid grid-list-md>
    <v-layout row wrap>
            <v-flex xs8>
               <questione
               v-for="question in questions" 
               :key="question.path" 
               :data='question' >
               </questione>
            </v-flex>
            
    </v-layout>
</v-container>
</template>

<script>
   import questione from './Questione'
export default {
    data(){
            return {
                questions:{}
                
            }
        },
        
components:{questione},
    
    created(){
        if(!User.loggedIn()){
          this.$router.push({name:'login'});
     }
        axios.get('/api/question')
        .then(res => this.questions=res.data.data)
        .catch(error=>console.log(error.response.data))
    },
  
}
</script>

<style>

</style>
