<template>
  <HeaderNavbar />
  <div class="login-wrapper">
    <div class="login-card">

      <!-- Header -->
      <div class="login-header">
        <h2>Welcome Back!</h2>
        <p>Please login to access your dashboard.</p>
      </div>

      <!-- Form -->
      <form class="login-form" @submit.prevent="submit">

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" v-model="form.email" placeholder="Enter your email" />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" v-model="form.password" placeholder="Enter your password" />
          <div class="form-text text">Don't share your password with anyone ealse.</div>
        </div>

        <div class="form-options">
          <label class="remember">
            <input type="checkbox" />
            Remember me
          </label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>

      </form>

      <!-- Footer -->
      <div class="login-footer">
        Don’t have an account?
        <a href="#">Register</a>
      </div>

    </div>
  </div>
  <FooterSection/>
</template>

<script setup>
import { reactive, ref } from "vue";
import { useRouter } from "vue-router";
import HeaderNavbar from "../layouts/HeaderNavbar.vue";
import FooterSection from "../layouts/FooterSection.vue";
// import auth from "../services/auth";

const router = useRouter();

const form = reactive({
  email: "",
  password: ""
});

const error = ref("");

const submit = async () => {
  try {
    let res = await auth.login(form);
    console.log(res);
    router.push("/"); // dashboard এ redirect
  } catch (e) {
    error.value = "Login Failed";
  }
};
</script>

<style scoped>
/* 🌱 Background */
.login-wrapper {
  background: linear-gradient(135deg, #22c55e, #16a34a, #4ade80);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 100vh;
}

/* 💎 Card */
.login-card {
  width: 380px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(8px);
  border-radius: 16px;
  padding: 35px 30px;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  text-align: center;
}

/* Header */
.login-header h2 {
  margin-bottom: 6px;
  color: #065f46;
}

.login-header p {
  color: #065f46;
  font-size: 14px;
  margin-bottom: 25px;
}

/* Form */
.form-group {
  text-align: left;
  margin-bottom: 18px;
}

.form-group label {
  font-size: 14px;
  font-weight: 600;
  color: #065f46;
}

.form-group input {
  width: 100%;
  margin-top: 6px;
  padding: 12px;
  border-radius: 8px;
  border: 1px solid #d1d5db;
  outline: none;
  transition: 0.2s;
}

.form-group input:focus {
  border-color: #16a34a;
  box-shadow: 0 0 0 2px rgba(22, 163, 74, 0.15);
}

/* Options */
.form-options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 13px;
  margin-bottom: 20px;
}

.form-options a {
  color: #16a34a;
  text-decoration: none;
}

.remember {
  display: flex;
  align-items: center;
  gap: 6px;
}

/* Button */
.login-btn {
  width: 100%;
  padding: 12px;
  background: linear-gradient(135deg, #16a34a, #22c55e);
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}

.login-btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 8px 18px rgba(34, 197, 94, 0.35);
}

/* Footer */
.login-footer {
  margin-top: 20px;
  font-size: 14px;
  color: #065f46;
}

.login-footer a {
  color: #16a34a;
  text-decoration: none;
  font-weight: 600;
}
</style>
