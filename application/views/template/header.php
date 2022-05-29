<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css external -->
    <link rel="stylesheet" href="<?= base_url();?>/asset/css/sofaWebStyle.css">

    <title><?= $tittle ?></title>
</head>
<body>
    <header class="sticky-top"> 
        <div class="container-fluid d-flex justify-md-content-evenly justify-content-between px-4 bg-light sticky-top ">
            <div class="col-5 col-md-3 d-flex align-items-center">
                <h4 class="font-secondary"><span style="color: #0b7277;font-weight: bold">WOOD</span> BAR</h4>
            </div>
            <div class="col-md-4 col-6 d-none d-lg-flex  justify-content-between align-items-center p-4">
                <a href="<?= base_url();?>home">Home</a>
                <a href="<?= base_url();?>category">Category</a>
                <a href="<?= base_url();?>shop">Shop</a>
                <a href="">Blog</a>
                <a href="">Page</a>
            </div>
            <!-- offfcanvas SideBar start -->
            <div class="offcanvas offcanvas-end" id="sideBarEnd" tabindex="-1" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-tittle">WoodBar SideBar</h5>
                    <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body p-1 ">
                    <div class="wrapper-items m-w-100 d-flex flex-column justify-content-evenly align-items-center my-3 items-canvas-hover">
                        <a class="text-success p-4" href="<?=base_url();?>home">Home</a>
                    </div>
                    <div class="wrapper-items m-w-100 d-flex flex-column justify-content-evenly align-items-center my-3 items-canvas-hover">
                        <a class="text-success p-4" href="<?= base_url();?>category">Category</a>
                    </div>
                    <div class="wrapper-items m-w-100 d-flex flex-column justify-content-evenly align-items-center my-3 items-canvas-hover">
                        <a class="text-success p-4" href="<?= base_url();?>shop">Shop</a>
                    </div>
                    <div class="wrapper-items m-w-100 d-flex flex-column justify-content-evenly align-items-center my-3 items-canvas-hover">
                        <a class="text-success p-4" href="">Blog</a>
                    </div>
                    <div class="wrapper-items m-w-100 d-flex flex-column justify-content-evenly align-items-center my-3 items-canvas-hover">
                        <a class="text-success p-4" href="">Page</a>
                    </div>
                </div>
            </div>
            <!-- offcanvas SideBar End -->
            
            <div class="col-md-2 col-4 d-flex  justify-content-evenly align-items-center p-md-4">
                <a href="" style="color:#8785A2;">
                    <span class="p-2"><i data-feather="shopping-cart"></i></span>
                </a>
                <span><i data-feather="user"></i></span>
                <span class="d-lg-none"><i class="fa-solid fa-bars fa-xl " data-bs-toggle="offcanvas" data-bs-target="#sideBarEnd"></i></span>
            </div>
        </div>
    </header>