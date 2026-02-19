<template>
  <div class="d-flex" style="min-height:100vh">

    <!-- Sidebar -->
    <aside class="bg-success text-white sidebar p-3 d-flex flex-column" style="width:250px;">
     

      <ul class="nav nav-pills flex-column gap-2">
        <li class="nav-item">
          <router-link to="/dashboard" class="nav-link text-white" active-class="active">
            🏠 Dashboard
          </router-link>
        </li>

        <!-- Pages Dropdown -->
        <li class="nav-item">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#pagesMenu" role="button" aria-expanded="false" aria-controls="pagesMenu">
            📄 Pages
            <i class="bi bi-chevron-down"></i>
          </a>
          <div class="collapse" id="pagesMenu">
            <ul class="nav flex-column ms-3 mt-1 gap-1">
              <li>
                <router-link to="/role" class="nav-link text-white" active-class="active">Roles</router-link>
              </li>
              <li>
                <router-link to="/dashboard/customer" class="nav-link text-white" active-class="active">Customer</router-link>
              </li>
              <li>
                <router-link to="/basic" class="nav-link text-white" active-class="active">Basic Content</router-link>
              </li>
            </ul>
          </div>
        </li>

        <!-- Basic Concepts Dropdown -->
        <li class="nav-item">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#basicMenu" role="button" aria-expanded="false" aria-controls="basicMenu">
            🧠 Basic Concepts
            <i class="bi bi-chevron-down"></i>
          </a>
          <div class="collapse" id="basicMenu">
            <ul class="nav flex-column ms-3 mt-1 gap-1">
              <li>
                <router-link to="/products" class="nav-link text-white" active-class="active">Props</router-link>
              </li>
              <li>
                <router-link to="/city" class="nav-link text-white" active-class="active">Watch</router-link>
              </li>
              <li>
                <router-link to="/basic" class="nav-link text-white" active-class="active">Basic Content</router-link>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </aside>

    
  </div>
</template>

<script setup>
</script>

<style scoped>
.sidebar {
  min-height: 100vh;
}

.nav-link.active {
  background-color: rgba(255,255,255,0.2);
  border-radius: 6px;
}

.nav-link:hover {
  background-color: rgba(255,255,255,0.1);
  border-radius: 6px;
}
</style>
