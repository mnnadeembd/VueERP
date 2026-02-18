<template>
  <aside class="sidebar">
    <ul class="menu">
      <!-- Dashboard -->
      <li>
        <router-link to="/" class="menu-link" active-class="active">
          <span>🏠</span>
          <span>Dashboard</span>
        </router-link>
      </li>

      <!-- Pages Dropdown -->
      <li class="dropdown">
        <button class="menu-btn" @click="toggleDropdown('pages')">
          📄 Pages
          <span class="arrow" :class="{ open: openDropdown === 'pages' }">▼</span>
        </button>
        <ul class="dropdown-menu" v-if="openDropdown === 'pages'">
          <li>
            <router-link to="/role" class="menu-link" active-class="active">Roles</router-link>
          </li>
          <li>
            <router-link to="/customer" class="menu-link" active-class="active">Customer</router-link>
          </li>
          <li>
            <router-link to="/basic" class="menu-link" active-class="active">Basic Content</router-link>
          </li>
        </ul>
      </li>

      <!-- Basic Concepts Dropdown -->
      <li class="dropdown">
        <button class="menu-btn" @click="toggleDropdown('basic')">
          🧠 Basic Concepts
          <span class="arrow" :class="{ open: openDropdown === 'basic' }">▼</span>
        </button>
        <ul class="dropdown-menu" v-if="openDropdown === 'basic'">
          <li>
            <router-link to="/products" class="menu-link" active-class="active">Props</router-link>
          </li>
          <li>
            <router-link to="/city" class="menu-link" active-class="active">Watch</router-link>
          </li>
          <li>
            <router-link to="/basic" class="menu-link" active-class="active">Basic Content</router-link>
          </li>
        </ul>
      </li>
    </ul>

    <div class="sidebar-footer">
      <small>© 2026 VueAdmin</small>
    </div>
  </aside>
</template>

<script setup lang="ts">
import { ref } from "vue";

const openDropdown = ref<string | null>(null);

function toggleDropdown(name: string) {
  openDropdown.value = openDropdown.value === name ? null : name;
}
</script>

<style scoped>
/* Sidebar base */
.sidebar {
  width: 240px;
  min-height: 100vh;
  background: linear-gradient(180deg, #1e3a8a, #0284c7);
  color: #e0f2fe;
  display: flex;
  flex-direction: column;
  padding-top: 20px;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.15);
  overflow-y: auto;
}

/* Menu */
.menu {
  list-style: none;
  padding: 0;
  margin: 0;
  flex: 1;
}

.menu li {
  margin-bottom: 6px;
  position: relative; /* important for dropdown */
}

/* Normal link */
.menu-link {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 20px;
  text-decoration: none;
  color: #e0f2fe;
  font-weight: 500;
  border-left: 4px solid transparent;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.menu-link:hover {
  background: rgba(255, 255, 255, 0.1);
}

.active {
  background: rgba(255, 255, 255, 0.25);
  border-left: 4px solid #fde68a;
  color: #ffffff;
}

/* Dropdown Button */
.menu-btn {
  width: 100%;
  background: #1e3a8a;
  color: #e0f2fe;
  border: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  font-weight: 600;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.menu-btn:hover {
  background: #2c4eb7;
}

/* Arrow rotation */
.arrow {
  font-size: 10px;
  transition: transform 0.3s;
}

.arrow.open {
  transform: rotate(-180deg);
}

/* Dropdown Menu */
.dropdown-menu {
  width: 100%;
  background: #1e3a8a; /* full sidebar width */
  border-radius: 0 0 6px 6px;
}

.dropdown-menu li {
  margin: 0;
}

.dropdown-menu .menu-link {
  padding-left: 36px;
  font-size: 14px;
  background: transparent;
  border-left: none;
}

.dropdown-menu .menu-link:hover {
  background: rgba(255, 255, 255, 0.15);
}

/* Footer */
.sidebar-footer {
  padding: 15px;
  text-align: center;
  font-size: 13px;
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}
</style>
