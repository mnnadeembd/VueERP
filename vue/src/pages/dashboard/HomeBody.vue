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
        { id: 1, name: "ধানের বীজ", price: 120, image: "https://www.shutterstock.com/image-photo/bunch-paddy-rice-field-before-600nw-2219469869.jpg" },
        { id: 2, name: "জৈব সার", price: 350, image: "data:image/jpeg;base64,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" },
        { id: 3, name: "কীটনাশক", price: 220, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWuW3pkDar3JI4qJHdCOH-LhGkBMO0Y3Jl6Ooucbvg&s" },
        { id: 4, name: "স্প্রে মেশিন", price: 1500, image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaUKqHjhwLCROww_BS0A2fhtZP3oZu46F9uA&s" }
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
