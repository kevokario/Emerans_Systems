<div class="container-fluid generic-container">
    <!--Here we have the title and some paragraph-->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="custom-heading mt-5">Contact us</h2>
            <p>
                <!--Place content Here-->
                Thank you for your interest in Emeran’s engineering services!
                Please fill out the form below. One of our team members will contact you shortly.
            </p>
        </div>
    </div>

    <!--Here we place the form-->
    <form class="row">
        <div class="col-sm-6">
            <h4 class="custom-heading mb-2" style="font-size: 20px; text-transform: capitalize">
                Enter Your Contact Info
            </h4>
            <p>The more we know about you, the better we will be at providing you with relevant answers.</p>
            <!--First details here-->

            <div class="form-group">
                <label>Full Name *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control " placeholder="Your Full Names..." />
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Company *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control " placeholder="Your Company Name..." />
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Select Country *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-flag-o custom-flag-holder" style="display:inline"></i>
                            <img class="custom-svg" style="display: none">
                        </span>
                    </div>
                    <select id="countryid" class="form-control">
                        <option>Select Country</option>
                    </select>
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Phone *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input id="phone_number" type="text" class="form-control " placeholder="Your Phone number..." />
                </div>
                <small class="text-danger"></small>
            </div>
            <div class="form-group">
                <label>Email *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control " placeholder="Your Email Address..." />
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Application *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                    <select class="form-control">
                        <option>-Select-</option>
                        <option>-Select-</option>
                        <option>-Select-</option>
                    </select>
                </div>
                <small class="text-danger"></small>
            </div>

        </div>

        <div class="col-sm-6">
            <!--Test area section-->
            <h4 class="custom-heading mb-2" style="font-size: 20px; text-transform: capitalize">
                Tell Us About Your Project or Application(Optional)
            </h4>
            <p>Please tell us about your project or application, so that we can analyze it,
                target your needs and provide valuable, customized information for your business.</p>
            <div class="form-group">
                <label>Project/Application Details</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-pencil"></i>
                        </span>
                    </div>
                    <textarea class="form-control" placeholder="A detailed description.." rows="8" placeholder=""></textarea>
                </div>
                <small class="text-danger"></small>
            </div>
            <div class="form-group mt-3 form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="" value="" class="form-check-input">
                    Subscribe to the Emeran newsletter and stay up to date on our technological
                    innovations and our updates on ERP!
                </label>
            </div>
        </div>

        <div class="col-sm-12">
            <!--Button Section-->
            <button type="button" class="btn fancy-button">
                Send Request
            </button>
        </div>
    </form>

</div>