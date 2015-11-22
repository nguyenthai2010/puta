
<?php get_header();?>

<?php
$query_object = get_queried_object();
while ( have_posts() ) : the_post();
    ?>
    <!-- subheader begin -->
    <div id="subheader" style="background:url(<?php echo get_field('sub-diving','option');?>) top center no-repeat; background-size: cover;">
        <h1><?php echo $query_object->post_type;?></h1>
        <h3><?php echo the_title()?></h3>
    </div>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class=" no-bottom diving-content content-diving-sub-<?php echo $query_object->post_name; ?>"">
    <section id="diving-1" class="side-bg no-bottom">
        <div class="col-md-4 col-md-offset-8 pull-right image-container">
            <div class="background-image"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="inner-padding">
                            <h2 class="diving-title">DIVING TIPS</h2>
                            <div class="diving-box room-specs">
                                <p>Bali offers exciting diving for everybody. Mysterious shipwrecks, stunning walls, exciting drift diving, weird and rare critters, breathtaking coral gardens and big, BIG fish. </p>
                                <p>The goal of Bali Reef Divers is to give you the best possible diving experience, both to the novice diver as well as the ones who've seen it all. We will take you to ALL the dive sites around Amed and Tulamben and with 20+ dive sites to choose from, expect to be busy and amazed. </p>
                                <p>Want more? Why not book a trip to Nusa Penida or Menjangan Island? Contact us for details and planning your dives and our team will make sure you have a safe and exciting diving adventure, one you'll likely never forget!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rates-package-box">
                <div class="row">
                    <div class="bgpricecourse">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="fundives-subbox">
                                        <h2 class="diving-title">Dive Rates</h2>
                                        <div class="fundivesbox">
                                            <div><span class="blue">2 dives/day:</span> 750.000 IDR (+- US$55)</div>
                                            <div><span class="blue">3 dives/day:</span> 1.050.000 IDR (+- US$75)</div>
                                            <div><span class="blue">Nightdive:</span> 500.000 IDR (+- US$36)</div>
                                            <div><span class="blue">Boat dives:</span> Minimum 2 pax. Surcharge depending on dive site and price boat rental. (75.000 - 150.000 IDR/pp)
                                            <br/>3 Dives Manta Point/Crystal Bay/Nusa Lembongan: 200 USD/pp (minimum 2 people)</div>
                                        </div>
                                        <div class="small-border"></div>
                                    </div>
                                    <div class="fundives-subbox">
                                        <h2 class="diving-title">Dive Packages</h2>
                                        <div class="fundivesbox">
                                            <div><span class="blue">5 dives:</span> 1.750.000 IDR (+-US$125)</div>
                                            <div><span class="blue">10 dives:</span> 3.400.000 IDR (+- US$245)</div>
                                            <div><span class="blue">11-20 dives:</span> 330.000 IDR/dive (+- US$24)</div>
                                            <div><span class="blue">21-30 dives:</span> 320.000 IDR/dive (+- US$23)</div>
                                            <div><span class="blue">31-40 dives:</span> 310.000 IDR/dive (+- US$22)</div>
                                        </div>
                                        <p class="padtop20 c666">
                                            Minimum 2 dives per day<br/>
                                            Night dives: +100.000 IDR/pp (+- US$7)<br/>
                                            Boat dives: Minimum 2 pax. Surcharge depending on dive site and price boat rental. (75.000 - 150.000 IDR/pp)<br/>
                                            All dive sites around Amed and Tulamben<br/>
                                            Prices for Amed/Tulamben sites include equipment rental, water/coffee/tea, towel, fruit in between dives.
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                            <div class="plus-close"></div>
                            <h1 class="h1title linkcollapse active"><i></i>Bali Reef Divers Equipment List</h1>
                            <div class="ultypecircle collapse-content" style="display: block;">
                                <ul>
                                    <li>Aqualung Wave BCD</li>
                                    <li>Aqualung Calypso Regulators</li>
                                    <li>12 Liter Yoke System Aluminum Tanks</li>
                                    <li>Aqualung Ventura Mask</li>
                                    <li>Aqualung Look Mask</li>
                                    <li>Aqualung Stratos Fins</li>
                                    <li>Aqualung Short 3 mm wetsuits</li>
                                </ul>
                            </div>
                            <div class="small-border"> </div>
                        </div>
                        <div class="diving-box-2">
                            <div class="plus-close"></div>
                            <h1 class="h1title linkcollapse"><i></i>DIVE CONDITIONS</h1>
                            <div class="collapse-content">
                                <h3 class="h3font22">DECEMBER - APRIL</h3>
                                <p>Wet season. Water temperature varies between 28-31 degrees. Although it is wet season and we have quite some rain in january and february it is still possible to dive. There are many good days and always a few dive sites to visit, even on the rainy days. This is a good time to see sharks in Tulamben.</p>
                                <h3 class="h3font22 padtop15">APRIL - SEPTEMBER</h3>
                                <p>Dry season. Water temperature starts to drop from end of may to about 25-28 degrees. It gets windy in july and august but that doesn't really effect the visibility. It tends to get very crowded on the popular dive sites. Many days of good visibility because it doesn't rain at all during this period. There tends to be more macro life around this time of the year.</p>
                                <h3 class="h3font22 padtop15">SEPTEMBER - DECEMBER</h3>
                                <p>Probably the best time of the year to dive in Bali. The crowds of july and august are gone and the wind dropped as well. The sea will be quite flat around this time of the year and because of the strong current and no rain the visibility can be excellent for a long time. There are some bigger fish like sharks and barraccudas around Amed starting from end of august</p>
                            </div>
                            <div class="small-border"> </div>
                        </div>
                        <div class="diving-box-2">
                            <div class="plus-close"></div>
                            <h1 class="h1title linkcollapse"><i></i>WHAT TO BRING</h1>
                            <div class="collapse-content">
                                <p>If possible bring at least your own <b>dive mask and dive computer.</b></p>
                                <p><b>Sunscreen</b> for in between the dives. The sun can be very strong during the day!</p>
                                <p>If you bring your own dive equipment and you use a DIN regulator don't forget to bring an <b>adapter</b>.<br /> We have 1 or 2 adapters around but they might be used already.</p>
                            </div>
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

