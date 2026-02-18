<template>
  <footer class="bg-success text-white pt-5">
    <div class="container">
      <div class="row">

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">AgroMart</h5>
          <p>Empowering farmers with quality agricultural products.</p>
          <p>Dhaka, Bangladesh</p>
          <p>+880123456789</p>
          <p>info@agromarket.com</p>
        </div>

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Quick Links</h5>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
          <p>Refund Policy</p>
          <p>Support Center</p>
        </div>

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Newsletter</h5>
          <p>Subscribe to get latest updates.</p>
          <input class="form-control mb-2" placeholder="Your email">
          <button class="btn btn-light text-success w-100 fw-bold">
            Subscribe
          </button>
        </div>
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Follow Us</h5>
          <p>Stay connected on social media.</p>
          <div class="d-flex justify-content-center  gap-3  ">
            <a href="https://www.facebook.com" target="_blank" class="bg-light p-2 rounded social-icon text-primary">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="bg-light p-2 rounded social-icon text-info">
              <i class="bi bi-twitter"></i> 
            </a>
            <a href="https://www.instagram.com" target="_blank" class="bg-light p-2 rounded social-icon text-danger">
              <i class="bi bi-instagram"></i> 
            </a>
            <a href="https://www.linkedin.com" target="_blank" class="bg-light p-2 rounded social-icon text-primary">
              <i class="bi bi-youtube"></i>
            </a>
          </div>

        </div>


      </div>

      <hr class="bg-white">

      <p class="text-center pb-3 mb-0">
        © 2026 AgroMarket. All Rights Reserved.
      </p>
    </div>
  </footer>
</template>
<script setup>

</script>

<style>
.social-icon i {
  font-size: 24px;
  transition: transform 0.2s;
}

.social-icon:hover i {
  transform: scale(1.2);
}



</style>
