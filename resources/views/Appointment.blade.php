<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schedule a Visit to Brandnook</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
	</head>
	<body class="appoitnment_page">
        <div class="appoinment_page_container">
            <h2 class="title">Schedule a Visit to Brandnook<sup>TM</sup></h2>
            <div class="ap_form">
                <form action="{{url()->route('appoitnment')}}" method="post">
                    @csrf
                    @foreach ($errors->all() as $message)
                        <div class="alert alert-danger">{{ $message}}</div>
                    @endforeach
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input name="first_name"  class="form-control"  value="{{old('first_name')}}" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
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
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone*</label>
                                <input name="phone"  class="form-control"  value="{{old('phone')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Company*</label>
                                <input name="company"  class="form-control"  value="{{old('company')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Website*</label>
                                <input name="company_website"  class="form-control"  value="{{old('company_website')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Address Line 1*</label>
                                <input name="company_address_line_1"  class="form-control"  value="{{old('company_address_line_1')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Address Line 2</label>
                                <input name="company_address_line_2"  class="form-control"  value="{{old('company_address_line_2')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>City*</label>
                                <input name="city"  class="form-control"  value="{{old('city')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <div class="form-group">
                                <label>State*</label>
                                <select name="state"  class="form-control" >
                                    <option value="">Please select</option>
                                    @foreach ($all_states as $state)
                                        <option>{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label>Zip Code*</label>
                                <input name="zip_code"  class="form-control"  value="{{old('zip_code')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>I'm Interested in*</label>
                                <select name="interested_in"  class="form-control">
                                    <option value="">Please select</option>
                                    <option>Private Office</option>
                                    <option>Co-Working</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                                <label>Seats Needed*</label>
                                <input name="seats_needed"  class="form-control"  value="{{old('seats_needed')}}"  />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="form-group">
                                <label>Desired Start Date*</label>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</body>
</html>