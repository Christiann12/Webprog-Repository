<div>
    <div class="ping card my-5 card py-5 px-3 px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>What is Ping?</h1>
                    <h5>This section helps the users of the website quickly alert ODMS in time of disaster or after a disaster. This will send ODMS the information they need for quick response.</h5>
                </div>
                <div class="col">
                    <img src="<?php echo base_url(); ?>application/assets/images/ping_image.jpg" alt="Ping">
                </div>
            </div>
        </div>
    </div>

    <div class="pinghow container my-5 py-5 px-3 px-lg-5 shadow">
        <div class="col-12">
            <h1>How does it works?</h1>
        </div>
        <div class="row">
            <div class="column-item col-6 first-column">
                <div>
                    <h2>Step 1</h2>
                    <h5>Start by clicking the ping button located below the page.</h5>
                </div>
            </div>

            <div class="column-item col-6 second-column">
                <div>
                    <h2>Step 2</h2>
                    <h5>Input your company's name and contact information.</h5>
                </div>
            </div>

            <div class="column-item col-6 third-column">
                <div>
                    <h2>Step 3</h2>
                    <h5>Wait for a confirmation reply.</h5>
                </div>
            </div>

            <div class="column-item col-6 fourth-column">
                <div>
                    <h2>Step 4</h2>
                    <h5>Start communicating.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="pingimgbtn card my-5 py-5 px-3 px-lg-5">
            <div class="imgbtn col-sm-12 mt-12">
                <img src="<?php echo base_url(); ?>application/assets/images/tower_ping.jpg" alt="Tower" class="img-fluid" class="h-100 w-100">
                <div>
                    <h1>Start Pinging Now</h1>
                    <button class="img-btn btn-primary" data-toggle="modal" data-target="#modalContent">Ping</button>

                    <div class="modal fade" id="modalContent" tabindex="-1" aria-labelledby="modalContentLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalContentLabel">Ping Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="company-name" class="company"><h6 class="company">Company Name:</h6></label>
                                                <input type="text" class="form-control" id="company-name" placeholder="Ex: ODMS Enterprise">
                                            </div>
                                            <div class="form-group">
                                                <label for="email-info" class="email"><h6 class="email">Contact Info:</h6></label>
                                                <input type="text" class="form-control" id="contact-email" placeholder="Ex: Email or Telephone Number">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="cancel-btn btn btn-default" data-dismiss="modal">Quit</button>
                                        <button type="submit" class="proceed-btn btn btn-default" >Ping</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>