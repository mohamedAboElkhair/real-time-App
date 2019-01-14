<template>

    <div>
        <div v-if="question">

            <edit-quest v-if="editing" :data='question'></edit-quest>
            <show-quest v-else :data='question'  ></show-quest>
             </div>
        </div>
   
</template>

<script>
 import ShowQuest from './ShowQuest'
 import EditQuest from './EditQuest'
export default {
    components:{ShowQuest,EditQuest},
  
    data(){
        return{
            question:null,
            editing:false
        }
    },
    created(){
        this.listen()
        this.getQuestione()
       
    },
    methods: {
        listen(){
            EventBus.$on('startEditing',()=>{
                this.editing=true
            })
            EventBus.$on('cancelEditing',()=>{
                this.editing=false
            })
        },
        getQuestione(){
         axios.get(`/api/question/${this.$route.params.slug}`)
        .then(res =>this.question =res.data.data)
    }
    },
    
}
</script>

<style>

</style>
