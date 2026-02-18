<template>
  <div>
    <HeaderNavbar/>

    <!-- HERO SECTION -->
    <section class="blog-hero bg-success text-white text-center py-5">
      <div class="container">
        <h1 class="fw-bold">AgroMart Blog</h1>
        <p class="lead">Tips, Technology & Market Information</p>
      </div>
    </section>

    <!-- BLOG POSTS -->
    <section class="container py-5">
      <div class="row g-4">

        <div class="col-md-4" v-for="post in posts" :key="post.id">
          <div class="card h-100 shadow-sm blog-card">
            <img :src="post.image" class="card-img-top" alt="blog image">
            <div class="card-body">
              <h5 class="card-title">{{ post.title }}</h5>
              <p class="text-muted small">{{ post.date }}</p>
              <p class="card-text">{{ post.excerpt }}</p>
              <button class="btn btn-success btn-sm">Read More</button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <FooterSection/>

  </div>
</template>

<script setup>
import { ref } from "vue";
import HeaderNavbar from "../../layouts/HeaderNavbar.vue";
import FooterSection from "../../layouts/FooterSection.vue";

const posts = ref([
  {
    id: 1,
    title: "ধান চাষের আধুনিক পদ্ধতি",
    date: "12 Feb 2026",
    excerpt: "উচ্চ ফলন পেতে আধুনিক পদ্ধতিতে ধান চাষের গুরুত্বপূর্ণ ধাপগুলো জানুন...",
    image: "https://www.thedailystar.net/sites/default/files/styles/big_1/public/images/2023/10/24/lalmonirhat_char_farmers-01.jpg"
  },
  {
    id: 2,
    title: "শীতকালীন সবজি চাষের সম্পূর্ণ গাইড",
    date: "05 Feb 2026",
    excerpt: "শীতকালে কোন সবজি চাষে লাভ বেশি এবং কীভাবে পরিচর্যা করবেন...",
    image: "https://www.tbsnews.net/sites/default/files/styles/big_3/public/images/2026/01/21/img_2976.jpg"
  },
  {
    id: 3,
    title: "কীটনাশক ব্যবহারে নিরাপত্তা নির্দেশনা",
    date: "28 Jan 2026",
    excerpt: "সঠিকভাবে কীটনাশক ব্যবহার না করলে ফসল ও মানুষের ক্ষতি হতে পারে...",
    image: "https://www.thedailystar.net/sites/default/files/styles/big_1/public/images/2025/11/17/gap_crop.jpg?h=86b7073e"
  },
  {
    id: 4,
    title: "জৈব সার ব্যবহারের উপকারিতা",
    date: "18 Jan 2026",
    excerpt: "মাটির উর্বরতা বৃদ্ধি ও স্বাস্থ্যকর ফসল উৎপাদনে জৈব সার অত্যন্ত কার্যকর...",
    image: "https://www.fao.org/images/rlclibraries/news/dis-1-11.jpg?sfvrsn=82e241b_2"
  },
  {
    id: 5,
    title: "ড্রিপ সেচ প্রযুক্তি কী এবং কেন প্রয়োজন?",
    date: "10 Jan 2026",
    excerpt: "কম পানিতে বেশি ফলনের জন্য ড্রিপ সেচ প্রযুক্তি অত্যন্ত কার্যকর...",
    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgxB6QX6aJqWq53ZceZBEb7uDlN_oEqlATubqx7RFO&s"
  },
  {
    id: 6,
    title: "বীজ নির্বাচন করার সঠিক পদ্ধতি",
    date: "02 Jan 2026",
    excerpt: "উন্নত মানের বীজ নির্বাচন করলে ফলন বৃদ্ধি পায় এবং রোগ প্রতিরোধ ক্ষমতা বাড়ে...",
    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFjLyjHIFqwTOiLREP8an6d75M80iiqKJzrQ&s"
  }
]);
</script>

<style scoped>
.blog-hero {
  padding: 100px 0;
}

.blog-card img {
  height: 200px;
  object-fit: cover;
}

.blog-card {
  border-radius: 12px;
  transition: 0.3s;
}

.blog-card:hover {
  transform: translateY(-6px);
}
</style>
