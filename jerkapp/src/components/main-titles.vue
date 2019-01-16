<template>
  <div class="columns">
  <div class="column">
    <h1>{{ jerktitle }}</h1>
  </div>
</div>
</template>

<script>
export default {
  name: 'Maintitles',
 data: function () {
    return {
      jerktitle: 'JerkCert'
    }
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #33bec3;
  font-size: 3em;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
