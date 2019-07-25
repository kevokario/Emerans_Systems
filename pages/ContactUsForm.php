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

    <style>
        form .form-group{
            margin-bottom: 2px;
        }
        form .form-group label{
            margin-bottom: 3px;
            font-size: smaller;
        }
        form .form-group .input-group input,
        form .form-group .input-group select,
        form .form-group .input-group textarea{
            border-width: 0px 0px 1px 0px;
            border-radius: 0;
            box-shadow: none;
            padding: 5px;
            transition: .4s;
        }
        form .form-group .input-group input:focus, form .form-group .input-group select:focus{
            box-shadow: none;
        }
        form .form-group .input-group .input-group-prepend{

        }

        form .form-group .input-group .input-group-text{
            border-radius: 0;
            background: #fff;
            border-width: 0px 2px 1px 0px;
        }
        form .form-group .input-group .input-group-text .custom-svg{
            /*margin-left: 5px;*/
            display: inline;
            height: 22px;
            width: 27px;
        }
        form .form-group small{

        }

    </style>
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
                    <input type="text" class="form-control " placeholder="Your Full Names..."/>
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
                    <input type="text" class="form-control " placeholder="Your Company Name..."/>
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Select Country  *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-flag-o custom-flag-holder" style="display:inline"></i>
                            <img class="custom-svg" style="display: none" >
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
                    <input type="text" class="form-control " placeholder="Your Phone number..."/>
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
                    <input type="email" class="form-control " placeholder="Your Email Address..."/>
                </div>
                <small class="text-danger"></small>
            </div>

            <div class="form-group">
                <label>Application  *</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    </div>
                    <select class="form-control">
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
                    Subscribe to the Creaform newsletter and stay up to date on our technological
                    innovations and our applications in 3D engineering!
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

<script>
    $(document).ready(function () {
        $.get('https://restcountries.eu/rest/v2/all',
                function (data, status) {
                    var opt = '<option>Select Country</option>';
                    var sel = $('#countryid');
                    for (var i = 0; i < data.length; i++) {
                        opt = opt+'<option>'+data[i].name+'<option>';
                    }
                    $(sel).html(opt);
                }
        );

        $('#countryid').change(function () {
            var country = $(this).val().trim();
            
            if (country === 'Select Country' || country.length===0) {
                $('.custom-flag-holder').css('display', 'inline');
                $('.custom-svg').css('display', 'none');
            } else {
                if(!country.indexOf(' ') == -1){
                     country = country.substring(0, country.indexOf(' '));
                     alert('else : '+country);
                }
                $.get('https://restcountries.eu/rest/v2/name/' + country + '',
                        function (data, status) {
                            $('.custom-flag-holder').css('display', 'none');
                            $('.custom-svg').css('display', 'inline').attr('src',data[0].flag);
                        }
                );
            }

        }
        );
    });
</script>