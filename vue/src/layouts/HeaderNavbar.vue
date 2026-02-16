<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid px-4">

      <!-- Logo -->
      <a class="navbar-brand fw-bold text-success" href="#">AgroMarket</a>

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
          <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
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
        <router-link :to="'/login'" class="btn btn-success">Login</router-link>

      </div>

    </div>
  </nav>
</template>
