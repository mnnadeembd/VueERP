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

        

        <!-- Cart -->
        <div class="dropdown">
          <button class="btn btn-outline-light position-relative" type="button" id="cartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-cart3 fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              3
              <span class="visually-hidden">items in cart</span>
            </span>
          </button>

          <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="cartDropdown" style="min-width:250px;">
            <h6 class="dropdown-header">My Cart</h6>

            <!-- Cart item example -->
            <li class="d-flex align-items-center mb-2">
              <img src="" alt="Product" class="rounded me-2" style="width:40px; height:40px; object-fit:cover;">
              <div>
                <p class="mb-0 fw-semibold" style="font-size:0.9rem;">Organic Seeds</p>
                <span class="text-success fw-bold" style="font-size:0.8rem;">৳ 450</span>
              </div>
            </li>

            <li>
              <button class="btn btn-success w-100 btn-sm mt-2">View Cart</button>
            </li>

            <li>
              <p class="text-center text-muted mt-2 mb-0" style="font-size:0.8rem;">Cart is empty</p>
            </li>
          </ul>
        </div>
        <!-- Logout -->
        <button class="btn btn-outline-light btn-sm">Logout</button>

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
