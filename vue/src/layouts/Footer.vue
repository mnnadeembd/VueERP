<template>
  <footer class="footer">
    <div class="footer-container">
      <!-- Brand -->
      <div class="footer-section">
        <h3 class="logo">
          <span>Vue</span>Admin
        </h3>
        <p class="desc">
          Professional admin dashboard built with Vue.js 💙
        </p>
      </div>

      <!-- Links -->
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Roles</a></li>
          <li><a href="#">Create Role</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </div>

      <!-- Social -->
      <div class="footer-section">
        <h4>Connect</h4>
        <div class="social-links">
          <a href="https://www.facebook.com/mnnadeembd" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
      © {{ year }} All rights reserved.
    </div>
  </footer>
</template>

<script>
export default {
  name: "AppFooter",
  data() {
    return {
      year: new Date().getFullYear(),
    };
  },
};
</script>

<style scoped>
.footer {
  background: linear-gradient(135deg, #1e3a8a, #0284c7);
  color: #e0f2fe;
  padding: 45px 20px 20px;
  font-family: Arial, sans-serif;
}

.footer-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
}

/* Logo */
.logo {
  font-size: 24px;
  color: #ffffff;
}

.logo span {
  color: #fde68a;
}

.desc {
  margin-top: 10px;
  line-height: 1.6;
  color: #e0f2fe;
}

/* Section titles */
.footer-section h4 {
  margin-bottom: 15px;
  color: #f8fafc;
}

/* Links */
.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 8px;
}

.footer-section ul li a {
  color: #dbeafe;
  text-decoration: none;
  transition: all 0.3s ease;
}

.footer-section ul li a:hover {
  color: #fde68a;
  padding-left: 5px;
}

/* Social icons */
.social-links a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  margin-right: 10px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.15);
  color: #ffffff;
  font-size: 16px;
  transition: all 0.3s ease;
}

.social-links a:hover {
  background: #fde68a;
  color: #1e3a8a;
  transform: translateY(-3px);
}

/* Bottom bar */
.footer-bottom {
  margin-top: 35px;
  text-align: center;
  font-size: 14px;
  color: #e0f2fe;
  border-top: 1px solid rgba(255, 255, 255, 0.25);
  padding-top: 15px;
}

/* Responsive */
@media (max-width: 768px) {
  .footer {
    text-align: center;
  }

  .social-links {
    justify-content: center;
  }
}
</style>
