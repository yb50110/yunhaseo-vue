<div class="pt-nav pt-page pt-page-0">
    <div class="panel-group" id="accordion-landing">

        <div class="panel">
            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-landing" href="#collapse-landing-1">
                <h1>development</h1>
            </div>
            <div id="collapse-landing-1" class="panel-collapse collapse">
                <div class="panel-body project-panel">

                    <div class="pt-triggers">
                        <div id="dl-menu-landing-projects-development" class="dl-menuwrapper">

                            <ul class="dl-menu owl-carousel owl-theme">
                                <li data-animation="22" data-destination="4">
                                    <div class="project">
                                        <div class="project-image"
                                             style="background-image: url('./img/pepoints/main.png'); background-position: bottom;"></div>
                                        <h2 class="project-title">PE Points Web Application</h2>
                                    </div>
                                </li>
                                <li data-animation="22" data-destination="5">
                                    <div class="project">
                                        <div class="project-image"
                                             style="background-image: url('./img/safehr/main.png');"></div>
                                        <h2 class="project-title"> SAFEHR Portal and App </h2>
                                    </div>
                                </li>
                            </ul>

                        </div><!-- /dl-menu-wrapper-->
                    </div><!-- /triggers -->

                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-landing" href="#collapse-landing2">
                <h1>design</h1>
            </div>
            <div id="collapse-landing2" class="panel-collapse collapse">
                <div class="panel-body project-panel">

                    <div class="pt-triggers">
                        <div id="dl-menu-landing-projects-design" class="dl-menuwrapper">

                            <ul class="dl-menu owl-carousel owl-theme">
                                <li data-animation="22" data-destination="6">
                                    <div class="project">
                                        <div class="project-image"
                                             style="background-image: url('./img/spijkergoed/main.jpg');background-position: -60px -45px;background-size: 170% 170%;"></div>
                                        <h2 class="project-title">Spijkergoed</h2>
                                    </div>
                                </li>
                                <li data-animation="22" data-destination="8">
                                    <div class="project">
                                        <div class="project-image"
                                             style="background-image: url('./img/swan/main.png');background-size: cover;"></div>
                                        <h2 class="project-title">Swan</h2>
                                    </div>
                                </li>
                            </ul>

                        </div><!-- /dl-menu-wrapper-->
                    </div><!-- /triggers -->

                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-landing" href="#collapse-landing-3">
                <h1>illustration</h1>
            </div>
            <div id="collapse-landing-3" class="panel-collapse collapse">
                <div class="panel-body project-panel">

                    <div class="pt-triggers">
                        <div id="dl-menu-landing-projects-illustration" class="dl-menuwrapper">

                            <ul class="dl-menu owl-carousel owl-theme">
                                <li data-animation="22" data-destination="7">
                                    <div class="project">
                                        <div class="project-image"
                                             style="background-image: url('./img/petiteaparis/main.jpg');background-position: -145px -30px;background-size: 200%;"></div>
                                        <h2 class="project-title">Petite a Paris Illustration</h2>
                                    </div>
                                </li>
                            </ul>

                        </div><!-- /dl-menu-wrapper-->
                    </div><!-- /triggers -->

                </div>
            </div>
        </div>

    </div>

    <div class="pt-triggers trigger-bottom with-animation">
        <div id="dl-menu-landing" class="dl-menuwrapper">
            <ul class="dl-menu">
                <li data-animation="11" data-destination="1" onclick="closePanels()"><h2>whoami</h2></li>
            </ul>
        </div><!-- /dl-menu-wrapper-->
    </div><!-- /triggers -->
</div>

<script>
    /**
     * close all panel upon moving to the whoami pages
     */
    function closePanels() {
        $('.panel-collapse').removeClass('in');
        $('.panel-heading').attr('aria-expanded', 'false');
    }
</script>
