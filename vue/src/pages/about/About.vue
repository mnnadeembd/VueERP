<template>
  <div>
    <header-navbar/>

    <!-- HERO SECTION -->
    <section class="about-hero text-white text-center py-5">
      <div class="container-fluid px-lg-5 px-3">
        <h1 class="fw-bold">About AgroMarket</h1>
        <p class="lead">Connecting farmers with quality products for better harvests.</p>
      </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="container-fluid py-5 px-lg-5 px-3">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4">
          <img src="https://placeimg.com/500/400/nature" alt="Mission" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
          <h3>Our Mission</h3>
          <p>To provide high-quality seeds, fertilizers, pesticides, and agricultural tools directly to farmers with ease and trust.</p>

          <h3>Our Vision</h3>
          <p>Empower farmers with technology and access to resources to ensure sustainable and profitable farming.</p>
        </div>
      </div>
    </section>

    <!-- TEAM / FOUNDERS -->
    <section class="bg-light py-5">
      <div class="container-fluid px-lg-5 px-3 text-center">
        <h3 class="mb-4">Meet Our Team</h3>
        <div class="row g-4 justify-content-center">
          <div class="col-md-3" v-for="member in team" :key="member.id">
            <div class="card border-0 shadow-sm">
              <img :src="member.image" class="card-img-top rounded-circle p-3" alt="Team member">
              <div class="card-body">
                <h5>{{ member.name }}</h5>
                <p class="text-success">{{ member.role }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT / CTA -->
    <section class="about-cta text-center py-5 text-white">
      <div class="container-fluid px-lg-5 px-3">
        <h3>Ready to grow your farm?</h3>
        <p>Explore our products and start shopping today!</p>
        <router-link to="/products" class="btn btn-light text-success fw-bold mt-2">Shop Now</router-link>
      </div>
    </section>

  </div>
</template>

<script setup>
import HeaderNavbar from '../../layouts/HeaderNavbar.vue';

const team = [
  { id: 1, name: "Md. Nuruzzaman", role: "Founder & CEO", image: "https://placeimg.com/200/200/people" },
  { id: 2, name: "Md. Rashedul Islam", role: "CTO", image: "https://placeimg.com/201/201/people" },
  { id: 3, name: "Fatima Rahman", role: "Marketing Head", image: "https://placeimg.com/202/202/people" },
]
</script>

<style scoped>
/* HERO SECTION */
.about-hero {
  background: linear-gradient(135deg, #22c55e, #16a34a);
  padding: 100px 0;
}

/* TEAM / CARD */
.card img {
  width: 120px;
  height: 120px;
  object-fit: cover;
}

/* CONTACT / CTA */
.about-cta {
  background: linear-gradient(135deg, #16a34a, #22c55e);
}
</style>
