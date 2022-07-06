<template> 
<nav  id="sidebar" class="mt-2" >
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <router-link to="/home" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt blue"></i>
          <p>
            Dashboard
          </p>
        </router-link>
      </li>

       
     
      <li  class="nav-item has-treeview"   v-if="roles.includes('admin') ">
        <a class="nav-link" >
          <i class="nav-icon fas fa-user-cog black"></i>
          <p>Pentadbir
           <i class="right fas fa-angle-left"></i>
           </p>
        </a>
    
           <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/user" class="nav-link">
            
              <p id="submenu">
                Pengguna
              </p>
            </router-link>
          </li>
          <li class="nav-item">
         <router-link to="/department" class="nav-link">
              <p id="submenu">
                Jabatan
              </p>
            </router-link>
          </li>
        </ul>
      </li> 
      <!--KEWANGAN-->
        <li  class="nav-item has-treeview"  v-if="roles.includes('superadmin')    || roles.includes('hospital') "  >
        <a class="nav-link" >
          <i class="nav-icon fas fa-money-bill green "></i>
          <p>KEWANGAN
           <i class="right fas fa-angle-left"></i>
           </p>
        </a>
    
           <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/allocation" class="nav-link">
             
              <p id="submenu">
                Peruntukan
              </p>
            </router-link>
          </li>

               <li class="nav-item">
            <router-link to="/code" class="nav-link">
           
              <p id="submenu">
                Kod Peruntukan
              </p>
            </router-link>
          </li>
     
        </ul>
      </li> 

            <!--PEROLEHAN-->
        <li  class="nav-item has-treeview"  v-if="roles.includes('superadmin')    || roles.includes('hospital') "  >
        <a class="nav-link" >
          <i class="nav-icon fas fa-wallet yellow "></i>
          <p>PEROLEHAN
           <i class="right fas fa-angle-left"></i>
           </p>
        </a>
    
           <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/pembelian" class="nav-link">
             
              <p id="submenu">
                Pembelian
              </p>
            </router-link>
          </li>

               <li class="nav-item">
            <router-link to="/code" class="nav-link">
           
              <p id="submenu">
                Kod Peruntukan
              </p>
            </router-link>
          </li>
     
        </ul>
      </li> 
  <!---STOCK --->
        <li  class="nav-item has-treeview" v-if="roles.includes('superadmin')   " >
        <a class="nav-link" >
          <i class="nav-icon fas fa-school pink"></i>
          <p>INVENTORI
           <i class="right fas fa-angle-left"></i>
           </p>
        </a>
    
           <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/stock/out" class="nav-link">
             
              <p id="submenu">
                Pengeluaran
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/category" class="nav-link">
           
              <p id="submenu">
                Penerimaan 
              </p>
            </router-link>
          </li>
           <li class="nav-item">
            <router-link to="/category" class="nav-link">
           
              <p id="submenu">
                Pembelian
              </p>
            </router-link>
          </li>
               <li class="nav-item">
            <router-link to="/stock-setting" class="nav-link">
           
              <p id="submenu">
                Tetapan
              </p>
            </router-link>
          </li>
              <li class="nav-item">
            <router-link to="#" class="nav-link">
           
              <p id="submenu">
                Carian
              </p>
            </router-link>
          </li>
     
         
        </ul>
      </li> 
     <!--MAIN ITEM-->
        <li  class="nav-item has-treeview" v-if="roles.includes('superadmin')    || roles.includes('hospital') " >
        <a class="nav-link" >
          <i class="nav-icon fas fa-clipboard "></i>
          <p>SENARAI ITEM
           <i class="right fas fa-angle-left"></i>
           </p>
        </a>
    
           <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/items" class="nav-link">
             
              <p id="submenu">
                Item
              </p>
            </router-link>
          </li>
              <li class="nav-item">
            <router-link to="/itemsetting" class="nav-link">
             
              <p id="submenu">
                Tetapan
              </p>
            </router-link>
          </li>
         
        </ul>
      </li> 

      <!-- TETAPAN -->
      <li class="nav-item has-treeview"  v-if=" roles.includes('superadmin')    ||roles.includes('pkrc')    || roles.includes('hospital') "  >
        <a  class="nav-link">
          <i class="nav-icon fas fa-cog green"></i>
          <p>
            Tetapan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <router-link to="/race" class="nav-link">
              <p id="submenu">
                Bangsa
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/area" class="nav-link">
              <p id="submenu">
                Mukim
              </p>
            </router-link>
          </li>
          
            <li class="nav-item">
              <router-link to="/district" class="nav-link">
                  
                  <p id="submenu">
                   Daerah
                  </p>
              </router-link>
            </li>
              <li class="nav-item">
              <router-link to="/nationality" class="nav-link">
                 
                  <p id="submenu">
                   Warganegara
                  </p>
              </router-link>
            </li>
                 <li class="nav-item">
              <router-link to="/locality" class="nav-link">
                  
                  <p id="submenu">
                     Lokaliti
                  </p>
              </router-link>
            </li>

                 
            <li class="nav-item">
              <router-link to="/hospital" class="nav-link">
                 
                  <p id="submenu">
                      Hospital
                  </p>
              </router-link>
            </li>
       
            <li class="nav-item">
              <router-link to="/pkrc" class="nav-link">
                  
                  <p id="submenu">
                   PKRC
                  </p>
              </router-link>
            </li>
               <li class="nav-item">
              <router-link to="/vaccine" class="nav-link">
                
                  <p id="submenu">
                   Vaksin
                  </p>
              </router-link>
            </li>   
               <li class="nav-item">
              <router-link to="/ward" class="nav-link">
                
                  <p id="submenu">
                   Wad
                  </p>
              </router-link>
            </li>    
                <li class="nav-item">
              <router-link to="/bed" class="nav-link">
                
                  <p id="submenu">
                   Katil
                  </p>
              </router-link>
            </li> 
                     <li class="nav-item">
              <router-link to="/discipline" class="nav-link">
                
                  <p id="submenu">
                   Disiplin
                  </p>
              </router-link>
            </li>      
        </ul>
      </li>

 


      <li class="nav-item" v-show="$route.path === '/login' ? false : true ">
              <router-link to="/logout" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt white"></i>
                  <p>
                      Logout
                  </p>
              </router-link>
        </li>
      
 
    </ul>
  </nav>
</template>
<script>

export default {

  data() {
    return{
       roles: '',
       current_team_id:'',
    }
  },
  methods: {

    userRoles() {
        let self = this;
        axios.post('/api/auth/me'+ '?token='+ localStorage.getItem('token'))
        .then(({data}) => (self.roles = data.roles, self.current_team_id = data.current_team_id))
        
        .catch(function (error) {
        console.log(error); 

      });    
     
      },

      
      
      
  },
  

  mounted(){
    this.userRoles();

   
  }

}
</script>
<style>
#submenu{
  margin-left: 40px;
  color: rgb(168, 208, 218);
   font-style: italic;

}
</style>