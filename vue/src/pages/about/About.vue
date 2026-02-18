<template>
  <div>
    <header-navbar/>

    <!-- HERO SECTION -->
    <section class="about-hero bg-success text-white text-center py-5">
      <div class="container">
        <h1 class="fw-bold">About AgroMart</h1>
        <p class="lead">Connecting farmers with quality products for better harvests.</p>
      </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4">
          <img src="https://media.gettyimages.com/id/1306713348/photo/drone-in-soybean-crop.jpg?s=612x612&w=gi&k=20&c=KrkYaucI1NAdgUjvQVC6DUImPl2RhzzyA4mGDcWlZcc=" alt="Mission" class="img-fluid rounded shadow-sm">
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
      <div class="container text-center">
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
      <div class="container">
        <h3>Ready to grow your farm?</h3>
        <p>Explore our products and start shopping today!</p>
        <router-link to="/products" class="btn btn-light text-success fw-bold mt-2">Shop Now</router-link>
      </div>
    </section>
    <FooterSection/>

  </div>
</template>

<script setup>
import HeaderNavbar from '../../layouts/HeaderNavbar.vue';
import FooterSection from '../../layouts/FooterSection.vue'

const team = [
  { id: 1, name: "Md. Nuruzzaman", role: "Founder & CEO", image: "https://avatars.githubusercontent.com/u/226237014?v=4" },
  { id: 2, name: "Md. Rashedul", role: "CTO", image: "https://scontent.fdac191-1.fna.fbcdn.net/v/t39.30808-6/332726428_1305799983311266_3683236146766913777_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=6PElLIcY9pgQ7kNvwEZEGrT&_nc_oc=AdkHOQpgQIXKIbvzq3ZvNG_8NxBjDjPYjr3mYJHfWree-5WVg0cQ2lbQcUpmsoZtRzo&_nc_zt=23&_nc_ht=scontent.fdac191-1.fna&_nc_gid=VWUEKgAbJjgoeKzifGbiPA&oh=00_AfttlGDZOsI68p51CxrB2u_xWSIdsQe8f3APQgzusgGfNg&oe=6999AE36" },
  { id: 3, name: "Fatima Rahman", role: "Marketing Head", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoC3u6I4Lmw-d421xIgZZxCGwhE4iMhBy99g&s" },
]
</script>

<style scoped>
/* HERO SECTION */
.about-hero {
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
