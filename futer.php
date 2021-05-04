 <!--FUTER-->
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border:none; 
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius:50%;
  outline:none;
}

#myBtn:hover {
  background-color: #555; color:#FC0;
}
</style>

<footer>
<header class="futer">
<article class="f1">
<label for="c1">THE SIDES</label>
<input type="checkbox" id="c1" />
<div>
<a href="index.php">Home</a>
<a href="jelovnik.php">Menu</a>
<a href="utisci.php">Impressions</a>
<a href="kontakt.php">Contact</a>
<a href="onama.php">Locations</a>
</div>
</article>


<article class="f2">
<label for="c2">ADDITIONALLY</label>
<input type="checkbox" id="c2" />
<div>
<a href="pravilakoriscenja.php">Rules of use</a>
<a href="pravilaprivatnosti.php">Privacy policy</a>
<a href="pomoc.php">Help</a>
<a href="gdesmo.php">Faq</a>
<a href="utisci.php">Book of impressions</a>
</div>
</article>

<article class="f3">
<label for="c3">ORDER</label>
<input type="checkbox" id="c3" />
<div>Order and pick up at 769-230-6321
Delivery for over 10$!
</div>
</article>

<article class="f4">
<label for="c4">COMMUNICATION</label>
<input type="checkbox" id="c4" />
<div>

<form action="subscribe.php" method="post">
<label>Sign up to get notifications for new dishes!</label>
<input type="email" name="email" placeholder="E-mail" required="required" />
<input type="submit" value="SUBSCRIBE" />
</form><br />

<figure>
<figcaption>Follow us on social networks!</figcaption>
<a href="facebook.com"><img src="grafika/logo3.png"></a>
<a href="instagram.com"><img src="grafika/logo6.png"></a>
<a href="whatsapp.com"><img src="grafika/logo5.png"></a>
</figure>

</div>
</article>

</header>
</footer>

<!--FUTER END-->
<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
<?php
mysqli_close($conn);
?>