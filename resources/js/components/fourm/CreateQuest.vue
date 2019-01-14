<template>
<v-container fluid>
   <v-form @submit.prevent="create">
    <v-text-field
      v-model="form.title"
        type="text"
      label="Title"
      required
    ></v-text-field>
    <v-select autocomplete
      v-model="form.category_id"
      :items="categorys"
      item-text="name"
      item-value="id"
      label="Category"
      required
    ></v-select>
   <markdown-editor  v-model="form.body" ></markdown-editor>
    <v-btn color="success" type="submit" >
      Create
    </v-btn>

  </v-form>
</v-container>
</template>

<script>
export default {
data(){
   return{
    form:{
        title:null,
         body:null,
        category_id:null,
       
            },
    categorys:[],
        errors:{}
    
   }
    
},
    created(){
     
        axios.get('/api/category')
        .then(res => this.categorys = res.data.data)
    },
methods: {
        create() {
              if(!User.loggedIn()){
          this.$router.push({name:'login'});
            }
            axios.post('/api/question',this.form)
            .then(res => this.$router.push(res.data.path))
            .catch(error => this.errors = error.response.data.error)
        },
    },
}
</script>

<style>

</style>
