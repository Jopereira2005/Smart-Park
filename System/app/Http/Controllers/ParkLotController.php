<?php

namespace App\Http\Controllers;

use App\Models\ParkLot;
use Illuminate\Http\Request;

class ParkLotController extends Controller
{

    public function __construct() {}

    /**
     * index
     *
     * @return ParkLot
     */

    public function index()
    {
        $park_lots = ParkLot::all();

        return response()->json($park_lots, 200);
    }

    public function status(int $id, int $status)
    {
        $park_lots = ParkLot::find($id);

        $park_lots->status = $status;
        $park_lots->save();

        return response()->json($park_lots, 200);
    }
}
