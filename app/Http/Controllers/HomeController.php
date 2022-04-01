<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\LGA;
use App\Models\State;
use App\Models\Ward;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $state ,$lga ,$ward ,$citizen;
    public function __construct()
    {
        $this->middleware('auth');
        $this->state = new State();
        $this->lga = new LGA();
        $this->ward = new Ward();
        $this->citizen = new Citizen();
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $state = $this->state->create([
                'name'=> $request->state_name,
            ]);

            $lga = $this->lga->create([
                'name'=> $request->lga_name,
                'state_id' =>$state->id,
            ]);
            $ward = $this->ward->create([
                'name'=> $request->ward_name,
                'lga_id' =>$lga->id,
            ]);
           $citizen = $this->citizen->create([
                'name'=> $request->citizen_name,
                'gender'=> $request->gender,
                'address'=> $request->address,
                'phone'=> $request->phone,
                'ward_id' =>$ward->id,
            ]);
            if ($state &&$lga && $ward && $citizen){
               DB::commit();
            }else{
                DB::rollBack();
            }
            Alert::success('Success', "You've successfully registered the citizen");
            return back();
        }
        catch (\Exception $exp){
            DB::rollBack();
        }
    }

    public function show()
    {
        $userCount = Citizen::count();
        $stateCount =State::where('name', 'Osun')->count();
        $lgaCount =LGA::where('name', 'alimosh')->count();
        $wardCount =Ward::where('name', 'ward2')->count();
        return view('welcome')->with(['user_count' => $userCount, 'state_count' => $stateCount,'lga_count'=>$lgaCount, 'ward_count'=>$wardCount]);
    }
}
