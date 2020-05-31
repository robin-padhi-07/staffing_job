<?php
    include ("header.php");
    require_once('database.php');  
?>


<div class="container main_wrapper">
<div class="col-md-4 float-left col-12">
<div class="sidebar mt_20 desktop_view float-left">
    <span style="position: absolute; right: 20px; top: 10px; font-size: 14px;"> <a href="">Edit</a> </span>
    <img src="assets/images/profile.png" class="round_img">
    <span class="primery_title float-left pt_5">Stela Maxwell</span>
    <span class="second_subtitle float-left">stelamaxwell@gmail.com</span>
</div>

</div> <!-- ===  OL_MD 4 right side section end here ========== -->
    <div class="col-md-8 float-left col-12 no-padding">
        <div class="wrapper">
            <div class="common_box mt_20 float-left  pb_30 pt_30">
                <form action="" class="needs-validation w-100 pt_10 float-left" novalidate>
                    <div class="col-md-6 float-left col-12 mb_20">
                        <label for="validationCustom03">Full Name</label>
                        <input type="text" class="form-control" id="validationCustom03" required placeholder="Full name">
                        <div class="invalid-feedback">Please provide a valid Name. </div>
                    </div> 
                    <div class="col-md-6 float-left col-12 mb_20">
                        <label for="validationCustom03">Email</label>
                        <input type="email" class="form-control" id="validationCustom03" required placeholder="Email address">
                        <div class="invalid-feedback">Please provide a valid Name. </div>
                    </div> 
                    <div class="col-md-6 float-left col-12  mb_20">
                        <label for="validationCustom03">Phone</label>
                        <input type="phone" class="form-control" id="validationCustom03" required placeholder="Phone number">
                        <div class="invalid-feedback">Invalid Password </div>
                    </div>
                    <div class="col-md-6 float-left col-12 mb_20">
                        <label for="validationCustom03">Location</label>
                        <input type="text" class="form-control" id="validationCustom03" required placeholder="City">
                        <div class="invalid-feedback">Invalid Password </div>
                    </div>  

                    
                    <button class="primary_btn mb_20" type="submit">Save</button>
                </form>
            </div>
            <!-- =============== Experience  ==== ========================-->
            <div class="common_box mt_10 float-left">
                <h1 class="section_title w-100">Experience </h1>
                
                <div class="col-md-12 float-left col-12 mb_20">
                    <label for="validationCustom03">Company name</label>
                    <input type="text" class="form-control" id="validationCustom03" required placeholder="Company name">
                    <div class="invalid-feedback">Company name required </div>
                </div> 
                <div class="col-md-6 float-left col-12 mb_20">
                    <label for="validationCustom03">Position Name</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Junior Chefs</option>
                        <option>Senior Chefs</option>
                        <option>Master</option>
                        <option>Head of Cook</option>
                        <option>Jn Cook</option>
                      </select>
                </div> 
                <div class="col-md-3 float-left col-12 mb_20">
                    <label for="validationCustom03">Year of exp</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                      </select>
                </div> 
                <div class="col-md-3 float-left col-12 mb_20">
                    <label for="validationCustom03">Month Name</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                      </select>
                </div> 
                <div class="col-md-6 float-left col-12 mb_20">
                    <label for="validationCustom03">Job Location</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Bangalore</option>
                        <option>Mysore</option>
                        <option>Kerela</option>
                        <option>Mumbai</option>
                        <option>Chennai</option>
                      </select>
                </div> 
                <div class="col-md-6 float-left col-12 mb_20">
                    <button class="btn mb_20 mt_20 btn-primary">Save</button>
                </div> 
                <ul class="cpmmon_ul">
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">Head Chef   <a href="">Edit</a> <a href="">Remove</a>    </span>
                            <span class="second_subtitle w-100 float-left">Behrouz biryani ltd</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">Head Chef <a href="">Edit</a> <a href="">Remove</a> </span>
                            <span class="second_subtitle w-100 float-left">Behrouz biryani ltd</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                </ul>
            </div> <!--  ================== Experience END -->
            
            <!-- =============== Education  ==== ========================-->
            <div class="common_box mt_10 float-left">
                <h1 class="section_title w-100">Education </h1>
                
                <div class="row">
                
                <div class="col-md-12 float-left col-12 mb_20">
                    <label for="validationCustom03">Institute name</label>
                    <input type="text" class="form-control" id="validationCustom03" required placeholder="Company name">
                    <div class="invalid-feedback">Company name required </div>
                </div> 
                <div class="col-md-5 float-left col-12 mb_20">
                    <label for="validationCustom03">Qualification</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>10th </option>
                        <option>12th </option>
                        <option>BBA</option>
                        <option>MBA</option>
                        <option>Engineering</option>
                    </select>
                </div> 
                <div class="col-md-3 float-left col-12 mb_20">
                    <label for="validationCustom03">Passing of Year</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>2020</option>
                        <option>2219</option>
                        <option>2323</option>
                        <option>2323</option>
                        <option>2323</option>
                    </select>
                </div> 
                <div class="col-md-4 float-left col-12 mb_20">
                    <label for="validationCustom03">Job Location</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Bangalore</option>
                        <option>Mysore</option>
                        <option>Kerela</option>
                        <option>Mumbai</option>
                        <option>Chennai</option>
                    </select>
                </div>
                
            </div> 
            <button class="btn mb_20 mt_10 btn-primary"> Save</button>
            <ul class="cpmmon_ul">
                <li>
                    <div class="w-100 float-left">
                        <span class="subtitle w-100">BBA (Distance Learning Programme  <a href="">Edit</a> <a href="">Remove</a> </span>
                        <span class="second_subtitle w-100 float-left">Institutions Name</span>
                        <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                    </div>
                </li>
                <li>
                    <div class="w-100 float-left">
                        <span class="subtitle w-100">10th class </span>
                        <span class="second_subtitle w-100 float-left">School Name</span>
                        <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                    </div>
                </li>
            </ul>
            </div> <!--  ================== Experience END -->

            <div class="common_box mt_10 float-left">
                <h1 class="section_title w-100">Certification </h1>
            </div>

            <div class="common_box mt_10 float-left">
                <h1 class="section_title w-100">Others Information </h1>
                <div class="row">
                    <form action="" class="needs-validation w-100 pt_10 float-left" novalidate>
                        <div class="col-md-6 float-left col-12 mb_20">
                            <label for="validationCustom03">Current Location</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Bangalore</option>
                                <option>Mysore</option>
                                <option>Kerela</option>
                                <option>Mumbai</option>
                                <option>Chennai</option>
                            </select>
                            <div class="invalid-feedback">Select City name </div>
                        </div> 
                        <div class="col-md-6 float-left col-12 mb_20">
                            <label for="validationCustom03">Preferred Location</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Bangalore</option>
                                <option>Mysore</option>
                                <option>Kerela</option>
                                <option>Mumbai</option>
                                <option>Chennai</option>
                            </select>
                            <div class="invalid-feedback">Please provide a valid Name. </div>
                        </div> 
                        <div class="col-md-6 float-left col-12  mb_20">
                            <label for="validationCustom03" class="w-100">Last Salary (Yearly)</label>
                            <select class="form-control col-md-6 pr_0 float-left" id="exampleFormControlSelect1">
                                <option>0 Lakhs</option>
                                <option>1 Lakhs</option>
                            </select>
                            <select class="form-control col-md-6 no-padding float-left" id="exampleFormControlSelect1">
                                <option>10 Thousand</option>
                                <option>20 Thousand</option>
                            </select>
                            <div class="invalid-feedback">Invalid Password </div>
                        </div>
                        <div class="col-md-6 float-left col-12 mb_20">
                            <label for="validationCustom03" class="w-100">Expecting Salary</label>
                            <select class="form-control col-md-6 pr_0 float-left" id="exampleFormControlSelect1">
                                <option>0 Lakhs</option>
                                <option>1 Lakhs</option>
                            </select>
                            <select class="form-control col-md-6 no-padding float-left" id="exampleFormControlSelect1">
                                <option>10 Thousand</option>
                                <option>20 Thousand</option>
                            </select>
                            <div class="invalid-feedback">Invalid Password </div>
                        </div>  
                        <div class="col-md-12 float-left col-12 mb_20"">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        
                        
                    </form>
                </div><!--End of Row-->
                <table class="table spec_table">
                    <tr>
                        <td class="lable_text">Date of birth </td>
                        <td class="infp_text">20-12-1989</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Gender </td>
                        <td class="infp_text">Female</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Current Location </td>
                        <td class="infp_text">Bangalore</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Preferred Location</td>
                        <td class="infp_text">Bangalore</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Last Salary </td>
                        <td class="infp_text">2.3 Lakhs per year</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Expecting Salary </td>
                        <td class="infp_text">2.3 Lakhs per year</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Address </td>
                        <td class="infp_text">Bnaagore full address</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Languages</td>
                        <td class="infp_text">English, Hindi</td>
                    </tr>
                </table>                 
            </div> <!--  ================== Other Information END -->
            <div class="common_box mt_10 float-left mb_30">
                <h1 class="section_title mb_15">Proof of identification  </h1>
                <div class="job_container">
                    <div class="job_img">
                        <img src="assets/images/3ce84aa66f840d957ac9a85a827e22ad.png" class="">
                    </div>
                    <div class="job_caption">
                        <span class="primery_title">Addhar Card</span>
                        <span class="second_subtitle">1980 18229 929230 </span>
                    </div>
                </div>
                <div class="job_container">
                    <div class="job_img">
                        <img src="assets/images/8156af6febabd15f72166d1dd7d60b9e.png" class="">
                    </div>
                    <div class="job_caption">
                        <span class="primery_title">Addhar Card</span>
                        <span class="second_subtitle">1980 18229 929230 </span>
                    </div>
                </div>
            </div>
  

        </div>
    </div><!-- ====  COL_MD 8 right side section end here ========== -->
    
    
</div>



    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>    