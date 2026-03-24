<!DOCTYPE html>
<html lang="en">
<head>
        <title>CCC311-18 / CCL311-18 Applications Development & Emerging Technologies (Nerecina)</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src = "js/bootstrap.min.js"></script>
</head>

<style>
    
   section {
            position: relative;
            width: 100vw;
            height: 100vh;
            padding-top: 50px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

         #neus .overlay {
            background: rgba(18, 33, 74, 0.5);
        }

         #mikh .overlay {
            background: rgba(80, 18, 90, 0.5);
        }

         #salwa .overlay {
            background: rgba(144, 41, 10, 0.5);
        }

         #dover .overlay {
            background: rgba(12, 76, 139, 0.5);
        }

    h1 {

            margin-top: 5%;
            position: relative;
            color: rgb(228, 239, 253);
            text-align: center;
            z-index: 2;
            font-size: 4rem;
    }

</style>

<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <ul class="nav navbar-nav">
     <li><a href="#cat1">Cat 1</a></li>
        <li><a href="#cat2">Cat 2</a></li>
        <li><a href="#cat3">Cat 3</a></li>
        <li><a href="#cat4">Cat 4</a></li>
    </ul>
   </nav>

    

   <nav class="navbar navbar-default navbar-fixed-top">
    <ul class="nav navbar-nav">
        <li><a href="#cat1">Cat 1</a></li>
        <li><a href="#cat2">Cat 2</a></li>
        <li><a href="#cat3">Cat 3</a></li>
        <li><a href="#cat4">Cat 4</a></li>
    </ul>
   </nav>

   <section id="cat1"  style="background-image: url('https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_16x9.jpg?w=1200'); background-size: cover; background-position: center; background-repeat: no-repeat;">
   <div class="overlay"></div> 
    <h1>Cat 1</h1>
</section>
   <section id="cat2"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/607f89e638219e13eee71b1e/1684821560422-SD5V37BAG28BURTLIXUQ/michael-sum-LEpfefQf4rU-unsplash.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div> 
    <h1>Cat 2</h1>
</section>
   <section id="cat3"  style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS0IQhVr9DDJCq61QX28zCoiqDrvezBh5ylw&s'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div> 
    <h1> Cat 3</h1>
</section>
   <section id="cat4"  style="background-image: url('https://www.purina.ph/sites/default/files/2025-05/GettyImages-1391912463.jpeg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div> 
    <h1>Cat 4</h1>
</section>

  
</body>
</html>