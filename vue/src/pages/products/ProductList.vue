<template>
  <HeaderNavbar/>
    <div>
      <section class="bg-light py-5">
      <div class="container-fluid px-4">
        <h3 class="text-center mb-4">Our Products</h3>
        <hr>
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
    </div>
  <FooterSection/>
</template>

<script setup>
import FooterSection from '../../layouts/FooterSection.vue';
import HeaderNavbar from '../../layouts/HeaderNavbar.vue';


</script>

<style>

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

</style>