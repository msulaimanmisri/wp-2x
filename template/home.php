<?php

/**
 * Template Name: 2x-home
 */
get_header();
?>

<div id="container-hero" class="container-hero overlay">
    <div class="overlay" id="hero-image">
        <img src="https://images.unsplash.com/photo-1525026198548-4baa812f1183?q=80&w=1034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="hero-img" alt="img-2x-marketing">
    </div>
</div>

<div id="container-attention" class="bg-dark">
    <div class="container text-light py-5">
        <h3 class="fs-3">MEET OUR EXPERTS</h3>
        <div class="mt-3">
            <p class="fw-thin">
                Deep knowledge, surprising insights, and a collaborative approach to growing and selling your
                knowledge-based business. Meet the team that has made Equiteq the leading global investment bank for the
                knowledge economy.
            </p>
        </div>

        <div id="filterAndSearch" class="mt-5">
            <div class="row">
                <div id="filter" class="col">
                    <h4>FILTERS</h4>
                    <div class="row">
                        <div class="col" id="filterBySectors">
                            <?php require_once get_stylesheet_directory() . '/components/filter-sectors.php'; ?>
                        </div>

                        <div class="col border-start" id="filterByLocations">
                            <?php require_once get_stylesheet_directory() . '/components/filter-locations.php'; ?>
                        </div>
                    </div>
                </div>

                <div id="search" class="col">
                    <h4>Search</h4>
                    <div class="col p-0" id="filterByLocations">
                        <?php require_once get_stylesheet_directory() . '/components/filter-search.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="leadersSection" class="container my-5 pt-5">
    <?php include_once get_stylesheet_directory() . '/components/leaders.php'; ?>
</div>

<?php get_footer(); ?>