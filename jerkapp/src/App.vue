<template>
  <div id="app">
    <Maintitles/>
    <Createthecert/>
  </div>
</template>

<script>
import Maintitles from './components/main-titles.vue'
import Createthecert from './components/create-the-cert.vue'

export default {
  name: 'app',
  components: {
    Maintitles,
    Createthecert
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
