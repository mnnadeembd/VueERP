<template>
  
    <Header/>
  <div class="app-layout">
    <!-- Sidebar -->
    <Navbar />

    <!-- Main Content -->
    <main class="main-content">
      <RouterView />
    </main>
  </div>

  <Footer />
</template>

<script setup>
import Footer from './Footer.vue';
import Header from './Header.vue';
import Navbar from './Navbar.vue';





</script>

<style scoped>
.app-layout {
  display: flex;
  min-height: calc(100vh - 120px); /* header + footer space */
  background: #f1f5f9;
}

/* Main content area */
.main-content {
  flex: 1;
  padding: 24px;
  background: #f8fafc;
  overflow-y: auto;
}

/* Responsive */
@media (max-width: 768px) {
  .app-layout {
    flex-direction: column;
  }
}
</style>
