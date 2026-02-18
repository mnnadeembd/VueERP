<template>
  <div>
    <HeaderNavbar/>

    <!-- HERO -->
    <section class="contact-hero bg-success text-white text-center">
      <div class="container">
        <h1 class="fw-bold">You may contact us at any time</h1>
        <p class="lead">AgroMart  —  are always here to assist you with any of your needs.</p>
      </div>
    </section>

    <!-- INFO BOX -->
    <section class="container-fluid py-5">
      <div class="row text-center g-4">

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            📍
            <h6>Address</h6>
            <p>Dhaka, Bangladesh</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            📞
            <h6>Phone</h6>
            <p>+880 1234 567 890</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            ✉️
            <h6>Email</h6>
            <p>support@agromarket.com</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            ⏰
            <h6>Support Time</h6>
            <p>24/7 Support</p>
          </div>
        </div>

      </div>
    </section>

    <!-- FORM + MAP -->
    <section class="container pb-5">
      <div class="row g-4 align-items-stretch">

        <!-- FORM -->
        <div class="col-lg-6">
          <div class="contact-form shadow-sm h-100">
            <h4 class="text-success mb-3">Send Message</h4>

            <form @submit.prevent="submitForm">
              <input v-model="form.name" class="form-control mb-3" placeholder="Name">
              <input v-model="form.email" class="form-control mb-3" placeholder="Email">
              <input v-model="form.phone" class="form-control mb-3" placeholder="Phone">
              <textarea v-model="form.message" class="form-control mb-3" rows="4" placeholder="Your Message"></textarea>
              <button class="btn btn-success w-100">Send Message</button>
            </form>

            <div v-if="success" class="text-success mt-3">
              {{ success }}
            </div>
          </div>
        </div>

        <!-- MAP -->
        <div class="col-lg-6">
          <div class="map-wrapper shadow-sm h-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1524.14042660888!2d90.3726966807797!3d23.739161488471282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1771267784802!5m2!1sen!2sbd"
              width="100%"
              height="100%"
              style="border:0;"
              loading="lazy">
            </iframe>
          </div>
        </div>

      </div>
    </section>

    <!-- TRUST -->
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


    <FooterSection/>
  </div>
</template>

<script setup>
import { reactive, ref } from "vue";
import HeaderNavbar from "../../layouts/HeaderNavbar.vue";
import FooterSection from "../../layouts/FooterSection.vue";

const form = reactive({
  name: "",
  email: "",
  phone: "",
  message: ""
});

const success = ref("");

const submitForm = () => {
  success.value = "Thank you! Your message has been sent.";
  form.name = form.email = form.phone = form.message = "";
};
</script>

<style scoped>
.contact-hero {
  padding: 100px 0 ;
}

.info-box {
  background: #fff;
  padding: 30px;
  border-radius: 14px;
  transition: 0.3s;
}

.info-box:hover {
  transform: translateY(-6px);
}

.contact-form {
  background: #fff;
  padding: 30px;
  border-radius: 14px;
}

.map-wrapper {
  border-radius: 14px;
  overflow: hidden;
  min-height: 100%;
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
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

</style>
