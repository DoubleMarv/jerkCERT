<template>
  <div class="columns">
  <div class="column is-two-thirds certback">
    <div class="thecert" id="maincert" :style="{'background-image': 'url(' + require('./../assets/img/cert-'+ certnum +'.png') + ')'}">
    <div class="overcertcontain" id="overcontainer">
      <div class="innercontainer">
    <p class="jerkname-title">{{ jerktitle }}</p>
    <p class="jerkname-a">{{ jerkname }}</p>
  </div>
  </div>
  </div>
  </div>
  <div class="column has-text-left">

<div class="field">
  <label class="label">Choose Cert</label>
  <div class="control has-icons-left">
    <input v-model="certnum" type="number" min="1" max="2">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>
<!-- ////////////////// -->
<div class="field">
  <label class="label">Certificate of</label>
  <div class="control has-icons-left">
    <input v-model="jerktitle" placeholder="Certificate of Shittiness">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>
<!-- ////////////////// -->
<div class="field">
  <label class="label">Name of Person</label>
  <div class="control has-icons-left">
    <input v-model="jerkname" placeholder="Name of Jerk">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>

  </div>
</div>
</template>

<script>
export default {
  name: 'Createthecert',
 data: function () {
    return {
      jerktitle: 'Certificate of Shittiness',
      jerkname: '',
      certnum: '1'
    }
  },
      methods: {
    makeheight: function() {
      setTimeout(function(){ 
                var currentHeightElement = document.getElementById('maincert').offsetHeight;
                console.log(currentHeightElement);
                 }, 200);
  }
},
created: function(){
        this.makeheight()
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*font-family: 'Yesteryear', cursive;
font-family: 'Alex Brush', cursive;
font-family: 'Cinzel Decorative', cursive;*/

.thecert{
background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    height: 70vh;
    position: relative;
}

.overcertcontain{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
}

.innercontainer{
    position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
}
.jerkname-title{
font-family: 'Yesteryear', cursive;
margin-top: 9%;
    font-size: 45px;
}

.jerkname-a{
font-family: 'Cinzel Decorative', cursive;
      margin-top: 24%;
    font-size: 22px;
}

h3 {
  margin: 40px 0 0;
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
