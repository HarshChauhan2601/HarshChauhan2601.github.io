 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=, initial-scale=1.0">
     <title>Hirabhai Thakkar - Contact Page</title>


     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/ec3a451c3a.js" crossorigin="anonymous"></script>
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="contact.css?=<?php echo time(); ?>">
     <link rel="stylesheet" href="common-elements.css?=<?php echo time(); ?>">


 </head>
 <body>
 
 <!-- This is My Navbar -->
 
<!-- This is My Header -->
      
<nav id="navbar" style="height: 90px;">
    <img src="images/nlogo.PNG" alt="none" style="margin: 1%;">


    <ul id="nav">



        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Video Gallery</a></li>
        <li><a href="book.php">Books</a></li>
        <li id="active"><a href="contact.php" class="active">About Us</a></li>

    </ul>



    <div class="toggle">
        <i class="fa-solid fa-bars" id="open"></i>
        <i class="fa-solid fa-xmark" id="close" style="display: none;"></i>

    </div>
</nav>
 <!-- This is An End -->

 <div class="main">
     <div class="main-left">
         <img src="images/hira1 (6).jpeg" alt="">
     </div>

     <div class="main-right">
         <h1>
             Hirabhai's Achievements
         </h1>
         <ul>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;Writer of "કર્મ નો સિદ્ધાંત"</li>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;Hirabhai was one of the most honest Civil servant, our nation has ever seen.</li>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;Morari Bapu also used to learn from Hirabhai.</li>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;Rashtriya Sant Sri Morari Bapu mentioned him in one of his teachings.</li>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;His teachings are totally free of cost and also available to public domains     
             </li>
             <li><i class="fa-solid fa-arrow-right-long"></i>&nbsp;Great in depth knowledge in Ramcharit manas, Bhagwad Gita, Katha's and shlokas of
                 Sanskrit.
             </li>
         </ul>
     </div>
 </div>


 <!-- Managed By -->
 <div class="manage">
     <div class="m-left">
     <h2>Maheshbhai Thakkar</h2>
         <i>- Shri Hirabhai Thakkar's Son</i>
         <p>
             I am really proud of my father and his works. We try our best in making 
             Hirabapa's knowledge available to all people of our nation. <br>
            I also try to implement my father's thoughts in my real life. As per my concern whenever 
            I stuck in any problem "કર્મ નો સિદ્ધાંત" helps me and motivates me in overcoming my all hurdles.
          </p>
<p style="margin-top: 0.3rem;"><b>Theory of Karma - way of future</b>
</p>

         <div class="con-h">
             <h3>Contact Us :</h3>
             <div class="line-h"></div>
         </div>

         <a href="tel:9898003377" class="con">
         <i class="fa-solid fa-phone"></i>&nbsp;+91 98980 03377
</a>

         <a href="mailto : mahesh@hirabhai.com" class="con">
         <i class="fa-solid fa-envelope"></i>&nbsp;mahesh@hirabhai.com
</a>

     </div>

     <div class="m-right">
        <img src="images/mahesh.jpg" alt="Mahesh Thakkar">

     </div>

 </div>
 <!-- This is An End  -->


<!-- This is My Footer -->
<?php include 'footer.html'; ?>
<!-- This is An End -->
 
<script src="main.js"></script>

</body>
 </html>