
import Token from "./Token";
import AppStorge from "./AppStorge"

class User{
   login(data){
      axios.post('/api/auth/login',data)
      .then(res=> this.responseAfterLogin(res))
      .catch(error=>console.log(error.response.data))
   
   }
   responseAfterLogin(res){
      const access_token =res.data.access_token
     const username= res.data.user
    if(Token.isValid(access_token)){
      AppStorge.store(username , access_token) 
      } 
   }
   hasToken(){
      const storeToken=AppStorge.getToken();
      if(storeToken){
         return Token.isValid(storeToken)?true:false
      }
      return false
   }
   loggedIn(){
      return this.hasToken();
   }  
   logout(){
   AppStorge.clear()
   } 
   name(){
      if(this.loggedIn){
         return AppStorge.getUser();
      }
   }
   id(){
      if(this.loggedIn){
         const payload = Token.payload(AppStorge.getToken())
         return payload.sub
      }
   }
}
export default User= new User();  



