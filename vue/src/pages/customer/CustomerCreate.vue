<template>
<div class="container-fluid">
  <div class="col-xl-12">
    <div class="card custom-card">
      <div class="container mt-4">

        <!-- Header -->
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Customer Create Form</h5>
          <button
            @click="$router.push('/dashboard/customer')"
            class="btn btn-success btn-sm"
          >
            Back to customer list
          </button>
        </div>

        <!-- Form -->
        <div class="card-body">
          <form @submit.prevent="createCustomer">
            <div class="row">

              <!-- Name -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" v-model="customer.name" required>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" v-model="customer.email" required>
                </div>
              </div>

              <!-- Phone -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" v-model="customer.phone">
                </div>
              </div>

              <!-- Address -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" v-model="customer.address">
                </div>
              </div>

              <!-- Gender -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                  <select class="form-select" v-model="customer.gender">
                    <option value="">Choose Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Other</option>
                  </select>
                </div>
              </div>

              <!-- DOB -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">DOB</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" v-model="customer.dob">
                </div>
              </div>

              <!-- Photo -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Photo</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control" @change="handleFile">

                  <!-- Preview -->
                  <img
                    v-if="preview"
                    :src="preview"
                    class="mt-2 rounded"
                    width="80"
                  />
                </div>
              </div>

              <!-- Password -->
              <div class="col-md-6 mb-3 row">
                <label class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" v-model="customer.password" required>
                </div>
              </div>

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
import axios from "axios";
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";

const baseUrl = import.meta.env.VITE_API_BASE_URL;
const router = useRouter();

const customer = reactive({
  name: "",
  email: "",
  phone: "",
  address: "",
  gender: "",
  dob: "",
  password: "",
});

let photoFile = null;
const preview = ref(null);

// handle file select
function handleFile(e) {
  photoFile = e.target.files[0];

  if (photoFile) {
    preview.value = URL.createObjectURL(photoFile);
  }
}

// create customer
async function createCustomer() {
  try {
    const formData = new FormData();

    formData.append("name", customer.name);
    formData.append("email", customer.email);
    formData.append("phone", customer.phone);
    formData.append("address", customer.address);
    formData.append("gender", customer.gender);
    formData.append("dob", customer.dob);
    formData.append("password", customer.password);

    if (photoFile) {
      formData.append("photo", photoFile);
    }

    const res = await axios.post(`${baseUrl}/customers`, formData, {
      headers: { "Content-Type": "multipart/form-data" },
    });

    console.log(res);
    // alert("Customer created successfully ✅");

    // router.push("/dashboard/customer");
  } catch (error) {
    console.error(error);
    alert("Failed to create customer ❌");
  }
}
</script>

<style scoped>
img {
  object-fit: cover;
}
</style>
