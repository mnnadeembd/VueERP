<template>
  <div>

    <HeaderNavbar />

    <!-- HERO SECTION -->
    <section class="contact-hero text-white text-center py-5">
      <div class="container-fluid px-lg-5 px-3">
        <h1 class="fw-bold">Contact Us</h1>
        <p class="lead">We are here to help you. Get in touch with us today!</p>
      </div>
    </section>

    <!-- CONTACT INFO & FORM -->
    <section class="container-fluid py-5 px-lg-5 px-3">
      <div class="row g-4">

        <!-- Contact Info -->
        <div class="col-md-4">
          <div class="contact-info p-4 shadow-sm rounded bg-light">
            <h4 class="text-success mb-3">Get in Touch</h4>
            <p>📍 Dhaka, Bangladesh</p>
            <p>📞 +880123456789</p>
            <p>✉️ info@agromarket.com</p>
            <h5 class="mt-3 text-success">Follow Us</h5>
            <p>
              <a href="#" class="text-success me-2">Facebook</a>
              <a href="#" class="text-success me-2">Twitter</a>
              <a href="#" class="text-success">LinkedIn</a>
            </p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-8">
          <div class="contact-form p-4 shadow-sm rounded bg-white">
            <h4 class="text-success mb-3">Send a Message</h4>
            <form @submit.prevent="submitForm">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" v-model="form.name" class="form-control" placeholder="Your Name" />
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" v-model="form.email" class="form-control" placeholder="Your Email" />
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea v-model="form.message" class="form-control" rows="5" placeholder="Your Message"></textarea>
              </div>
              <button class="btn btn-success">Send Message</button>
            </form>
            <div v-if="success" class="text-success mt-3">{{ success }}</div>
          </div>
        </div>

      </div>
    </section>

    <!-- MAP PLACEHOLDER -->
    <section class="map-section container-fluid px-lg-5 px-3 mb-5">
      <div class="map-placeholder rounded shadow-sm" >
        <!-- You can embed Google Map iframe here -->
        <p class="text-center py-5 text-success">[Map Placeholder]</p>
      </div>
    </section>

  </div>
</template>

<script setup>
import { reactive, ref } from "vue";
import HeaderNavbar from "../../layouts/HeaderNavbar.vue";

const form = reactive({
  name: "",
  email: "",
  message: ""
});

const success = ref("");

const submitForm = () => {
  // Temporary: just show success
  success.value = "Thank you! Your message has been sent.";
  // Reset form
  form.name = "";
  form.email = "";
  form.message = "";
};
</script>

<style scoped>
/* HERO SECTION */
.contact-hero {
  background: linear-gradient(135deg, #22c55e, #16a34a);
  padding: 100px 0;
}

/* CONTACT FORM & INFO */
.contact-form input,
.contact-form textarea {
  border-radius: 8px;
  border: 1px solid #d1d5db;
  padding: 12px;
  outline: none;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #16a34a;
  box-shadow: 0 0 0 2px rgba(22, 163, 74, 0.15);
}

/* MAP PLACEHOLDER */
.map-placeholder {
  background: #dcfce7;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
