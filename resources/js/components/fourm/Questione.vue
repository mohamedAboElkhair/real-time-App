<template>
 <v-card>
    <v-card-title primary-title>
      <div>
        <h4 class="headline mb-0">
          <router-link :to="data.path">
            {{data.title}}
          </router-link>
          </h4>
        <div class="grey--text" >
          {{data.user}} said
          {{data.created_at}}
        </div>
      </div>
     </v-card-title>
       <v-card-text>
            {{data.body}}
        </v-card-text>
    <v-card-actions>
      <v-btn v-if="own" flat color="orange">Share</v-btn>
     
    </v-card-actions>
  </v-card>   
</template>

<script>
export default {
 props:['data'],
 data() {
   return {
        own: User.own(this.data.user_id)
   }
 },

}
</script>

<style>

</style>

