<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<div class="overlay"
    id="hero-image">
    <img src="https://images.unsplash.com/photo-1525026198548-4baa812f1183?q=80&w=1034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        class="img-fluid hero-img"
        alt="img-2x-marketing">
</div>

<div class="bg-black">
    <div class="container text-light py-5">
        <h3 class="fs-3">MEET OUR EXPERTS</h3>

        <div class="mt-3">
            <p class="fw-thin">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis rerum velit odio unde maxime aliquid
                sequi, nisi aut
                temporibus praesentium culpa explicabo veniam voluptatum obcaecati distinctio nam harum perspiciatis!
                Libero.
            </p>
        </div>

        <div id="filterAndSearch"
            class="mt-5">
            <div class="row">
                <div class="col"
                    id="Filters">
                    <h4>FILTERS</h4>

                    <div class="row">
                        <div class="col"
                            id="filterBySectors">
                            <?php require_once get_stylesheet_directory() . '/components/filter-sectors.php';?>
                        </div>

                        <div class="col border-start"
                            id="filterByLocations">
                            <?php require_once get_stylesheet_directory() . '/components/filter-locations.php';?>
                        </div>
                    </div>
                </div>

                <div id="search"
                    class="col">
                    <h4>Search</h4>

                    <div class="col p-0"
                        id="filterByLocations">
                        <?php require_once get_stylesheet_directory() . '/components/filter-search.php';?>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<div id="leaders"
    class="container my-5 pt-5">
    <?php include_once get_stylesheet_directory() . '/components/leaders.php';?>
</div>