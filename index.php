<?php session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged OUT!";
  header('location: login.php');
}
?>
<?php include "header.php"; ?>


<h2 style="text-align:center;"> Welcome to Hotel Vardani </h2>

  <!-- Images slideshown8 -->

<div id="stage">
<a title="hello world"><img src="images/view.png" class="slider-img"></a>
<a title="hello world"><img src="images/2.png"></a>
<a title="hello world"><img src="images/3.png"></a>
<a title="hello world"><img src="images/4.png"></a>
<a title="hello world"><img src="images/5.png"></a>
<a title="hello world"><img src="images/6.png"></a>

</div>


<style>

  #stage a {
    position: absolute;
  }
  #stage a::after {
    position: absolute;
    left: 11px;
    bottom: 11px;
    padding: 2px 0;
    width: calc(100% - 22px);
    background: rgba(0,0,0,0.5);
    text-align: center;
    content: attr(title);
    font-size: 1.1em;
    color: #fff;
  }
  #stage a img {
    width: 100%;
    height: 100%;
   
    border: 1px solid #ccc;
    background: #fff;
  }

  #stage a:nth-of-type(1) {
    animation-name: fader;
    animation-delay: 4s;
    animation-duration: 1s;
    z-index: 20;
  }
  #stage a:nth-of-type(2) {
    z-index: 10;
  }
  #stage a:nth-of-type(n+3) {
    display: none;
  }

  @keyframes fader {
    from { opacity: 1.0; }
    to   { opacity: 0.0; }
  }

</style>

<script>


  window.addEventListener("DOMContentLoaded", function(e) {

    // Original JavaScript code by Chirp Internet: chirpinternet.eu
    // Please acknowledge use of this code by including this header.

    var stage = document.getElementById("stage");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("a");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);

</script>




<?php include "footer.php"; ?>


</body>
</html>
