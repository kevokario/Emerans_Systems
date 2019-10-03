<div class="container-fluid generic-container">
    <!--Here we have the title and some paragraph-->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="custom-heading mt-5">Contact us</h2>
            <p>
                <!--Place content Here-->
                We appreciate you for considering Emeran's Engineering services!
                Kindly fill the form below. One of our personel will contact you shortly.
            </p>
        </div>
    </div>

    <!--Here we place the form-->
    <!-- <form class="row" id="contact-form" method="POST"> -->
    <form class="row" action="insert.php" method="post">
        <div class="col-sm-6">
            <h4 class="custom-heading mb-2" style="font-size: 20px; text-transform: capitalize">
                Enter Your Contact Info
            </h4>
            <p>The more details we get about you, the better and easier we will be able to communicate back</p>
            <!--First details here-->
            <div class="form-group">
                <label>Full Name *</label>

                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <!-- <input type="text" class="form-control " placeholder="Your Full Names..." /> -->
                    <input type="text" name="first_name" id="FirstName" class="form-control ">
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
                    <!-- <input type="text" class="form-control " placeholder="Your Company Name..." /> -->
                    <input type="text" name="company" id="Company" class="form-control ">
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Select Country *</label>
                <!-- <input type="text" name="country" id="Country"> -->
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-flag-o custom-flag-holder" style="display:inline"></i>
                            <img class="custom-svg" style="display: none">
                        </span>
                    </div>
                    <select id="countryid" name="country" class="form-control">
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
                    <!-- <input id="phone_number" type="text" class="form-control " placeholder="Your Phone number..." /> -->
                    <input type="text" name="phone" id="Phone" class="form-control ">

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
                    <!-- <input type="email" class="form-control " placeholder="Your Email Address..." /> -->
                    <input type="email" name="email" id="Email" class="form-control ">
                </div>
                <small class="text-danger"></small>
            </div>



            <div class="form-group">
                <label>Application *</label>
                <!-- <input type="text" name="applicationn" id="Application"> -->

                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                    <!-- <select class="form-control"> </select> -->
                    <select id="Applicationn" name="applicationn">
                        <option>-Select-</option>
                        <option>Project Management</option>
                        <option>ERP System</option>
                        <option>Design and Survey Services</option>
                        <option>Others</option>
                    </select>
                </div>
                <small class="text-danger"></small>
            </div>

        </div>

        <div class="col-sm-6">
            <!--Test area section-->
            <h4 class="custom-heading mb-2" style="font-size: 20px; text-transform: capitalize">
                Tell Us more About Your Project(Optional)
            </h4>
            <p>Please let us know more about your project(s), so that we can analyze it,
                target your needs and provide valuable, customized information for you.</p>
            <div class="form-group">
                <label>Project Details</label>
                <!-- <input type="text" name="details" id="Details"> -->
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-pencil"></i>
                        </span>
                    </div>
                    <textarea class="form-control" placeholder="A detailed description.." rows="8" placeholder="" type="text" name="details" id="Details"></textarea>
                    <!-- <input type="text" name="details" id="Details"> -->
                </div>
                <small class="text-danger"></small>
            </div>
            <div class="form-group mt-3 form-check">
                <label class="form-check-label">
                    <input type="checkbox" id="subscribe_option" name="" value="" class="form-check-input">
                    <!-- <input type="text" name="details" id="Details" class="form-check-input"> -->
                    Subscribe to the Emeran updates on latest news, Careers, projects & innovations.
                </label>
            </div>
        </div>
        <div class="col-sm-12">
    </form>
    <!--Button Section-->
    <button type="submit" action="submit" class="btn fancy-button">
        Send Request <i></i>
        <!-- <input type="text" name="details" id="Details"> -->
    </button>
</div>
</form>
</div>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>

<body>
    <form action="insert.php" method="post">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="firstName">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName">
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>
        <input type="submit" value="Submit">
    </form>
</body>

</html> -->