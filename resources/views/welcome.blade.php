<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schedule a Visit to Brandnook</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="/style.css">
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	</head>


    <body class="appoitnment_page home_body_background">

<header id="header " class="home_hader">
    <div class="container">
        <div class="logo_section">
			<a href="/">
            <img src="/images/brandnook_home.png" class="logo" alt ="Brandnookcoworking.com"/> </a>
        </div>
    </div>
</header>
<div class="container aproment_main_section home_page_design">
	<h1 class="">NOW OPEN!</h1>
	<h3>Website Coming Soon</h3>
	<h2 class="schedule_visite">Schedule a Visit to Brandnook<sup>TM</sup></h2>
		<div class="row">
			<div class="col-md-12">
				<div class="appoinment_page_container home_page_container">
				   
					<div class="ap_form">
						<form action="{{url()->route('appoitnment-home')}}" method="post">
							
							@csrf
							@foreach ($errors->all() as $message)
								<div class="alert alert-danger">{{ $message}}</div>
							@endforeach
							<div class="row">
								<div class=" col-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>First Name*</label>
										<input name="first_name"  class="form-control"  value="{{old('first_name')}}" />
									</div>
								</div>
								<div class="col-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="last_name"  class="form-control"  value="{{old('last_name')}}"  />
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email"  class="form-control"  value="{{old('email')}}"  />
									</div>
								</div>
								<div class="col-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>Phone*</label>
										<input name="phone"  class="form-control"  value="{{old('phone')}}"  />
									</div>
								</div>
								<div class="col-6 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>Company</label>
										<input name="company"  class="form-control"  value="{{old('company')}}"  />
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">
									<div class="form-group">
										<label>Company Website</label>
										<input name="company_website"  class="form-control"  value="{{old('company_website')}}"  />
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">
									<div class="form-group">
										<label>Company Address Line 1</label>
										<input name="company_address_line_1"  class="form-control"  value="{{old('company_address_line_1')}}"  />
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">
									<div class="form-group">
										<label>Company Address Line 2</label>
										<input name="company_address_line_2"  class="form-control"  value="{{old('company_address_line_2')}}"  />
									</div>
								</div>
								<div class="col-4 col-xs-4 col-sm-4">
									<div class="form-group">
										<label>City</label>
										<input name="city"  class="form-control"  value="{{old('city')}}"  />
									</div>
								</div>
								<div class="col-4 col-xs-5 col-sm-5">
									<div class="form-group">
										<label>State</label>
										<select name="state"  class="form-control" >
											<option value="">Please select</option>
											@foreach ($all_states as $state)
												<option>{{$state->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-4 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Zip Code</label>
										<input name="zip_code"  class="form-control"  value="{{old('zip_code')}}"  />
									</div>
								</div>
								<div class="col-5 col-xs-6 col-sm-6">
									<div class="form-group">
										<label>I'm Interested in</label>
										<select name="interested_in"  class="form-control">
											<option value="">Please select</option>
											<option>Private Office</option>
											<option>Co-Working</option>
										</select>
									</div>
								</div>
								<div class="col-3 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Seats Needed</label>
										<input name="seats_needed"  class="form-control"  value="{{old('seats_needed')}}"  />
									</div>
								</div>
								<div class="col-4 col-xs-3 col-sm-3">
									<div class="form-group">
										<label>Desired Start Date</label>
										<input name="desired_start_date" type="date"  class="form-control"  value="{{old('desired_start_date')}}"  />
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">
									<button type="submit" class="btn btn-default btn_submit">Schedule Visit</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			
	   </div>
</div>

<div id="footer_section">
    <div class="container">
        <div class="row mobile_height">
            <div class="col-md-6">
                <div class="as_footer_item footer_logo">
                   <a href="/"> <img src="images/header-logo.png" alt="Brandook"></a>

                    <ul>
                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            7510 E 82nd St,<br>Indianapolis, IN 46256 </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="as_footer_item footer_right_top">
                    <h2>Get in touch</h2>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tal:317-361-4780" >&nbsp;317-361-4780</a> </li>
                        <li> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:hello@brandnookcoworking.com" > &nbsp; hello@brandnookcoworking.com</a> </li>
                        <li> <img src="images/world_web.png" alt="wwww.brandnookcoworking.com"> &nbsp;<a href="wwww.brandnookcoworking.com" > wwww.brandnookcoworking.com</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">

                <div class="as_footer_item footer_right_top">
                    <h2>Hours of operation</h2>
                    <ul>
                        <li style="padding-left:0"> Mon - Fri    8 AM - 6 PM</li>
                     
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mobile_show">

            <div class="col-md-3">

                <div class="as_footer_item footer_right_top footer_center ">
                    <h2>Hours of operation</h2>
                    <ul>
                        <li style="padding-left:0"> Mon - Fri    8 AM - 6 PM</li>
                     
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="as_footer_item footer_right_top footer_center">
                    <h2>Get in touch</h2>
                    <ul class="mobile_aliment">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tal:317-361-4780" >&nbsp;317-361-4780</a> </li>
                        <li> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:hello@brandnookcoworking.com" > &nbsp; hello@brandnookcoworking.com</a> </li>
                        <li> <img src="images/world_web.png" alt="wwww.brandnookcoworking.com"> &nbsp;<a href="wwww.brandnookcoworking.com" > wwww.brandnookcoworking.com</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="as_footer_item footer_logo footer_center ">
                    <img src="images/header-logo.png" alt="Brandook"><br>

                    <ul class="mobile_aliment">
                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            7510 E 82nd St,<br>Indianapolis, IN 46256 </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer_bottom footer_center">
            <div class="row">
                <div class="col-md-6 f-b-l-s">© 2023 brandnook. All rights reserved.</div>
                <div class="col-md-6 f-b-r-s">Designed by Retail Merchandise Solutions</div>
            </div>
        </div>
    </div>
   
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>