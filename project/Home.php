<?php
$con= mysqli_connect("localhost","root","","pet");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="boostrap.min.css">
    <title>Glotelho puppies Store</title>
</head>
<body>
    <!--navbar-->


    <nav class=" navbar navbar-expand-lg bg-dark navbar-dark py-3 fix-top">
        <div class="container">
        <A href="#" class=" navbar-brand"> Glotelho puppies Store</A>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-items">
                    <a href="#HOME" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-items">
                    <a href="#About Us" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-items">
                    <a href="#Contact Us" class="nav-link">Contact Us</a>
                    </li>
            </ul>
        </div>
        </div>
    </nav>


<!--showcase-->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                
                <hi>Shop </style> <span class="text-warning">Now</span></hi>
                <P class="lead my-4">
                    <span style="font-weight: bold; ">
                        <?php
                            $sql="select * from petshop where id='0'";
                            $dog= mysqli_query($con,$sql);
                            while ($row= mysqli_fetch_array($dog)) {
                                echo $row ['header1'];
                            }
                        ?>


                    </span>
                Our mission is to produce wonderful indoor compaion pets for other dog lovers like our family,by developing our puppies,homebody qualities,luxurioscoats(which comes in many unique colors),and overall family oriented wonderful companion pet traits in our unique puppies for pet homes bloodings
                <br>
                <br>
                We litters-box train our puppies much like cats,with pine pellet litter. We begin litters box training between 3-4 weeks of age.This helps play on natural instincts to keep their play and sleep area clean. By 5-8 weeks of age puppies are well trained and rarely have accidents
                <br>
                <br>
                All of our Chihuahua puppies, Maltese puppies, Yorkie puppies, Pomeranian puppies, Dachshund puppies undergo a serious of health tests to screen for virious possible hereditary diseases, including HCM (heart) by a specialized cardiologist. These measures avoid  many problems for our puppies

                </P>
                <button class="btn btn-primary btn-lg">CUSTOMER BEST SALE</button>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="chi3.jfif" alt="">
        </div>
    </div>
</section>
<!--puppies-->
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-m-flex justify-content-between align-items-center">
            <h3 class="mb3 mb-md-0"> Glotelho puppies your first choice</h3>
            <div class="input-group new-input">
            <input type="text" class="form-control" placeholder="Enter Number or Email">
            <button class="btn btn-dark btn-lg" type="button">button</button>
        </div>
        </div>
    </div>
</section>
<!--Boxes-->
<section class="p-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-4">
                         <i class="bi bi-laptop"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            virtual
                        </h3>
                        <p class="card-text">
                            my puppies are all ready for sale(AKC REGISTERED %)<br> I give out 1 year health garantee.
                        </p>
                        <a  href="#" class="btn btn-primary">Read More</a>
                    </div> 
                </div> 
            </div> 
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                         <i class="bi bi-person-square"></i>
                        </div>
                        <h3 class="card-title mb-4">
                            Hybrid
                        </h3>
                        <p class="card-text">
                            my puppies are all ready for sale(AKC REGISTERED %)<br> I give out 1 year health garantee.   
                        </p>
                        <a  href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div> 
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-4">
                         <i class="bi bi-person-square"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Hybrid
                        </h3>
                        <p class="card-text">
                            my puppies are all ready for sale(AKC REGISTERED %)<br> I give out 1 year health garantee. 
                        </p>
                        <a  href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div> 
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-4">
                         <i class="bi bi-person-square"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Hybrid
                        </h3>
                        <p class="card-text">
                            my puppies are all ready for sale(AKC REGISTERED %)<br> I give out 1 year health garantee.
                        </p>
                        <a  href="#" class="btn btn-primary">Read More</a>
                    </div> 
                </div>
            </div>  
        </div>
    </div>
</section>

<!--Learn Section-->
<section id="learn" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-mid">
              <img src="chi2.jfif" class="img-fluid" alt=""/>
            </div>
            <div class="col-md p-5">
                <h2> Top Sellers</h2>
                <p class="lead">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, dignissimos maiores sapiente et voluptates placeat.
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eaque saepe nulla corporis similique tempore, error perspiciatis 
                    doloribus quasi necessitatibus quis qui beatae magni voluptatem cum 
                    veritatis id blanditiis facere vitae!    
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi chevron-right"></i> >Read More
                </a>
            </div>
        </div>
    </div>
</section>

<section id="learn" class="p-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>learn React</h2>
                <p class="lead">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, dignissimos maiores sapiente et voluptates placeat.
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Eaque saepe nulla corporis similique tempore, error perspiciatis 
                    doloribus quasi necessitatibus quis qui beatae magni voluptatem cum 
                    veritatis id blanditiis facere vitae!    
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi chevron-right"></i> >Read More
                </a>
            </div>
            <div class="col-mid">
                <img class="img-fluid w-50 d-none d-sm-block" src="chi1.jfif" alt="">
            </div>
        </div>
    </div>
</section>
<!--Questions Accordian-->
<section id="questions" class="p-5">
    <div class="container"> 
        <h2 class="text-center mb-4">Frequently Ask Questions</h2>
        <div class="accordion accodion-flush" id="questions">
            <!--item 1-->
            <div class="accordion-item">
                <h2 class="accodion-header"> 
                    <button class="accordion-button collapes" type="button" data-bs-toggle="collapes"
                    data-bs-target="#flush-collapes">
                  Accordian item #1
                    </button>
                </h2>
                <div id="flush-collapesone" class="accordion-collapes collapes" data-bs-parents="#questions">
                    <div class="accordion-body" placeholder content for this accordion,which is intend to demostrate the <code>.

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


   
</P>

<nav class=" navbar navbar-expand-lg bg-dark navbar-dark py-3 fix-top">
        <P class="lead my-4">
           <hi>ABOUT US</hi>
        <div class="container">
          <A href="#" class=" navbar-brand" style="font-weight: bold;">  My name is Nick Patrick and my wife <br>  name is Stephanie Miller. We are a <br> small family-owned operated kennel that <br> offers healthy puppies. Our prime <br>  mission is to breed jovial and cute <br>  Chihuahus | Dachshund | Maltese | Pomeranian | Yorkie <br>  puppies for your loving homes.</A>
        </div>
         
</nav>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>-->
    <script src="bundle.min.js"></script>
    
</body>
</html>