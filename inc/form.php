<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="layout_padding-top layout_padding2-bottom">
            <div class="row">
                <div class="col-md-7">
                    <form action="">
                        <div class="contact_form-container">
                            <div class="Customer details">
                                <h5>Customer details</h5>
                            </div>
                            <div class="form-firlds">
                                <div>
                                    <input required type="text" placeholder="First Name" />
                                </div>
                                <div>
                                    <input required type="text" placeholder="Last Name" />
                                </div>
                                <div>
                                    <input required type="email" placeholder="Email Address" />
                                </div>
                                <div>
                                    <input required type="text" placeholder="Contact Number" />
                                </div>
                                <div>
                                    <input required type="text" placeholder="DD / MM / YY" />
                                </div>
                                <div class="">
                                    <input required type="text" placeholder="Home Address" />
                                </div>
                            </div>
                        </div>

                        <div class="contact_form-container">
                            <div class="Customer details padg-top">
                                <h5>Vehicle details</h5>
                            </div>
                            <?php for ($i=1; $i < 4; $i++):?> 
                            <div class="form-firlds" id="form_<?php echo $i?>" <?php echo $i > 1 ? 'style="display:none;"':'';?>>
                                <form action="">
                                    <div>
                                        <input required type="text" placeholder="Make" />
                                    </div>
                                    <div>
                                        <input required type="text" placeholder="Model" />
                                    </div>
                                    <div>
                                        <input required type="email" placeholder="Year" />
                                    </div>
                                    <div>
                                        <input required type="text" placeholder="Registration" />
                                    </div>
                                    <div class="Customer details for-padg-top pointer" onclick="document.getElementById('form_<?php echo $i+1?>').style.display = 'block';" <?php echo $i > 2 ? 'style="display:none;"':'';?>>
                                        <h5>Add another vehicle +</h5>
                                    </div>
                                </form>
                            </div>
                            <?php endfor;?>
                            <div class="button_with_arro">
                                <a href="/step-4" class="btn">Next<img src="<?php echo DEX_PATH ?>images/Arrow.svg" class="rounded float-right" alt="..." /></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </div>
</section>