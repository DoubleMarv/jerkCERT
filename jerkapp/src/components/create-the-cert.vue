<template>
  <div class="container">
  <div class="columns">
  <div class="column is-two-thirds is-mobile certback">
    <div class="thecert" id="maincert" :style="{'background-image': 'url(' + require('./../assets/img/cert-'+ certnum +'.png') + ')'}">
      <img src="./../assets/img/cert-1.png" class="hideo"/> 
        <!-- ////////////////// -->
        <div class="overcertcontain" id="overcontainer">
        <div class="innercontainer">
        <p class="jerkname-title">{{ jerktitle }}</p>
        <p class="jerkname-a">{{ jerkname }}</p>
        <p class="jerkname-details">{{ jerkdetails }}</p>
        </div>
        </div>
        <!-- ////////////////// -->
  </div>
  </div>
  <div class="column has-text-left fill-fields">

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
<!-- ////////////////// -->
<div class="field">
  <label class="label">Details of Shittiness</label>
  <div class="control has-icons-left">
    <textarea  v-model="jerkdetails" placeholder="Details of jerk"></textarea>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
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
      jerkname: 'Dick Lavender',
      jerkdetails: 'He is a total loser. We keep trying to fire him.',
      imagelink: 'cert-1.png',
      certnum: '1'
    }
  },
      methods: {
    makeheight: function() {
      setTimeout(function(){ 
                var currentHeightElement = document.getElementById('maincert').offsetHeight;
                document.getElementById('overcontainer').style.height = currentHeightElement;
                 }, 400);
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
.hideo{
opacity: 0;
}

.thecert{
background-size: cover;
background-repeat: no-repeat;
background-position: center;
position: relative;
}

@media screen and (min-width:992px){
.thecert{
height: 70vh;
}
}
@media screen and (max-width:991px){
.thecert{
height: auto
}
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
/******************/
/*Comment
/*******************/
.jerkname-title{
font-family: 'Yesteryear', cursive;
margin-top: 9%;
font-size: 45px;
position: absolute;
left: 0;
    right: 0;
}

.jerkname-a{
font-family: 'Cinzel Decorative', cursive;
margin-top: 29%;
font-size: 22px;
font-weight: 600;
position: absolute;
left: 0;
    right: 0;
}

.jerkname-details{
  font-family: 'Alex Brush', cursive;
    margin-top: 42%;
    font-size: 27px;
    position: absolute;
    left: 0;
    right: 0;
}

/******************/
/*Comment
/*******************/

.fill-fields input,
.fill-fields textarea{
width: 100%;
}
/******************/
/*Comment
/*******************/
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
