<section id="makecert" class="certsection">
  <div class="container">
  <div class="columns is-marginless">
  <div class="column is-two-thirds is-mobile certback">
    <div class="thecert" id="maincert" :style="{'background-image': 'url(' + 'img/cert-'+ certnum +'.jpg' + ')'}">
      <img src="img/cert-1.jpg" id="pushpic" class="hideo"/> 
        <!-- ////////////////// -->
        <div class="overcertcontain" id="overcontainer">
        <div class="innercontainer">
        <p class="jerkname-title">Certificate of {{ jerktitle }}</p>
        <p class="jerkname-a">{{ jerkname }}</p>
        <p class="jerkname-details">{{ jerkdetails }}</p>
        </div>
        </div>
        <!-- ////////////////// -->
  </div>
  </div>
  <div class="column has-text-left fill-fields">
<div v-if="certnum === '1'">
<h2>Certificate of {{jerkplaceholder_1}}</h2>
</div>
<div v-else-if="certnum === '2'">
<h2>Certificate of {{jerkplaceholder_2}}</h2>
</div>
<div v-else-if="certnum === '3'">
<h2>Certificate of {{jerkplaceholder_3}}</h2>
</div>
<div v-else>
<h2>{{jerkplaceholder_1}}</h2>
</div>
    <br>
<div class="field">
  <label class="label">Choose Cert style</label>
  <div class="control">
    <input class="input" v-model="certnum" type="number" min="1" max="3">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>
<!-- ////////////////// -->
<div class="field">
  <label class="label">Certificate of:</label>
  <div class="control">

<div v-if="certnum === '1'">
<input class="input" v-model="jerktitle" :placeholder="jerkplaceholder_1">
</div>
<div v-else-if="certnum === '2'">
<input class="input" v-model="jerktitle" :placeholder="jerkplaceholder_2">
</div>
<div v-else-if="certnum === '3'">
<input class="input" v-model="jerktitle" :placeholder="jerkplaceholder_3">
</div>
<div v-else>
<input class="input" v-model="jerktitle" :placeholder="jerkplaceholder_1">
</div>


  </div>
</div>
<!-- ////////////////// -->
<div class="field">
  <label class="label">Name of Person</label>
  <div class="control">
    <input class="input" v-model="jerkname" :placeholder="jerknameplaceholder">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>
<!-- ////////////////// -->
<div class="field">
  <label class="label">Details of Shittiness or Greatness etc</label>
  <div class="control">
    <textarea class="input" v-model="jerkdetails" :placeholder="jerkdetailsplaceholder"></textarea>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
  </div>
</div>
<!-- ////////////////// -->
<button type="button" 
class="button is-medium snipcart-add-item genbutton"
data-item-id="4"
data-item-name="Hot Certificate"
data-item-price="15.00"
data-item-url="http://doublemarvellous.com/barry-storage/JerkCert/"
data-item-custom1-name="Certificate Title"
:data-item-custom1-value="jerktitle"
data-item-custom2-name="Name of Jerk"
:data-item-custom2-value="jerkname"
data-item-custom3-name="Detail"
data-item-custom3-type="textarea"
:data-item-custom3-value="jerkdetails"
data-item-custom4-name="Cert Style"
:data-item-custom4-value="certnum"
>Add to cart</button>
<!-- //////////////////

-->
<!-- ////////////////// -->

  </div>
</div>
</div>


</section>
<script>

var app = new Vue({
  el: '#makecert',
data: {
  jerkplaceholder_1: 'Shittiness',
  jerkplaceholder_2: 'Okayness',
  jerkplaceholder_3: 'Sexiness',
  jerknameplaceholder: "Barry Murphy",
  jerkdetailsplaceholder: 'Has the best arse in town and great legs',
jerktitle: '',
jerkname: '',
jerkdetails: '',
imagelink: 'cert-1.jpg',
itemurl:'http://doublemarvellous.com/barry-storage/JerkCert/',
certnum: '1',
},

//
methods: {
makeheight: function() {
setTimeout(function(){ 
var currentHeightElement = document.getElementById('pushpic').offsetHeight;
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


<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" id="snipcart" data-api-key="OGZlMTdiZWItMGIxMi00MTMyLTliMzItMDhhNzI4YmM5OTViNjM2NTg5Njk0MjQ3MDQ5NTcz"></script>