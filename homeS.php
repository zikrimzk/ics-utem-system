<title>ICS Homepage : Student </title>
<?php
include("headS.php");
?>
<br>
<br>
<br>
<br>

<link rel="stylesheet" href="css/home.css">
  <script src="javascript/home.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
  <title>ICS HOMEPAGE</title>
  
  <body>
  <h1 class="greet">WELCOME BACK!!</h1>
    
  
    <div id="slider">
        <ul id="slideWrap"> 
          <li><img src="image/slide1.jpeg" alt=""></li>
          <li><img src="image/slide2.jpeg" alt=""></li>
          <li><img src="image/slide3.jpeg" alt=""></li>
          <li><img src="image/slide4.jpeg" alt=""></li>
        </ul>
      <a id="prev" href="#">&#8810;</a>
      <a id="next" href="#">&#8811;</a>
    </div>
  
    <section class="sec1">
    <img src="image/utemtv.png" class="utemtv" >
    <div class="flex-container" >
       <div>
        <iframe  class="size" src="https://www.youtube.com/embed/tECbp_FklIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div>
        <iframe  class="size" src="https://www.youtube.com/embed/XmoPE4bq6cE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div>
        <iframe class="size" src="https://www.youtube.com/embed/JIUgQUuFMO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div>
        <iframe class="size"  src="https://www.youtube.com/embed/O8swGos_utY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div>
        <iframe class="size"  src="https://www.youtube.com/embed/t9LX1FTZ4KY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
    </div>
  
       
    </section>
  <section class="sec_2S">
   <center>
    <table border="0" cellpadding="10" cellspacing="10">
      <tr>
        <th colspan="5"> <h2 class="greet">STUDENT ACCESS</h2></th>
      </tr>
      <tr>
        <td align="center"><a href="https://portal.utem.edu.my/iutem/" target="_blank"><img src="image/but_smp.png" class="button"></a></td>
        <td align="center"><a href="https://outlook.office365.com/mail/inbox" target="_blank"><img src="image/but_mail.png" class="button"></td>
        <td align="center"><a href="https://ulearn.utem.edu.my/hub/" target="_blank"><img src="image/but_ulearn.png" class="button"></td>
        <td align="center"><a href="http://library.utem.edu.my/en/" target="_blank"><img src="image/but_library.png" class="button"></td>
      </tr>
      <tr>
        <td align="center" class="text2">SMP</td>
        <td align="center" class="text2">Student Mail</td>
        <td align="center" class="text2">Ulearn</td>
        <td align="center" class="text2">Library</td>
      </tr>

    </table>
  </center>
    </section>
  </body>
  <footer>
  <?php
    include("footer.html");
  ?>
</footer>
</html>