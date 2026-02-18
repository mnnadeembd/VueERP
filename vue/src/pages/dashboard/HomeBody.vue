<template>
  <div>

    <!-- HERO SECTION -->
    <section class="bg-success text-white text-center py-5">
      <div class="container-fluid px-4">
        <h1 class="fw-bold">Quality Products, Best Solutions for Agriculture</h1>
        <p>Seed, Fertilizer, Pesticide and Agricultural Machinery Online Store</p>
        <button class="btn btn-light text-success fw-bold mt-3">Shop Now</button>
      </div>
    </section>

    <!-- CATEGORIES -->
    <section class="container-fluid py-5 px-4">
  <h3 class="text-center mb-4">Popular Categories</h3>

  <div class="category-scroll-wrapper">
    <div class="category-scroll">

      <div class="category-card">🌱 Seeds</div>
      <div class="category-card">🧪 Chimical Fertilizers</div>
      <div class="category-card">🐛 Pesticides</div>
      <div class="category-card">🚜 Agricultural Machinery</div>
      <div class="category-card">🧠 Farm Idea</div>
      <div class="category-card">🌱 Seeds</div>
      <div class="category-card">🍃 Bio Fertilizers</div>
      <div class="category-card">🐛 Pesticides</div>
      <div class="category-card">🚜 Agricultural Machinery</div>
      <div class="category-card">🧠 Farm Idea</div>

    </div>
  </div>
</section>


    <!-- FEATURED PRODUCTS -->
    <section class="bg-light py-5">
      <div class="container-fluid px-4">
        <h3 class="text-center mb-4">Featured Products</h3>

        <div class="row">
          <div class="col-md-3 mb-4" v-for="product in products" :key="product.id">
            <div class="card h-100">
              <!-- Image container -->
              <div class="product-img-frame">
                <img :src="product.image" class="card-img-top" alt="Product Image">
              </div>
              <div class="card-body text-center">
                <h6>{{ product.name }}</h6>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- BENEFITS -->
    <section class="trust-section text-center">
      <div class="container overflow-hidden">
        <h3 class="fw-bold mb-4">Why should you choose us?</h3>

        <div class="scroll-wrapper">
          <div class="scroll-content">
            <div class="trust-item">🚚 <span>Fast Delivery</span></div>
            <div class="trust-item">✅ <span>Quality Products</span></div>
            <div class="trust-item">🛠️ <span>Advanced Machinery</span></div>
            <div class="trust-item">💳 <span>Easy Payment</span></div>
            <div class="trust-item">☎️ <span>24/7 Support</span></div>

            <!-- Duplicate for smooth infinite scroll -->
            <div class="trust-item">🚚 <span>Fast Delivery</span></div>
            <div class="trust-item">✅ <span>Quality Products</span></div>
            <div class="trust-item">🛠️ <span>Advanced Machinery</span></div>
            <div class="trust-item">💳 <span>Easy Payment</span></div>
            <div class="trust-item">☎️ <span>24/7 Support</span></div>
          </div>
        </div>

      </div>
    </section>

  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [
        { id: 1, name: "Seeds", price: 120, image: "https://www.shutterstock.com/image-photo/bunch-paddy-rice-field-before-600nw-2219469869.jpg" },
        { id: 2, name: "Fertilizer", price: 350, image: "https://www.fao.org/uploads/pics/s1.jpg" },
        { id: 3, name: "Pesticide", price: 220, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWuW3pkDar3JI4qJHdCOH-LhGkBMO0Y3Jl6Ooucbvg&s" },
        { id: 4, name: "Machinery", price: 1500, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaUKqHjhwLCROww_BS0A2fhtZP3oZu46F9uA&s" }
      ]
    }
  }
}
</script>

<style>
.category-card {
  background: #f0fdf4;
  font-weight: bold;
  border-radius: 10px;
  padding: 30px;
  cursor: pointer;
  transition: 0.3s;
}
.category-card:hover {
  background: #bbf7d0;
}


.category-scroll-wrapper {
  overflow: hidden;
}

.category-scroll {
  display: inline-flex;
  gap: 30px;
  animation: scrollCategory 18s linear infinite;
}

.category-card {
  min-width: 180px;
  padding: 20px 30px;
  font-size: 18px;
  font-weight: 600;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  white-space: nowrap;
}


.product-img-frame {
  width: 100%;
  height: 120px;        /* Set your fixed height */
  overflow: hidden;     /* Crop the image if larger */
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f8f9fa; /* optional placeholder bg */
}

.product-img-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;    /* Makes all images cover the frame */
}



/* Animation */
@keyframes scrollCategory {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}


.category-scroll:hover {
  animation-play-state: paused;
}


.trust-section {
  background: #dcfce7;
  padding: 60px 0;
}

.scroll-wrapper {
  overflow: hidden;
  white-space: nowrap;
}

.scroll-content {
  display: inline-flex;
  gap: 60px;
  animation: scrollLeft 20s linear infinite;
}


.trust-item {
  display: flex;
  align-items: center;
  font-weight: 600;
  font-size: 18px;
  white-space: nowrap;
}

.trust-item span {
  margin-left: 8px;
}

/* Animation */
@keyframes scrollLeft {
  0% {
    transform: translateX(-50%);
  }
  100% {
    transform: translateX(0%);
  }
}

</style>
