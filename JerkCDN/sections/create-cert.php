<section id="app">
  <div class="container">
  <div class="columns">
  <div class="column is-two-thirds is-mobile certback">
    <div class="thecert" id="maincert" :style="{'background-image': 'url(' + 'img/cert-'+ certnum +'.png' + ')'}">
      <img src="img/cert-1.png" class="hideo"/> 
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
<!-- ////////////////// -->
<button type="button" class="button is-medium snipcart-add-item"
:data-item-id="productid"
:data-item-name="producttitle"
:data-item-url="itemurl"
:data-item-price="itemprice"
:data-item-description="jerktitle+'<br>'+jerkname+'<br>'+jerkdetails+'<br>Cert Number:'+certnum"
>
  Add to cart
</button>
<!-- //////////////////

-->
<!-- ////////////////// -->

  </div>
</div>
</div>
</section>
<script>

var app = new Vue({
  el: '#app',
data: {
productid:'4',
producttitle: 'Hot Certificate',
jerktitle: 'Certificate of Shittiness',
jerkname: 'Dick Lavender',
jerkdetails: 'He is a total loser. We keep trying to fire him.',
imagelink: 'cert-1.png',
itemprice: '2.00',
itemurl:'http://doublemarvellous.com/barry-storage/JerkCert/',
certnum: '1',
},

//
methods: {
makeheight: function() {
setTimeout(function(){ 
var currentHeightElement = document.getElementById('maincert').offsetHeight;
document.getElementById('overcontainer').style.height = currentHeightElement;
}, 400);
}
},
//

created() {
this.makeheight()
},
})

</script>
