<template>
  <header class="app-header">
    <div class="nav-container">
      <!-- Logo -->
      <div class="logo">
        <span>Vue</span>Admin
      </div>

      <!-- Navigation -->
      <nav class="nav-links">
        <div class="btn-group">
          <!-- <router-link to="/" class="nav-link" active-class="active">Home</router-link> -->
          <button class="nav-link" active-class="active" @click="logout">Logout</button>
        </div>

        <!-- Cart -->
        <div class="cart-wrapper" @click.stop="toggleCart">
          <span class="cart-icon">🛒</span>
          <span v-if="cartItems.length" class="cart-badge">
            {{ cartItems.length }}
          </span>

          <!-- Dropdown -->
          <div v-if="showCart" class="cart-dropdown">
            <h6 class="dropdown-title">My Cart</h6>

            <div v-if="cartItems.length">
              <div
                class="cart-item"
                v-for="item in cartItems"
                :key="item.id"
              >
                <img :src="item.thumbnail" />
                <div>
                  <p class="item-title">{{ item.title }}</p>
                  <span class="item-price">৳ {{ item.price }}</span>
                </div>
              </div>

              <button class="btn btn-sm btn-primary w-100 mt-2">
                View Cart
              </button>
            </div>

            <p v-else class="empty-text">
              Cart is empty
            </p>
          </div>
        </div>
      </nav>
    </div>
  </header>
</template>

<script lang="ts" setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { useRouter } from "vue-router";
// import auth from "../services/auth";

const router = useRouter();

const logout = async ()=>{

  await auth.logout();
  router.push("/login");
};

/* TEMP demo data
   Later replace with Pinia / store */
const cartItems = ref([
  {
    id: 1,
    title: "iPhone 15",
    price: 1200,
    thumbnail: "https://dummyjson.com/image/80x80"
  }
]);

const showCart = ref(false);

const toggleCart = () => {
  showCart.value = !showCart.value;
};

const closeCart = () => {
  showCart.value = false;
};

onMounted(() => {
  document.addEventListener("click", closeCart);
});

onBeforeUnmount(() => {
  document.removeEventListener("click", closeCart);
});
</script>

<style scoped>
.app-header {
  background: linear-gradient(135deg, #4f46e5, #06b6d4);
  padding: 14px 0;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.nav-container {
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Logo */
.logo {
  font-size: 22px;
  font-weight: bold;
  color: #ffffff;
}

.logo span {
  color: #fde68a;
}

/* Nav */
.nav-links {
  display: flex;
  gap: 18px;
  align-items: center;
}

.nav-link {
  text-decoration: none;
  color: #e0f2fe;
  padding: 8px 14px;
  border-radius: 6px;
  font-weight: 500;
}

.nav-link:hover {
  background: rgba(255, 255, 255, 0.2);
  color: #ffffff;
}

.active {
  background: #ffffff;
  color: #1e3a8a;
}

/* Cart */
.cart-wrapper {
  position: relative;
  cursor: pointer;
}

.cart-icon {
  font-size: 20px;
}

.cart-badge {
  position: absolute;
  top: -6px;
  right: -8px;
  background: #ef4444;
  color: #fff;
  font-size: 11px;
  padding: 2px 6px;
  border-radius: 50%;
}

/* Dropdown */
.cart-dropdown {
  position: absolute;
  right: 0;
  top: 40px;
  width: 260px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  padding: 12px;
  z-index: 100;
}

.dropdown-title {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 10px;
}

.cart-item {
  display: flex;
  gap: 10px;
  margin-bottom: 8px;
}

.cart-item img {
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 6px;
}

.item-title {
  font-size: 13px;
  margin: 0;
}

.item-price {
  font-size: 12px;
  color: #16a34a;
}

.empty-text {
  font-size: 13px;
  color: #6b7280;
  text-align: center;
}

/* Responsive */
@media (max-width: 768px) {
  .nav-container {
    flex-direction: column;
    gap: 10px;
  }
}
</style>
