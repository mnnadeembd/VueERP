<template>
  <div>
    <HeaderNavbar/>

    <!-- HERO -->
    <section class="contact-hero text-white text-center">
      <div class="container-fluid px-lg-5 px-3">
        <h1 class="fw-bold">যোগাযোগ করুন</h1>
        <p class="lead">AgroMarket আপনার পাশে — যেকোনো প্রয়োজনে আমাদের সাথে যোগাযোগ করুন</p>
      </div>
    </section>

    <!-- INFO BOX -->
    <section class="container-fluid px-lg-5 px-3 py-5">
      <div class="row text-center g-4">

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            📍
            <h6>ঠিকানা</h6>
            <p>Dhaka, Bangladesh</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            📞
            <h6>ফোন</h6>
            <p>+880 1234 567 890</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            ✉️
            <h6>ইমেইল</h6>
            <p>support@agromarket.com</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info-box shadow-sm">
            ⏰
            <h6>সাপোর্ট সময়</h6>
            <p>24/7 Support</p>
          </div>
        </div>

      </div>
    </section>

    <!-- FORM + MAP -->
    <section class="container-fluid px-lg-5 px-3 pb-5">
      <div class="row g-4 align-items-stretch">

        <!-- FORM -->
        <div class="col-lg-6">
          <div class="contact-form shadow-sm h-100">
            <h4 class="text-success mb-3">মেসেজ পাঠান</h4>

            <form @submit.prevent="submitForm">
              <input v-model="form.name" class="form-control mb-3" placeholder="নাম">
              <input v-model="form.email" class="form-control mb-3" placeholder="ইমেইল">
              <input v-model="form.phone" class="form-control mb-3" placeholder="মোবাইল">
              <textarea v-model="form.message" class="form-control mb-3" rows="4" placeholder="আপনার বার্তা"></textarea>
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
      <div class="container-fluid px-lg-5 px-3">
        <h3 class="fw-bold mb-4">কেন AgroMarket?</h3>
        <div class="row g-4">
          <div class="col-md-3">🚚<p>দ্রুত ডেলিভারি</p></div>
          <div class="col-md-3">✅<p>মানসম্মত পণ্য</p></div>
          <div class="col-md-3">💳<p>সহজ পেমেন্ট</p></div>
          <div class="col-md-3">☎️<p>২৪/৭ সহায়তা</p></div>
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
  success.value = "ধন্যবাদ! আপনার বার্তা পাঠানো হয়েছে।";
  form.name = form.email = form.phone = form.message = "";
};
</script>

<style scoped>
.contact-hero {
  background: linear-gradient(135deg, #16a34a, #22c55e);
  padding: 100px 0;
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
</style>
