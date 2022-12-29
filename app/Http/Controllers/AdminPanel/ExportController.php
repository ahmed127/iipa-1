<?php

namespace App\Http\Controllers\AdminPanel;

use Laracasts\Flash\Flash;
use App\Helpers\ExportTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    use ExportTrait;

    public function export(Request $request, $forable)
    {
        $export_rows = $request->validate(['export_rows' => 'required'], ["export_rows", __('crud.export_rows')]);

        // return $this->exportData($request->export_rows, $forable);

        switch ($forable) {
            case 'users':
                return $this->export_users($export_rows);
                break;
            case 'products':
                return $this->export_product($export_rows);
                break;
            case 'orders':
                return $this->export_orders($export_rows);
                break;
            case 'invoices':
                return $this->export_invoices($export_rows);
                break;

            default:

                return $this->exportData($request->export_rows, $forable);

                if ($request->ajax()) {
                    return response()->json(['msg' => __('crud.export_error')], 403);
                } else {
                    Flash::error(__('crud.export_error'));
                    return back();
                }

                break;
        }
    }
}
