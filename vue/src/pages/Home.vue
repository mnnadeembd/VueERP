<template>
  <div>
    <HeaderNavbar />
    <HomeBody />
    <FooterSection />
  </div>
</template>

<script>

import HeaderNavbar from '../layouts/HeaderNavbar.vue'
import HomeBody from '../pages/dashboard/HomeBody.vue'
import FooterSection from '../layouts/FooterSection.vue'

export default {
  components: {
    HeaderNavbar,
    HomeBody,
    FooterSection
  }
}
</script>
