<template>
  <div class="columns">
  <div class="column">
    <h1>{{ jerktitle }}</h1>
    <h3>When you need a <strong>cert</strong> for a <strong>jerk</strong></h3>
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
/*font-family: 'Press Start 2P', cursive;
font-family: 'Lato', sans-serif;*/
h1 {
  color: #33bec3;
  font-size: 3em;
  font-family: 'Press Start 2P', cursive;
}

h3 {
  color: #333;
  font-size: 1.4em;
  font-family: 'Lato', sans-serif;
}
p, strong{
  font-family: 'Lato', sans-serif;
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
