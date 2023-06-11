<?php

namespace App\Http\Controllers;

use Storage;
use Validator;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function Index(Request $request){
        $data = [];
        $data['all_states'] = $this->getState(['US','CA']);
        return view('Appointment',$data);
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
