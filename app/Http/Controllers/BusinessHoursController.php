<?php

namespace App\Http\Controllers;

use App\BusinessHours;
use Illuminate\Http\Request;

/**
 * Business hours resource representation.
 *
 * @Resource("BusinessHours", uri="/business_hours")
 */
class BusinessHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @Get("/{?date_from,date_to}")
     * @Parameters({
     *      @Parameter('date_from', description="Start date of business hours") 
     *      @Parameter('date_to', description="End date of business hours") 
     * })
     */
    public function index(Request $request)
    {
        $businessHours = BusinessHours::with('day')
                                ->with('frequency');
        if (!empty($request->input('date_from')))
            $businessHours->where('date_from', '>=', $request->input('date_from'));
        if (!empty($request->input('date_to')))
            $businessHours->whereRaw('IFNULL(`date_to`, '.$request->input('date_to').') <= "' . $request->input('date_to') . '"');
        $businessHours = $businessHours->get();
        
        return $businessHours;
    }

}
