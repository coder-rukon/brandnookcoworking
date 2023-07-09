
@include('header')

<div class="container aproment_main_section">

 <h2 class="schedule_visite">Free 3-Day Pass to Brandnook<sup>TM</sup></h2>

     <div class="row">

         <div class="col-md-6">

             <div class="appoinment_page_container">

                
 
                 <div class="ap_form">

                     <form action="{{url()->route('free_3_day_pass_request')}}" method="post">

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
                                         <option>Alabama</option>
                                         <option>Alaska</option>
                                         <option>Arizona</option>
                                         <option>Arkansas</option>
                                         <option>California</option>
                                         <option>Colorado</option>
                                         <option>Connecticut</option>
                                         <option>Delaware</option>
                                         <option>Florida</option>
                                         <option>Georgia</option>
                                         <option>Hawaii</option>
                                         <option>Idaho</option>
                                         <option>Illinois</option>
                                         <option>Indiana</option>
                                         <option>Iowa</option>
                                         <option>Kansas</option>
                                         <option>Kentucky</option>
                                         <option>Louisiana</option>
                                         <option>Maine</option>
                                         <option>Maryland</option>
                                         <option>Massachusetts</option>
                                         <option>Michigan</option>
                                         <option>Minnesota</option>
                                         <option>Mississippi</option>
                                         <option>Missouri</option>
                                         <option>Montana</option>
                                         <option>Nebraska</option>
                                         <option>Nevada</option>
                                         <option>New Hampshire</option>
                                         <option>New Jersey</option>
                                         <option>New Mexico</option>
                                         <option>New York</option>
                                         <option>North Carolina</option>
                                         <option>North Dakota</option>
                                         <option>Ohio</option>
                                         <option>Oklahoma</option>
                                         <option>Oregon</option>
                                         <option>Pennsylvania</option>
                                         <option>Rhode Island</option>
                                         <option>South Carolina</option>
                                         <option>South Dakota</option>
                                         <option>Tennessee</option>
                                         <option>Texas</option>
                                         <option>Utah</option>
                                         <option>Vermont</option>
                                         <option>Virginia</option>
                                         <option>Washington</option>
                                         <option>West Virginia</option>
                                         <option>Wisconsin</option>
                                         <option>Wyoming</option>
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

         <div class="col-md-6">

             <div class="appointment_right_site">

                 <img src="images/stage.png" alt="appointment" >

             </div>

         </div>

    </div>

</div>





@include('footer')