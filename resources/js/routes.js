let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let home = require('./components/Dashboard.vue').default;

let logout = require('./components/auth/logout.vue').default;

//pentadbir
let user= require('./components/admin/user.vue').default;
let department= require('./components/admin/department.vue').default;


//settings component
let race= require('./components/settings/race.vue').default;
let area= require('./components/settings/area.vue').default;
let district= require('./components/settings/district.vue').default;
let nationality= require('./components/settings/nationality.vue').default;
let locality= require('./components/settings/locality.vue').default;
let hospital= require('./components/settings/hospital.vue').default;
let pkrc= require('./components/settings/pkrc.vue').default;
let vaccine= require('./components/settings/vaccine.vue').default;
let ward= require('./components/settings/ward.vue').default;
let bed= require('./components/settings/bed.vue').default;
let discipline= require('./components/settings/discipline.vue').default;

 // Supplier Component 
 let storesupplier = require('./components/supplier/create.vue').default;
 let supplier = require('./components/supplier/index.vue').default;
 let editsupplier = require('./components/supplier/edit.vue').default;

//Category component
let category= require('./components/category/index.vue').default;
//product component
let storeproduct= require('./components/product/create.vue').default;
let product= require('./components/product/index.vue').default;
let editproduct= require('./components/product/edit.vue').default;

//finance component
let allocation = require('./components/finance/index.vue').default;
let code = require('./components/finance/category.vue').default;

//urusanam component
let document = require('./components/urusanam/document.vue').default;
let printing = require('./components/urusanam/printing.vue').default;


//perolehan component
let pembelian = require('./components/perolehan/pembelian.vue').default;
//let code = require('./components/finance/category.vue').default;

//items component
let items = require('./components/items/index.vue').default;
let itemSetting = require('./components/items/setting.vue').default;

//profile component
let profile = require('./components/user/Profile.vue').default;

//stock component
let stock = require('./components/stock/index.vue').default;
let stock_setting = require('./components/stock/setting.vue').default;
let stock_out = require('./components/stock/out.vue').default;



export const routes = [
    { path: '/login', component: login, name: '/' },
    { path: '/register', component: register, name:'register' },
    { path: '/forget', component: forget, name:'forget' },
    { path: '/logout', component: logout, name:'logout' },
    { path: '/home', component: home, name:'home' },

    // Admin Routes
    { path: '/user', component: user, name:'user' },
    { path: '/department', component: department, name:'department' },
    // settings
    { path: '/race', component:race , name:'race' },
    { path: '/area', component:area , name:'area' },
    { path: '/district', component:district , name:'district' },
    { path: '/nationality', component: nationality, name:'nationality' },
    { path: '/locality', component: locality, name:'locality' },
    { path: '/hospital', component: hospital, name:'hospital' },
    { path: '/pkrc', component: pkrc, name:'pkrc' },
    { path: '/vaccine', component: vaccine, name:'vaccine' },
    { path: '/ward', component: ward, name:'ward' },
    { path: '/bed', component: bed, name:'bed' },
    { path: '/discipline', component: discipline, name:'discipline' },

    // Category
    { path: '/category', component: category, name:'category' },

      // Supplier Routes
  { path: '/store-supplier', component: storesupplier, name:'store-supplier'},
  { path: '/supplier', component: supplier, name:'supplier'},
  { path: '/edit-supplier/:id', component: editsupplier, name:'edit-supplier'},

    //product routes
    { path: '/product', component: product, name:'product' },
    { path: '/store-product', component: storeproduct, name:'store-product' },
    { path: '/edit-product/:id', component: editproduct, name:'edit-product' },


    //finance routes
    { path: '/allocation', component: allocation, name:'allocation' },
    { path: '/code', component: code, name:'code' },

      //finance routes
      { path: '/document', component: document, name:'document' },
      { path: '/printing', component: printing, name:'printing' },

       //perolehan routes
       { path: '/pembelian', component: pembelian, name:'pembelian' },
     //  { path: '/code', component: code, name:'code' },

     //item routes
     { path: '/items', component: items, name:'items' },
     { path: '/itemsetting', component: itemSetting, name:'itemSetting' },


     //profile routes
     { path: '/profile', component: profile, name:'profile' },

     //stock routes
     { path: '/stock', component: stock, name:'stock' },
     { path: '/stock-setting', component: stock_setting, name:'stock-setting' },
     { path: '/stock/out', component: stock_out, name:'stock_out' },

    
  ]