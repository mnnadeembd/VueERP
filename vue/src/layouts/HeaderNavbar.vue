<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

      <!-- Logo -->
      <router-link class="navbar-brand fw-bold text-success" to="/">
        AgroMarket
      </router-link>

      <!-- Mobile Toggle -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <router-link class="nav-link" to="/">Home</router-link>
          </li>

          <!-- Products -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
              Products
            </a>

            <ul class="dropdown-menu">
              <li><router-link class="dropdown-item" to="/products/seeds">🌱 বীজ</router-link></li>
              <li><router-link class="dropdown-item" to="/products/fertilizer">🧪 সার</router-link></li>
              <li><router-link class="dropdown-item" to="/products/pesticide">🐛 কীটনাশক</router-link></li>
              <li><router-link class="dropdown-item" to="/products/machinery">🚜 কৃষি যন্ত্রপাতি</router-link></li>
              <li><hr class="dropdown-divider"></li>
              <li><router-link class="dropdown-item text-success fw-bold" to="/products">View All</router-link></li>
            </ul>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" to="/about">About</router-link>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" to="/blog">Blog</router-link>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" to="/contact">Contact</router-link>
          </li>

        </ul>

        <!-- Search -->
        <form class="d-flex me-3">
          <input class="form-control" type="search" placeholder="Search products">
        </form>

        <!-- Cart -->
        <button class="btn btn-outline-success me-2">
          🛒 <span class="badge bg-success">2</span>
        </button>

        <!-- Login -->
        <router-link to="/login" class="btn btn-success">Login</router-link>

      </div>
    </div>
  </nav>
</template>
