<template>

  <div class="container-fluid page-container main-body-container">
      <div class="col-xl-12">
        <div class="card custom-card">
          <div class="container mt-4">

            <input type="text" placeholder="Search Hear" v-model="search">

            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class='card-title mb-0'>Customer List</h5>
              <button @click="$router.push('/dashboard/customer/create')" class="btn btn-success btn-sm"><i class="ri-add-line me-1"></i>
                add new customer
              </button>
            </div>

            <div class="table-responsive">
              <table class="table table-sm mb-0">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr v-for="customer in searchCustomer" :key="customer.id">
                        <td>{{ customer.id }}</td>
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.email }}</td>
                        <td>{{ customer.phone }}</td>
                        <td>
                            <!-- <button @click="$router.push(`/customer/edit/${customer.id}`)">Edit</button>
                            <button @click="cusotmerDelete(customer.id)">Delete</button> -->

                            <button  @click="$router.push(`/dashboard/customer/edit/${customer.id}`)"><i class="bi bi-pencil-square"></i></button>
                            <button @click="cusotmerDelete(customer.id)"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
</template>

<script  setup>

import axios from 'axios';
import { computed, onMounted, ref } from 'vue';

const customers = ref([])
const baseUrl = import.meta.env.VITE_API_BASE_URL;

let search = ref("");

const searchCustomer = computed(()=>{
  let q = search.value.toLowerCase();
  // console.log(q);

  if(!q) return customers.value;  


  return customers.value.filter(customer=>{
      return customer.name?.toLowerCase().includes(q)
      //Note: I followed sir's code. code have no problem. but in my database a row was Null/Blank. for this reason data not seen with sir's code. To avoid blank/null data we us '?' sign.
  });
});






const fetchCustomers = ()=>{
  axios.get(`${baseUrl}/customers`)
    .then((res)=>{
        console.log(res.data.customers);
        customers.value = res.data.customers
    })
    .catch((error)=>{
        console.log(error);
    })
}

onMounted(()=>{
    fetchCustomers();
})

function cusotmerDelete(id){
  axios.delete(`${baseUrl}/customers/${id}`)
  .then((res)=>{
    console.log(res);
    fetchCustomers();
  })
  .catch((err)=>{
    console.log(err);
  })

}


</script>



<style>

</style>