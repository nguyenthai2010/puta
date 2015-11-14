
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
                                <h2 class="diving-title">DIVE SITES FOR BEGINNERS</h2>
                                <h3 class="h3font18">Jemeluk</h3>
                                <p>Beach Dive Amed - Easily accessible location, nice corals between 3-6m, artificial reefs at more profound depths. Great variety of reef fish. A perfect location for night dives as well.</p>
                                <h3 class="h3font18">US LIBERTY</h3>
                                <p>Beach Dive Tulamben - The most famous dive spot in Bali. The 120m long vessel is one of the easiest wrecks to dive on in the world, but is also one of the most interesting. Fully covered in corals, home to hundreds different fish species. Starting at about 4-5m deep up until 27m, this site requires several dives to see ‘everything'</p>
                                <h3 class="h3font18">KUBU</h3>
                                <p>Beach Dive Tulamben - A nice, relaxed diving spot. Excellent coral fields, wide variety of fish and sealife. Sometimes a bit of current, but never pose a real problem. Don't forget your camera!</p>
                                <h3 class="h3font18">DROP OFF</h3>
                                <p>Beach Dive Tulamben - About 300m to the east of the wreck, is the drop off. A steep wall, covered with corals, up to 70m deep. If you're lucky, your eye will fall on one of the many mimic octopus, mantis shrimps and mostly, you'll also meet with the bumphead parrotfish. Lovely divespot!</p>
                                <h3 class="h3font18">GHOST BAY</h3>
                                <p>Beach Dive Amed - Photographers will love this. An artificial reef that is home to mimic octopus, ghost pipe fish, pipe fish, morrays, ...</p>
                                <br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mapbackground" style="background: url(img/diving/map1.jpg) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div>
        <section id="diving-2" class="side-bg">
            <div class="col-md-4 col-md-offset-4 pull-left image-container">
                <div class="background-image max-height-image800"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-45">
                        <div class="inner-padding">
                            <h2 class="diving-title">DIVE SITES FOR INTERMEDIATES</h2>
                            <h3 class="h3font18">JAPANESE WRECK</h3>
                            <p>Beach or boat dive Amed - The Japanese wreck is a small fishing vessel that sunk right before the beach. The corals on the boat and around the slopes behind the ship are very diverse and beautiful. A big variety of reef fish is to be found here, as are many nudi-branches. Current can be quite strong sometimes.</p>
                            <h3 class="h3font18">BUNUTAN - House Reef</h3>
                            <p>Beach or boat dive Amed - Our housereef offers something for everybody. Currents can be quite strong, but they bring with them Sharks, schools of barracuda, Giant trevally and other pelagics. When the current is down, it's a good spot to look for different types of eels, octopus, ghostpipfish, ... And if that wasn't enough, the huge fans and very healthy corals continuously keep the place interesting. (due to currents and difficult beach access in the dark, not suited for night dives)</p>
                            <h3 class="h3font18">SERAYA</h3>
                            <p>Beach Dive Tulamben - Bali's famous muck dive. A dream for photographers and lovers of small and weird creatures. A must! The difficulty here is being focussed and maintaining perfect buyoncy :)</p>
                            <h3 class="h3font18">ALAMANDA</h3>
                            <p>Boat dive Tulamben - From the starting point of the drop off, we take a boat and after about 5minutes, we arrive at Alamanda. A beautiful, coral covered slope that holds a lot of secrets. Take your time to explore (or dive with one of our experienced guides) and let the reef come to life.</p>
                            <h3 class="h3font18">GILI SELANG BAY</h3>
                            <p>Boat Dive Amed - The bay leading away from Gili Selang is covered in magnificent, healthy coral fields. Some downcurrent sometimes and cold upwellings. Absolutely stunning dive and definitely one of our favorites. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mapbackground" style="background: url(img/diving/map2.jpg) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div>
        <section id="diving-1" class="side-bg no-bottom">
            <div class="col-md-4 col-md-offset-8 pull-right image-container">
                <div class="background-image"></div>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="inner-padding">
                                <h2 class="diving-title">DIVE SITES FOR ADVANCED</h2>
                                <h3 class="h3font18">BLUU ROCKS</h3>
                                <p>Boat Dive Amed - A divesite that we recently discovered, but only for more experienced divers, as currents and a lot of thermoclines make the diving a bit harder. The colder currents and upwellings create a very healthy reef with a big possibility of seeing bigger things. Very exciting place!</p>
                                <h3 class="h3font18">Chinese RESTAURANT</h3>
                                <p>Boat Dive Amed - Another very exciting place we recently discovered ourselves. We named this site because of the amazing variety of amazing fish we saw during our first dive at this place. Sharks, Rays, Turtles, Octopus, Tuna, Napoleons, ... Strong currents and colder upwellings, make this a divesite for the more experienced diver. This is probably one of the most exciting new divespots around Bali and this will soon be a sought after dive spot!</p>
                                <h3 class="h3font18">GILI SELANG</h3>
                                <p>Boat dive Amed - Gili Selang is the most eastern tip of Bali. On 95% of the dives, at least at some point during the dive, you will encounter very strong current as you pass the rock. However, there are regular sights of Hammerheads, White tips and other pelagics passing by. Only for the very experienced divers. We will only take people if we're really 100% of their skills, as once you're in, there's only 1 way out.</p>
                                <br/><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mapbackground" style="background: url(img/diving/map3.jpg) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div>
    </div>
    <!-- content close -->
<?php
endwhile;
?>
<?php get_footer();?>

