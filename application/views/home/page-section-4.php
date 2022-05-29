<!-- section nth-child(4)-->
<section class="section-4 d-flex align-items-center justify-content-center">
    <div class="container p-5 d-block text-center" >
        <h3>25% 0ff</h3>
        <h1>Wood and Soft Sofa</h1>
        <a href="#" class="px-3 py-2 mt-3" >BUY NOW</a>
    </div>
</section>
<!-- section nth-child(5) -->
<section class="section-5">
    <div class="container-fluid d-flex justify-content-center flex-column align-items-center p-5 bg-light">
        <h5>Featured Products</h5>
        <div class="wrapper  d-flex justify-content-evenly">
            <a class="link" href="#">All</a>
            <a class="link" href="#">Table</a>
            <a class="link" href="#">chear</a>
            <a class="link" href="#">Lamp</a>
        </div>
    </div>
    <div class="container-fluid py-3">
        <div class="row  d-flex justify-content-evenly">

            <!-- card item product start -->
            <?php foreach($products as $product ) : ?>
            <div class="col-md-3 col-6 p-md-3 py-2">
                <div class="card border-0 bg-light card-hover ">
                    <div class="col-2 text-center">
                        <p class="rounded-circle p-2" id="disc"><?= $product['disc']; ?></p>
                    </div>
                    <img src="../assets/sofa-5.png" height="250px" alt="">
                    <div class="card-body">
                        <div class="row gap-1 d-flex justify-content-evenly ">
                            <div class="col-2 ">
                                <i data-feather="refresh-cw"></i>
                            </div>
                            <div class="col-2  ">
                                <i data-feather="heart"></i>
                            </div>
                            <div class="col-2 ">
                                <i data-feather="shopping-cart"></i>
                            </div>
                            <div class="col-2 ">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                        <h5 class="mt-2"><?= $product['prdname']; ?></h5>
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-5 text-center">
                                <p class="fs-6 my-auto"><?= $product['price'] ?></p>
                            </div>
                            <div class="col-5 text-center">
                                <p class="fs-6 my-auto" style="color: #0b7277;"><?= $product['discprice'] ?></p>
                            </div>
                        </div>
                        <div class="row  d-flex justify-content-between">
                            <div class="col-5 d-flex align-items-center gap-2 justify-content-center">
                                <span class="d-block p-2 rounded-circle" id="circle1"></span>
                                <span class="rounded-circle d-block p-2" id="circle2"></span>
                                <span class="rounded-circle d-block p-2" id="circle3"></span>
                            </div>
                            <div class="col-6 d-flex align-items-center" >
                                <i class="fa-regular fa-star fa-xs"></i>
                                <i class="fa-regular fa-star fa-xs"></i>
                                <i class="fa-regular fa-star fa-xs"></i>
                                <i class="fa-regular fa-star fa-xs"></i>
                                <i class="fa-regular fa-star fa-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <div class="container d-flex justify-content-center mt-4">
            <a href="" class=" justify-content-center px-3 py-2" id="buttonMore">SEE MORE</a>
        </div>
</section>
