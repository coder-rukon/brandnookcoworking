<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Appointment;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        $Appointment = Appointment::orderBy('id','DESC')->get();

        



        return view('home', ['Appointments' => $Appointment]);

    }

}

