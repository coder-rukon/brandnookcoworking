<?php

namespace App\Http\Controllers;

use Storage;
use Validator;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function Index(Request $request){
        $data = [];
        $data['all_states'] = $this->getState(['US','CA']);
        return view('Appointment',$data);
    }
    public function AppointmentRequest(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
           
        ]);
 
        if ($validator->fails()) {
            return redirect()->route('appoitnment-page')
                        ->withErrors($validator)
                        ->withInput();
        }
        $to = "web@retailmerchandisesolutions.com";
        //$to = "hello@brandnookcoworking.com";
        $subject = "Someone wants to schedule a ".$request->input('interested_in')." visit";
        $txt = "";
        $txt .= "\n First Name : ".$request->input('first_name');
        $txt .= "\n Last Name : ".$request->input('last_name');
        $txt .= "\n Email : ".$request->input('email');
        $txt .= "\n Phone : ".$request->input('phone');
        $txt .= "\n Company : ".$request->input('company');
        $txt .= "\n Company Website : ".$request->input('company_website');
        $txt .= "\n Company Address Line 1 : ".$request->input('company_address_line_1');
        $txt .= "\n Company Address Line 2 : ".$request->input('company_address_line_2');
        $txt .= "\n City : ".$request->input('city');
        $txt .= "\n State : ".$request->input('state');
        $txt .= "\n Zip Code : ".$request->input('zip_code');
        $txt .= "\n I'm Interested in : ".$request->input('interested_in');
        $txt .= "\n Seats Needed : ".$request->input('seats_needed');
        $txt .= "\n Desired Start Date : ".$request->input('desired_start_date');


        $headers = "From: noreply@brandnookcoworking.com" . "\r\n" .
        "Reply-To: ".$request->input('email');

        $Appointment = new Appointment();

        $Appointment->first_name = $request->input('first_name');
        $Appointment->last_name = $request->input('last_name');
        $Appointment->email = $request->input('email');
        $Appointment->phone = $request->input('phone');
        $Appointment->company = $request->input('company');
        $Appointment->company_website = $request->input('company_website');
        $Appointment->company_address_line_1 = $request->input('company_address_line_1');
        $Appointment->company_address_line_2 = $request->input('company_address_line_2');
        $Appointment->city = $request->input('city');
        $Appointment->state = $request->input('state');
        $Appointment->zip_code = $request->input('zip_code');
        $Appointment->interested_in = $request->input('interested_in');
        $Appointment->seats_needed = $request->input('seats_needed');
        $Appointment->desired_start_date = $request->input('desired_start_date');

        $Appointment->save();

        $sendEmail  = mail($to,$subject,$txt,$headers);
        if(!$sendEmail){
            return redirect()->route('appoitnment-page')
                        ->withErrors(["Can't send email. Please try again"])
                        ->withInput();
        }
        return redirect()->route('thankyou-page');
       
    }
    public function Thankyou(Request $request){
        $data = [];
        return view('Thankyou',$data);
    }
    private function getState( $country ) {
        $states = Storage::disk( 'local' )->get( 'locations\states.json' );
        $allStates = json_decode( $states );
        $statesAr = [];
        foreach ( $allStates as $stateKey => $state ) {
            if ( in_array($state->country_code , $country) ) {
                $statesAr[] = $state;
            }
        }
       
        return $statesAr;
    }
}
