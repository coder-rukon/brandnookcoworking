<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/style.css">
	</head>
	<body class="appoitnment_page">
        <div class="appoinment_page_container">
            <h2 class="title">Schedule a Visit to Brandnook<sup>TM</sup></h2>
            <div class="ap_form">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>First Name*</label>
                            <input name="first_name"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>Last Name*</label>
                            <input name="last_name"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input name="Company"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Website</label>
                            <input name="company_website"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Address Line 1</label>
                            <input name="address1"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Address Line 2</label>
                            <input name="address2"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input name="city"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="form-group">
                            <label>State</label>
                            <select name="state"  class="form-control">
                                @foreach ($all_states as $state)
                                    <option>{{$state->name}}</option>
                                @endforeach
                                
                                <option>Co-Working</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <label>Zip Code</label>
                            <input name="zip_code"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>I'm Interested in</label>
                            <select name="interested_in"  class="form-control">
                                <option>Private Office</option>
                                <option>Co-Working</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group">
                            <label>Seats Needed</label>
                            <input name="seats_needed"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="form-group">
                            <label>Desired Start Date</label>
                            <input name="desired_start_date"  class="form-control"  />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <button type="submit" class="btn btn-default btn_submit">Schedule Visit</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</body>
</html>