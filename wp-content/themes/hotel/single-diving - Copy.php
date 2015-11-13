
<?php get_header();?>

<?php
$query_object = get_queried_object();
while ( have_posts() ) : the_post();
    ?>
    <!-- subheader begin -->
    <div id="subheader" style="background:url(<?php echo get_field('sub-diving','option');?>) top center no-repeat">
        <h1><?php echo $query_object->post_type;?></h1>
        <h3><?php echo the_title()?></h3>
    </div>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class=" no-bottom diving-content">
        <section id="diving-1" class="side-bg">
            <div class="col-md-4 col-md-offset-8 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="inner-padding">
                            <h2 class="diving-title">OVERVIEW</h2>
                            <p>You want to spend your dive holiday at Puri Wirata? Check out these great package deals and save money on diving and accommodation. These packages (in the navigation on the left) can only be booked in advanced by contacting us via this website and they include discount rates on diving and accomodation.</p>
                            <div class="diving-box room-specs">
                                <h4 class="hfont18">PACKAGES INCLUDE</h4>
                                <ul>
                                    <li>Accomodation + Breakfast</li>
                                    <li>Transport to and from the dive sites</li>
                                    <li>Guide, tanks, weights, weightbelt, BCD, regulator, mask, booties and fins.</li>
                                    <li>Towels and water on diving days</li>
                                </ul>
                            </div>
                            <div class="diving-box room-specs">
                                <h4 class="hfont18">PACKAGES EXCLUDE</h4>
                                <ul>
                                    <li>Boat dives: Minimum 2 pax. Surcharge depending on dive site and price boat rental. (75.000 - 150.000 IDR/pp)</li>
                                    <li>Night dive: + 50.000 IDR/pp per dive (changing 1 dive into a night dive)</li>
                                    <li>Drinks, lunch and dinner</li>
                                </ul>
                            </div>
                            <div class="diving-box room-specs">
                                <h4 class="hfont18">CONDITIONS</h4>
                                <ul>
                                    <li>Dive sites in Amed and Tulamben</li>
                                    <li>Prices are normal season rates per person based on 2 people sharing the room and doing the package. Packages for 1 person on request.</li>
                                    <li>Low Season: 1/11 - 15/12 and 16/12 -3/13</li>
                                    <li>Normal Season: 1/4 - 30/6 and 1/9 - 31/10</li>
                                    <li>High Season: 1/7 - 31/8 and 16/12 - 15/1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="diving-2" class="side-bg">
            <div class="col-md-4 col-md-offset-4 pull-left image-container">
                <div class="background-image max-height-image800"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-45">
                        <div class="inner-padding">
                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>BeST of Amed and Tulamben</h1>
                                <h3 class="h3font22">2 NIGHTS/3 DAYS - 5 DIVES</h3>
                                <p>Ideal package for people who like to spend two days diving in Amed and Tulamben! It is perfect if you want to see the best dive sites Amed and Tulamben have to offer. You will explore the rich coral gardens of Bunutan and Japanese Wreck. On the second day you will leave for Tulamben and have a look at the 120 m long USS Liberty Shipwreck. </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room: 2.300.000 IDR/pp<br/>
                                        Villa Superior Room: 2.400.000 IDR/pp<br/>
                                        Villa Master bedroom: 2.650.000 IDR/pp<br/>
                                        Low Season: - 50.000 IDR/pp<br/>
                                        High Season: + 100.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>ALL YOU CAN DIVE</h1>
                                <h3 class="h3font22">4 NIGHTS/5 DAYS - 10 DIVES + 1 free dive</h3>
                                <p>
                                    This dive package will take you to all the best dive sites in the area. If you are crazy about diving then this is the dive package you are looking for! You will do 10 dives in 4 days and you will get 1 FREE DIVE as well.
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room: 4.650.000 IDR/pp<br/>
                                        Villa Superior Room: 4.850.000 IDR/pp<br/>
                                        Villa Master bedroom: 5.350.000 IDR/pp<br/>
                                        Low Season: - 100.000 IDR/pp<br/>
                                        High Season: + 200.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>OPEN WATER PACKAGE</h1>
                                <h3 class="h3font22">3 NIGHTS/4 DAYS - 4 DIVES + 1 free dive</h3>
                                <p>
                                    3 nights/4 days accomodation<br/>
                                    5 Pool sessions, 4 Open Water Dives
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room: 5.025.000 IDR/pp<br/>
                                        Villa Superior Room: 5.175.000 IDR/pp<br/>
                                        Villa Master bedroom: 5.550.000 IDR/pp<br/>
                                        Low Season: - 75.000 IDR/pp<br/>
                                        High Season: + 150.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>ADVANCED + NITROX</h1>
                                <h3 class="h3font22">2 NIGHTS/3 DAYS - 5 DIVES + 1 free</h3>
                                <p>
                                    2 nights/3 days accomodation<br/>
                                    5 Advanced Open Water Dives + Nitrox
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room: 5.350.000 IDR/pp<br/>
                                        Villa Superior Room: 5.450.000 IDR/pp<br/>
                                        Villa Master bedroom: 5.700.000 IDR/pp<br/>
                                        Low Season: - 50.000 IDR/pp<br/>
                                        High Season: + 100.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>FROM ZERO TO HERO</h1>
                                <h3 class="h3font22">6 NIGHTS/7 DAYS - 9 DIVES + 1 free</h3>
                                <p>
                                    6 nights/7 days accommodation<br/>
                                    Open Water Course<br/>
                                    Advanced Open Water Course<br/>
                                    Enriched Air/Nitrox CourseTotal Dives: 9 + 1 FREE DIVE
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room: 10.650.000 IDR/pp<br/>
                                        Villa Superior Room: 10.950.000 IDR/pp<br/>
                                        Villa Master bedroom: 11.700.000 IDR/pp<br/>
                                        Low Season: - 150.000 IDR/pp<br/>
                                        High Season: + 300.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>DEEP + WRECK + NIGHT + NITROX</h1>
                                <h3 class="h3font22">4 NIGHTS/5 DAYS - 8 DIVES + 1 free</h3>
                                <p>
                                    The ultimate speciality course. You will have it all at the end! Deep dives on the USS Liberty Shipwreck. Do your night dives with Nitrox and you can stay underwater forever! You will do 8 dives and there will be a small theory exam for every speciality.
                                </p>
                                <p>
                                    4 nights/5 days accommodation + breakfast<br/>
                                    PADI Deep Diver Speciality<br/>
                                    PADI Wreck Diver Speciality<br/>
                                    PADI Night Diver Speciality<br/>
                                    PADI Nitrox Diver Speciality
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        Deluxe Room Resort: 9.000.000 IDR/pp<br/>
                                        Low Season: - 100.000 IDR/pp<br/>
                                        High Season: + 200.000 IDR/pp
                                    </p>
                                </div>
                                <p>Prices are normal season rate per person based on 2 people sharing the room and doing the package. If you would like to do a package by yourself there is a surcharge depending on the room type.</p>
                                <div class="small-border"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
<?php
endwhile;
?>
<?php get_footer();?>

