<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <Createthecert/>
  </div>
</template>

<script>
import Createthecert from './components/create-the-cert.vue'

export default {
  name: 'app',
  components: {
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
