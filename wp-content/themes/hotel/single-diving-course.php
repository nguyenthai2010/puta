
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
        <section id="diving-1" class="side-bg no-bottom">
            <div class="col-md-4 col-md-offset-8 pull-right image-container">
                <div class="background-image"></div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="inner-padding">
                                <h2 class="diving-title">PADI COURSES</h2>
                                <div class="diving-box room-specs">
                                    <h4 class="hfont18">OVERVIEW</h4><br/>
                                    <p>As a PADI 5* dive resort (S-36126), Bali Reef Divers offers you a full range of PADI courses and specialties, under guidance of experienced instructors.</p>
                                    <p>Our instructors speak English, Dutch, French and Indonesian. If you wish to get the courses in a different language, let us know up front and we'll try and arrange an instructor in the language of your choice for you.</p>
                                    <p>If you just want to find out if you like diving the Discover Scuba Diving experience is an ideal option for you. If you want to go all the way, just go for the Open Water Diver course and be amazed by the underwater world in Amed.</p>
                                    <p>On the left you find an overview of the available courses. All prices include equipment, book + certification fee where applicable, instructor fees, transport, local fees and water at the dive site.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricebox3col">
                    <div class="row">
                        <div class="bgpricecourse">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="pricebox">
                                            <h2 class="diving-title">PRICING</h2>
                                            <div class="small-border"></div>
                                            <div class="pricecourse">
                                                <div class="head-course">
                                                    <div class="col col01">
                                                        Course
                                                    </div>
                                                    <div class="col col02">
                                                        # Dives
                                                    </div>
                                                    <div class="col col03">
                                                        Price
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="body-course">
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Discover Scuba
                                                        </div>
                                                        <div class="col col02">
                                                            1 dive
                                                        </div>
                                                        <div class="col col03">
                                                            750.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Discover Scuba
                                                        </div>
                                                        <div class="col col02">
                                                            2 dives
                                                        </div>
                                                        <div class="col col03">
                                                            1.050.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Open Water
                                                        </div>
                                                        <div class="col col02">
                                                            4 dives
                                                        </div>
                                                        <div class="col col03">
                                                            4.400.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Advanced
                                                        </div>
                                                        <div class="col col02">
                                                            5 dives
                                                        </div>
                                                        <div class="col col03">
                                                            3.900.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Rescue
                                                        </div>
                                                        <div class="col col02">
                                                            3 dives
                                                        </div>
                                                        <div class="col col03">
                                                            3.400.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            PADI EFR
                                                        </div>
                                                        <div class="col col02">
                                                            No Diving
                                                        </div>
                                                        <div class="col col03">
                                                            2.200.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            Nitrox
                                                        </div>
                                                        <div class="col col02">
                                                            2 dives
                                                        </div>
                                                        <div class="col col03">
                                                            2.200.000 IDR
                                                        </div>
                                                    </div>
                                                    <div class="row-course">
                                                        <div class="col col01">
                                                            PADI Divemaster
                                                        </div>
                                                        <div class="col col02">
                                                            Unlimited
                                                        </div>
                                                        <div class="col col03">
                                                            On Request
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
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
                                <h1 class="h1title"><i></i>BEGINNER COURSES</h1>
                                <h3 class="h3font22">Discover Scuba Diving</h3>
                                <p>An introduction to Scuba diving. A poolsession, introducing the basics. After the pool, a dive in the ocean under the guidance of an Instructor. You will receive a certificate of recognition that you did the Discover Scuba Diving, however, this is not a valid dive certificate.</p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        750.000 IDR - 3-4 hours - 1 dive<br/>
                                        1.050.000 IDR - 5-6 hours - 2 dives
                                    </p>
                                </div>
                                <h3 class="h3font22 padtop15">Scuba diver</h3>
                                <p>2 days - People that lack the time to do the full open water course, can do the Scuba Dive Course. It's basically the first half of the Open water course, you get the same book, only no exam and only 3 poolsessions and 2 open water dives. After completion, you will receive a certification as SCUBA diver. This allows you to dive under the guidance of a divemaster or higher to a maximum depth of 12m. It's easy to finish up the full Open Water course after.</p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        PADI Price: 3.000.000 IDR
                                    </p>
                                </div>

                                <h3 class="h3font22 padtop15">Open Water Diver</h3>
                                <p>3/4 days - The worlds most popular diving certification. You learn safety procedures, theory behind diving, diving techniques, but most of all, you will have fun and a new world will open up. 5 poolsessions, 4 dives and a theoretical exam. </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        PADI Price: 4.400.000 IDR (for full course)
                                    </p>
                                </div>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>FURTHER TRAINING COURSES</h1>
                                <h3 class="h3font22">Advanced Diver</h3>
                                <p>
                                    2/3 days - The next step up from Open Water. Advanced diver will allow you to dive mostly everywhere in the world. The course exists of 5 adventure dives.
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        3.900.000 IDR
                                    </p>
                                </div>

                                <h3 class="h3font22 padtop15">Rescue Diver </h3>
                                <p>2/3 days - A hard yet fun dive course. What to do when things go really wrong? Better come prepared. Poolsession, theory, exam and open water scenarios.</p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        3.400.000 IDR
                                    </p>
                                </div>
                                <div class="small-border"></div>
                            </div>

                            <div class="diving-box-2">
                                <h1 class="h1title"><i></i>SPECIALTIES</h1>
                                <h3 class="h3font22">NITROX/EANx Specialty</h3>
                                <p>
                                    Enriched Air (or Nitrox) uses different gasblends for your tank. Learn to use different tables, how to analyze your tank and different safety measures. Normally, this is a theorethical course, but we give you 2 Nitrox dives with the course. Minimum prerequisite: Open Water and 15 years old.
                                </p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        2.200.000 IDR
                                    </p>
                                </div>

                                <h3 class="h3font22 padtop15">Digital Underwater Photography Specialty</h3>
                                <p>You love photography and you love diving? The DUP will show you how you can combine both and create excellent pictures and memories from your diving experiences. Even snorkelers can take this course. Includes 2 dives (or snorkeling sessions).</p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        2.200.000 IDR
                                    </p>
                                </div>

                                <h3 class="h3font22 padtop15">PADI EFR (Emergency First Response)</h3>
                                <p>1 day - This is not a dive course, but a First Aid course. In this 1 day course, you learn the correct technique for CPR, how to manage wounds and suspected spinal injuries. A recent EFR certificate, or similar, is necessary to start the Rescue Diver course.</p>
                                <div class="pricebox">
                                    <h4 class="hfont18">PRICING</h4>
                                    <p class="padtop5">
                                        2.200.000 IDR
                                    </p>
                                </div>
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

