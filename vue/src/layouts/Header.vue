<template>
  <header class="bg-success text-white shadow-sm">
    <div class="container-fluid d-flex align-items-center justify-content-between py-3 px-4">

      <!-- Logo -->
      <div class="d-flex align-items-center gap-2">
        <img src="https://media.istockphoto.com/id/1263328016/vector/leaf-logo-design-vector-illustration-abstract-leaf-logo-vector-in-creative-design-concept.jpg?s=612x612&w=0&k=20&c=qkqLz8WzQmWnnQlpbMxRXCyAepumQ2nPqA27zkoDEHQ=" alt="AgroMart" class="rounded-circle" style="width:40px; height:40px; object-fit:cover;">
        <span class="fw-bold fs-4">Agro<span class="text-warning">Mart</span></span>
      </div>

      <!-- Navigation / Logout / Cart -->
      <div class="d-flex align-items-center gap-3">
        <input type="text" class="form-control form-control-sm" placeholder="Search..." style="max-width:200px;">

        

       
        <!-- Logout -->
        <button class="btn btn-outline-light btn-sm">Logout</button>
        <button @click="$router.push('/')" class="btn btn-outline-light btn-sm">🏠</button>

      </div>

    </div>
  </header>
</template>

<script setup>
// Add reactive cart data later if needed
</script>

<style scoped>
header {
  background: #16a34a; /* Bootstrap green */
  border-bottom: 2px solid #15803d;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

header span.text-warning {
  color: #fde68a; /* Yellow accent */
}

.dropdown-menu {
  border-radius: 10px;
}

.dropdown-menu li:hover {
  background-color: #f1f1f1;
}
</style>
