<template>
  <div>

    <!-- HERO SECTION -->
    <section class="bg-success text-white text-center py-5">
      <div class="container-fluid px-4">
        <h1 class="fw-bold">কৃষির জন্য সেরা পণ্য</h1>
        <p>বীজ, সার, কীটনাশক ও কৃষি যন্ত্রপাতি এখন অনলাইনে</p>
        <button class="btn btn-light text-success fw-bold mt-3">Shop Now</button>
      </div>
    </section>

    <!-- CATEGORIES -->
    <section class="container-fluid py-5 px-4">
      <h3 class="text-center mb-4">Popular Categories</h3>
      <div class="row text-center">
        <div class="col-md-3 mb-3">
          <div class="card p-4 category-card">🌱 বীজ</div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card p-4 category-card">🧪 সার</div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card p-4 category-card">🐛 কীটনাশক</div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card p-4 category-card">🚜 কৃষি যন্ত্রপাতি</div>
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
              <img :src="product.image" class="card-img-top" alt="Product Image">
              <div class="card-body text-center">
                <h6>{{ product.name }}</h6>
                <p class="text-success fw-bold">৳ {{ product.price }}</p>
                <button class="btn btn-success btn-sm w-100">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- BENEFITS -->
    <section class="container-fluid py-5 text-center px-4">
      <h3 class="mb-4">Why Choose Us?</h3>
      <div class="row">
        <div class="col-md-3 mb-3">🚚<p>Home Delivery</p></div>
        <div class="col-md-3 mb-3">✅<p>Quality Guarantee</p></div>
        <div class="col-md-3 mb-3">💳<p>Easy Payment</p></div>
        <div class="col-md-3 mb-3">☎️<p>24/7 Support</p></div>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [
        { id: 1, name: "ধানের বীজ", price: 120, image: "https://via.placeholder.com/200" },
        { id: 2, name: "জৈব সার", price: 350, image: "https://via.placeholder.com/200" },
        { id: 3, name: "কীটনাশক", price: 220, image: "https://via.placeholder.com/200" },
        { id: 4, name: "স্প্রে মেশিন", price: 1500, image: "https://via.placeholder.com/200" }
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
</style>
