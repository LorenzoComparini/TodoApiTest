<template>
  <div id="app">
    <div class="flex flex-col w-full min-h-screen">
      <Navbar></Navbar>
      <div class="flex flex-grow">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue'

export default {
  name: 'App',
  components: {
    Navbar
  }
}
</script>

