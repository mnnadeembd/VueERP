<template>
<div class="container-fluid page-container main-body-container">
    <div class="col-xl-12">
        <div class="card custom-card">
          <div class="container mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class='card-title mb-0'>Customer Create Form</h5>
              <button @click = "$router.push('/dashboard/customer')" class="btn btn-success btn-sm"><i class="ri-add-line me-1"></i>
                back to customer list
              </button>
            </div>
            
            <div class="card-body">
                <form @submit.prevent="createCustomer">
                    <div class="row">

                        <!-- Name -->
                        <div class="col-md-6 mb-3 row">
                            <label for="customerName" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="customer.name" id="customerName" placeholder="Enter name">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3 row">
                            <label for="customerEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" v-model="customer.email" id="customerEmail" placeholder="Enter email">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 mb-3 row">
                            <label for="customerPhone" class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="customer.phone" id="customerPhone" placeholder="Enter phone">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-md-6 mb-3 row">
                            <label for="customerAddress" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="customer.address" id="customerAddress" placeholder="Enter address">
                            </div>
                        </div>

                        <!-- Gender -->
                        <!-- <div class="col-md-6 mb-3 row">
                            <label for="customerGender" class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8">
                                <select class="form-select" v-model="customer.gender" id="customerGender">
                                    <option value="">Select</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div> -->

                        <!-- DOB -->
                        <!-- <div class="col-md-6 mb-3 row">
                            <label for="customerDOB" class="col-sm-4 col-form-label">DOB</label>
                            <div class="col-sm-8">
                                <input type="date" v-model="customer.dob" class="form-control" id="customerDOB">
                            </div>
                        </div> -->

                        <!-- PHOTO -->
                        <!-- <div class="col-md-6 mb-3 row">
                            <label for="customerPhoto" class="col-sm-4 col-form-label">Photo</label>
                            <div class="col-sm-8">
                                <input type="file" v-model="customer.photo" class="form-control" id="customerPhoto">
                            </div>
                        </div> -->

                        <!-- Password -->
                        <!-- <div class="col-md-6 mb-3 row">
                            <label for="customerPassword" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" v-model="customer.password" class="form-control" id="customerPassword">
                            </div>
                        </div> -->

                        <!-- Submit -->
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success">
                                Save Customer
                            </button>
                        </div>

                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { reactive } from 'vue';
import { useRouter } from 'vue-router';



const baseUrl = import.meta.env.VITE_API_BASE_URL;
const router = useRouter();
let customer = reactive({
    name: '',
    email: '',
    phone: '',
    address: '',
})

function createCustomer(){
    axios.post(`${baseUrl}/customers`, {customer})
    .then((res)=>{
        console.log(res.data);
        router.push('/customer');
    })
    .catch((err)=>{
        console.log(err);
    })
}

</script>

<style>

</style>