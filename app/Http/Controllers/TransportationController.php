<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Position;
use App\Models\Transportation;
use App\Models\Truck;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class TransportationController extends Controller
{
    public function index()
    {
        $transportations = Transportation::with('organization')->get();
        $rate_nds = $transportations->sum('rate_nds');

        return view('transportations.index', [
            'transportations' => $transportations,
            'rate_nds' => $rate_nds,
        ]);
    }

    public function create()
    {
        $position = Position::where('position', 'Водитель')->first();

        return view('transportations.create',[
            'organizations' => Organization::all(),
            'trucks' => Truck::all(),
            'workers' => Worker::where('position_id', $position->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            Transportation::create($request->all());
        });

        return redirect()->route('transportations.index');
    }

    public function show(Transportation $transportation)
    {
        $item = Transportation::where('id', $transportation->id)->first();
        $driver = Worker::where('id', $transportation->driver_id)->first();
        $truck = Truck::where('id', $transportation->truck_id)->first();
        $organization = Organization::where('id', $transportation->organization_id)->first();
        //dd($truck);
       // dd($item);
        return view('transportations.show', [
            'item' => $item,
            'driver' => $driver,
            'truck' => $truck,
            'organization' => $organization,
        ]);
    }

    public function edit(Transportation $transportation)
    {
        return view('transportations.create',
            [
                'organizations' => Organization::all(),
                'transportations' => $transportation
            ]
        );
    }

    public function update(Request $request, Transportation $transportation)
    {

    }

    public function destroy(Transportation $transportation)
    {
        if ($transportation->delete())
            return response()->json(['result' => true]);

        return response()->json(['result' => false]);
    }
}
