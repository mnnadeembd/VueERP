<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

      <!-- Logo -->
      <router-link class="navbar-brand fw-bold text-success" to="/">
        AgroMart
      </router-link>

      <!-- Mobile Toggle -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu"
        aria-controls="navMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <router-link class="nav-link" to="/">Home</router-link>
          </li>

          <!-- Products Dropdown -->
          <li class="nav-item dropdown">
            <a 
              class="nav-link dropdown-toggle"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Products
            </a>

            <ul class="dropdown-menu">
              <li><router-link class="dropdown-item" to="/products/seeds">🌱 Seed</router-link></li>
              <li><router-link class="dropdown-item" to="/products/fertilizer">🌿 Bio Fertilizer</router-link></li>
              <li><router-link class="dropdown-item" to="/products/pesticide">🐛 Pesticide</router-link></li>
              <li><router-link class="dropdown-item" to="/products/machinery">🚜 Agricultural Machinery</router-link></li>
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
