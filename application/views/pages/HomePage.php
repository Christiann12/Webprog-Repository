<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Page content -->
<div>

    <!-- About Section -->
    <div class="aboutus">
        <div class="row">
            <div class="col-lg-5">
                <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        
                        <!-- Carousel content-->
                        <div class="carousel-item active">
                            <img src="<?php echo base_url(); ?>application/assets/images/Chrysanthemum.jpg" alt="" class="w-100 h-100">
                        </div>

                        <div class="carousel-item">
                            <img src="<?php echo base_url(); ?>application/assets/images/Tulips.jpg" alt="" class="w-100 h-100">
                        </div>

                        <div class="carousel-item">
                            <img src="<?php echo base_url(); ?>application/assets/images/Desert.jpg" alt="" class="w-100 h-100">
                        </div>

                        <!-- Next and Previous button -->
                        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="fas fa-chevron-left"></span>
                        </a>

                        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                            <span class="fas fa-chevron-right"></span>
                        </a>


                    </div>
                </div>
            </div>
            <div class="col-lg-7 aboutusdetails pt-3 pt-sm-3 pt-md-3 pt-lg-0" >
                <h1 class="pb-3">
                    ODMS Enterprise
                </h1>
                <P class="text-justify">
                ODMS Enterprise is a professional organization that specializes in the marketing and distribution of electrical distribution line materials, lighting fixtures, poles, cables and general hardware to the Philippine market, both public and private entities.
                </P>
                <p class="text-justify">
                The company also engages in engineering services such as installation of distribution and transmission lines, installation of high voltage and low voltage equipments and other engineering works.
                </p>
                <p class="text-justify">
                Registered in July 30, 1999 as a single proprietorship, ODMS Enterprise aims to promote goodwill and success by providing quality products and services that goes beyond what our clients require.
                </p>
                <p class="text-justify">
                At present, it has branch offices in Naga City and Albay to answer the industry needs on the local market. These extension offices facilitate the availability of the products lessening the burden of procurement delay.
                </p>

                
            </div>
        </div>
    </div>
    <!-- End of About us Section -->

    <!-- style="background-color:red;" dont remove I use this for debugging -->
</div>
<!-- End page content -->
