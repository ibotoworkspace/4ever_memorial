<!DOCTYPE html>
<html lang="en">

<head>
    <title>4 Ever Memorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/memorial.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/user_theme/css/main.css') !!}" rel="stylesheet">

</head>
@extends('user_layout.main_header_footer')

<body onload="disableSubmit()">

    <section>
        <div class="contacttopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>CREATE A MEMORIAL</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="tabsarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tabdata">
                            <ul class="nav nav-tabs tabmenu">
                                <!-- <li class=""><a data-toggle="tab" href="#home">ACCOUNT DETAILS</a></li> -->
                                <li><a data-toggle="tab" href="#menu1">ABOUT YOUR LOVED ONE</a></li>
                                <li><a data-toggle="tab" href="#menu2">CHOOSE YOUR PLAN</a></li>
                                <li id="privacy_tab"><a data-toggle="tab" href="#menu3">PRIVACY OPTIONS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <div class="cardformarea">
                                        <h2>This memorial is dedicated to:</h2>

                                        <form class="create_memorial_form" action="{!! asset('user/adduser') !!}"
                                            method="post">
                                            {!! csrf_field() !!}
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>


                                                    <input type="text" required name="f_name" class="form-control"
                                                        placeholder="First Name">

                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>
                                                    <input type="text" required name="l_name" class="form-control"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Middle Name<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>
                                                    <input type="text" name="m_name" class="form-control"
                                                        placeholder="Middle Name"  required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Deceased Profile Image<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>
                                                    {{-- name="prof_img" --}}
                                                    <input type="file"
                                                        class="form-control prof_box crop_upload_image"
                                                        accept="image/*"
                                                        image_width="378" image_height="226" aspect_ratio_width="16"
                                                        aspect_ratio_height="9" upload_input_by_name="prof_img"  required>

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label name="gender" for="exampleFormControlSelect1">Gender</i></label>
                                                <select class="form-control" name="gender"  required
                                                    id="exampleFormControlSelect1">
                                                    <!-- <option value="" selected="" disabled="" hidden="">
                                                        Gender</option> -->
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label name="relation"
                                                    for="exampleFormControlSelect1">Relationship<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>

                                                <input list="relations" placeholder="Please write/select a relationship"
                                                    class="form-control" name="relation"  required>
                                                <datalist id="relations">
                                                    <option value="Aunt">Aunt</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Colleague">Colleague</option>
                                                    <option value="Cousin">Cousin</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="Father">Father</option>
                                                    <option value="Friend">Friend</option>
                                                    <option value="Granddaughter">Granddaughter</option>
                                                    <option value="Grandfather">Grandfather</option>
                                                    <option value="Grandmother">Grandmother</option>
                                                    <option value="Grandson">Grandson</option>
                                                    <option value="Husband">Husband</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Nephew">Nephew</option>
                                                    <option value="Niece">Niece</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Step Family">Step Family</option>
                                                    <option value="Uncle">Uncle</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Other" data-code="other">Other</option>
                                                    <option value="No relationship">No relationship</option>
                                                </datalist>

                                            </div>

                                            <div class="form-group">
                                                <label name="memorial_designation"
                                                    for="exampleFormControlSelect1">Memorial
                                                    Designation</label>
                                                <select class="form-control" name="memorial_designation"  required
                                                    id="exampleFormControlSelect1">
                                                    <!-- <option value="" selected="" disabled=""
                                                        hidden="">
                                                        Select designation, if applies </option> -->
                                                    <option value="does_not_apply">Does not apply </option>
                                                    <option value="military">Military Veteran </option>
                                                    <option value="first_responder">First Responder </option>
                                                    <option value="covid">Bishop</option>
                                                    <option value="covid">Reverent</option>
                                                    <option value="covid">Imam</option>
                                                    <option value="covid">Father</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Life<i class="fa fa-asterisk staring" aria-hidden="true"></i> (Write A Few Words On The
                                                    Life/Birth Of This Person)</label>
                                                <textarea rows="5" id="summary_ckeditor" name="life_tab_arr" class="ckeditor form-control form-group txtar"
                                                    placeholder="Write A Few Words On The Life/Birth Of The Deceased"  required></textarea>
                                                {{-- <div onclick="get_ck_editor_val()">Get val</div> --}}
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Image<i class="fa fa-asterisk staring" aria-hidden="true"></i> (Attach A Picture Regarding The
                                                    Life/Birth Of This Person)</label>
                                                    <input type="file" accept="image/*"
                                                        class="form-control prof_box crop_upload_image"
                                                        image_width="378" image_height="226" aspect_ratio_width="16"
                                                        aspect_ratio_height="9" upload_input_by_name="life_image"  required>


                                            </div>


                                            <h5>More Details</h5>
                                            <div class="detailcard">
                                                <!-- <p>This information can also be updated at a later time:</p> -->

                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <p>Born<i class="fa fa-asterisk staring" aria-hidden="true"></i></p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="date" name="b_year" class="form-control"
                                                                id="exampleFormControlSelect1"  required>

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="b_city" class="form-control"
                                                                placeholder="City or Town"  required>

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input name="b_state" type="text" class="form-control"
                                                                placeholder="State or Area"  required>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input name="b_country" type="text"
                                                                class="form-control" placeholder="Country"  required>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <p>Passed away</p>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="date" name="p_year" class="form-control"
                                                                id="exampleFormControlSelect1">

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input type="text" name="p_city" class="form-control"
                                                                placeholder="City or Town">

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input name="p_state" type="text" class="form-control"
                                                                placeholder="State or Area">
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <input name="p_country" type="text"
                                                                class="form-control" placeholder="Country">
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <h2>Memorial web address:</h2>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="exampleFormControlInput1">Memorial Name<i class="fa fa-asterisk staring" aria-hidden="true"></i></label>
                                                    <input name="email" type="email" class="form-control"
                                                        id="exampleFormControlInput1"
                                                        placeholder="Write A Unique Memorial Name"  required>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="examplemail">
                                                        <p>@4evermemorial.com</p>
                                                    </div>
                                                </div>

                                            </div>


                                            {{-- <a data-toggle="tab" href="#menu2"> --}}
                                                <div
                                                    onclick="validate_submit_form('.create_memorial_form','create_memorial')"
                                                    class="btn btn-primary contclik">Continue
                                                </div>
                                            {{-- </a> --}}
                                        </form>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">

                                    <div class="col-sm-6">
                                        <div class="plandata">
                                            <h4>STANDARD (15 MEMORIAL PAGES)</h4>
                                            <div class="mincardboxhght">
                                                <p>Highly Secure With Password Login Access <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Decease Bio <span class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Flower Donation Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Image Gallery <span class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(1)"
                                                        class="btn btn-primary banclick">Buy Now</button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="plandata">
                                            <h4>PREMIUM (30 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>All in Standard And Biography of Deceased And Family Members <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Automated Anniversary Reminder <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Virtual Anniversary Organize By 4Ever (Extra Cost) <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Tribute Notes And Letters By Friends <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">

                                                    <button onclick="submit_update_plan(2)"
                                                        class="btn btn-primary banclick">Buy Now</button>


                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="plandata">
                                            <h4>PREMIUM PLUS (50 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>All in Standard And Premium Including <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Tribute Page For Message From Family And Friends <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Grave Yard Image On Top Of The Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Link To Physical Grave Site <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Link Memorials Of Relative To Their Pages, Example <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>A. Wife Page Link To Husband Or Husband Page Link Wife <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>B. Husband Or Wife Memorials Merge Together <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(3)"
                                                        class="btn btn-primary banclick">Buy Now</button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="plandata">
                                            <h4>VIP PREMIUM PLUS (80 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>(All in Premium Plus) <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Customized Dedicated Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Highly Secure Login Access <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>And All in Premium Plus <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Search By Name For A Brief Information <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(4)"
                                                        class="btn btn-primary banclick">Buy Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="cardformarea option">
                                        <form action="{!! asset('user/memorial/privacy') !!}" method="post">
                                            {!! csrf_field() !!}

                                            <h2>Privacy options:</h2>
                                            <p>Would you like to share your memorial with others, or keep it private?
                                            </p>
                                            {{-- <span class="braketdata">(This can be changed later.)</span><br> --}}
                                            <div class="form-group form-check memoreadio">
                                                <input name="all_visitors" value="1" type="checkbox"
                                                    class="form-check-input only_one_check" id="exampleCheck1"
                                                    onclick="onlyOne(this)">
                                                <div class="optrad">
                                                    <h6>All visitors can view and contribute.</h6>
                                                    <p>Recommended for most memorials. This option allows easy access to
                                                        the
                                                        website and
                                                        facilitates collaboration.</p>
                                                </div>
                                            </div>
                                            <div class="form-group form-check memoreadio">
                                                <input name="only_me" value="1" type="checkbox"
                                                    class="form-check-input only_one_check" id="exampleCheck1"
                                                    onclick="onlyOne(this)">
                                                <div class="optrad">
                                                    <h6>Visible only to me.</h6>
                                                    <p>Choose this option if you do not want the memorial to be visible
                                                        to
                                                        others at this time.</p>
                                                </div>
                                            </div>
                                            <div class="form-group form-check confi">
                                                <input name="agreement" value="1" type="checkbox"
                                                    class="form-check-input" id="exampleChaeck1"
                                                    onchange="activateButton(this)">
                                                <label class="form-check-label" for="">I agree to <a href="{!! asset('/user/service_term') !!}"><span
                                                        class="linktext">Terms of Use</span></a></label>
                                            </div>
                                            <?php
                                            
                                            $chk_agree = 'disabled';
                                            
                                            ?>
                                            <!-- <a href="{!! asset('user/template/select_template/{user_website}') !!}">  </a> -->
                                            <input type="hidden" name="memorial_id" class="memorial_id">

                                            <button type="submit" class="btn btn-primary contclik"
                                                id="submit">Continue</button>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <button onclick="test()" >tesssssssssssssssssssss</button> --}}

        <form action="{!! asset('user/memorial/update_plan') !!}" method="post" id="update_plan_form">
            {!! csrf_field() !!}
            <input type="hidden" name="memorial_id" class="memorial_id">
            <input type="hidden" name="plan_id" id="plan_id">
        </form>
    </section>

    {{-- <section>
        <div class="contactarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactdata">
                            <h3>Plant a tree as a living tribute</h3>
                            <h2>MEMORIAL TREES <br> BY 4EVER </h2>
                            <p>Created by Internet Pioneer Momolla Kokomolla in 1964,<br>
                                It is the oldest online Cemetery & Memorial Site in the World.</p>
                            <a href="contactus.html"><button type="submit"
                                    class="btn btn-primary contactclick">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section>
        <div class="footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footerlogo">
                            <img src="{!! asset('theme/user_theme/images/footer-logo.png') !!}" class="img-responsive">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <div class="fotermenu">
                                <div class="navbar-collapse nav-collapse collapse fomen">
                                    <ul class="nav navbar-nav navmenu">
                                        <li id="1">
                                            <a href="{!! asset('/') !!}"><span>HOME</span></a>
                                        </li>
                                        <li id="2">
                                            <a href="{!! asset('user/aboutus') !!}"><span>ABOUT</span></a>
                                        </li>
                                        <li id="3">
                                            <a href="{!! asset('admin/template/template1') !!}"><span>CREATE A
                                                    MEMORIAL</span> </a>
                                        </li>
                                        <li id="4">
                                            <a href="{!! asset('user/plans') !!}"><span>PLANS & FEATURES</span> </a>
                                        </li>
                                        <li id="5">
                                            <a href="{!! asset('user/testimonials') !!}"><span>TESTIMONIALS</span> </a>
                                        </li>
                                        <li id="6">
                                            <a href="{!! asset('user/blog') !!}"><span>BLOG</span> </a>
                                        </li>
                                        <li id="7">
                                            <a href="{!! asset('user/contactus') !!}"><span>CONTACT</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lastfooter">
                            <p>Copyright © 2022 4ever memory - Designed and Developed by HAT-INC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @include('layouts.myapp_js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        // var data = CKEDITOR.instances.editor1.getData();


        var user_memorial = null;

        function get_ck_editor_val() {
            var my_memorial = CKEDITOR.instances['summary_ckeditor'].getData();

            var c1 = CKEDITOR.instances["summary_ckeditor"];
            var c2 = CKEDITOR.instances["textarea-id"];

            console.log('its ckeditor', c1);
            console.log('not ckeditor', c2);

            console.log('my_memorial', my_memorial);
            console.log('my_memorial');
            return false;
        }


        function create_memorial(memorial_form, response) {
            var my_memorial = CKEDITOR.instances['summary_ckeditor'].getData();
            console.log('my_memorial', my_memorial);
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                // $(memorial_form + " input").val("");
                // $(memorial_form + " textarea").val("");
                user_memorial = response.response.user_memorial;
                $('.memorial_id').val(user_memorial.id);
            }
        }

        function submit_update_plan(selected_plan_id) {
            $('#plan_id').val(selected_plan_id);
            // $('#update_plan_form').submit();
            submit_form('#update_plan_form', 'open_tab');
            // submit_form('#memorial_id', 'open_tab');
        }

        function open_tab(res) {
            console.log('res', res);
            $('#privacy_tab').click();
        }

        function onlyOne(checkbox) {
            var checkboxes = $('.only_one_check');
            console.log('checkboxes', checkboxes);
            checkboxes.each((index, item) => {
                console.log('item', item);

                if (item !== checkbox) item.checked = false
            })
        }

        function disableSubmit() {
            document.getElementById("submit").disabled = true;
        }

        function activateButton(element) {

            if (element.checked) {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }

        }


        function validate_submit_form(form_selector,sucess_function){
            var valid_form = true;
            $(form_selector).find('input').each(function(){
                if($(this).prop('required') && $.trim($(this).val()).length === 0 ){
                    console.log('err name',$(this).attr('name'));
                    console.log('err name',$.trim($(this).val().length ));
                    console.log('err name',$(this).attr('name'));
                    $(this).addClass('required-warning');
                    valid_form = false;
                }
            });
            // $(form_selector).find('select').each(function(){
            //     if($(this).prop('value') && $.trim($(this).val()).length === 0 ){
            //         console.log('err name',$(this).attr('name'));
            //         console.log('err name',$.trim($(this).val().length ));
            //         console.log('err name',$(this).attr('name'));
            //         $(this).addClass('required-warning');
            //         valid_form = false;
            //     }
            // });
            if(valid_form){
                submit_form(form_selector,sucess_function);
                $('.nav-tabs a[href="#menu2"]').tab('show')
            }
        }


    </script>


</body>

</html>
