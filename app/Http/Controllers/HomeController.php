<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products = Product::all();
        $sections = Section::all();
        $count = DB::table('orders')->count();
        $pricec = DB::table('order_details')
        ->select('order_details.unitprice', 'order_details.quantity_id')
        
        ->sum(DB::raw('order_details.unitprice * order_details.quantity_id'));
        
        $alert = DB::table('products')
        ->select('products.alert_stock', 'products.quantity')
        ->sum(DB::raw('products.alert_stock >= products.quantity'));
        $top_sales = DB::table('products')
            ->leftJoin('order_details','products.id','=','order_details.product')
            ->selectRaw('products.id, SUM(order_details.quantity_id) as total')
            ->groupBy('products.id')
            ->orderBy('total','desc')
            ->take(2)
            ->get();
        $topProducts = [];
        foreach ($top_sales as $s){
            $p = Product::findOrFail($s->id);
            $p->totalQty = $s->total;
            $topProducts[] = $p;
        }
        return view('home',compact('products', 'topProducts', 'sections', 'count', 'pricec', 'alert'));
    }
    
    public function orderChart(Request $request)
    {
        $group = $request->query('group', 'month');

        $query  = OrderDetail::select([
            
            DB::raw('SUM(unitprice) as unitprice'),
            DB::raw('COUNT(*) as count'),
        ])
        ->groupBy([
            'label'
        ])
        ->orderBy('label');

        switch ($group) {
            case 'day';
            $query->addSelect(DB::raw('DATE(created_at) as label'));
            $query->whereDate('created_at', '>=', Carbon::now()->startOfMonth());
            $query->whereDate('created_at', '<=', Carbon::now()->endOfMonth());
                
                break;
            case 'week';
            $query->addSelect(DB::raw('DATE(created_at) as label'));
            $query->whereDate('created_at', '>=', Carbon::now()->startOfWeek());
            $query->whereDate('created_at', '<=', Carbon::now()->endOfWeek());
                
                break;
            case 'year';
            $query->addSelect(DB::raw('YEAR(created_at) as label'));
            $query->whereYear('created_at', '>=', Carbon::now()->subYears(5)->year);
            $query->whereYear('created_at', '<=', Carbon::now()->addYears(4)->year);
                
                break;
            case 'month';
            $query->addSelect(DB::raw('Month(created_at) as label'));
            $query->whereDate('created_at', '>=', Carbon::now()->startOfYear());
            $query->whereDate('created_at', '<=', Carbon::now()->endOfYear());
               
            // $labels = [
            //     1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            // ];
            default;
        }


        $entries = $query->get();
      
        // $dataset = [];
       $labels = $unitprice = $count = [];

        foreach ($entries as $entry) {
            $labels[] = $entry->label;
            $unitprice[$entry->label] = $entry->unitprice;
            $count[$entry->label] = $entry->count;
        }

        // foreach ($labels as $month => $name) {
        //     if (!array_key_exists($month, $unitprice)) {
        //         $unitprice[$month] = 0;
        //     }
        //     if (!array_key_exists($month, $count)) {
        //         $count[$month] = 0;
        //     }
        // }

        // ksort( $unitprice);
        // ksort($count);

        return [
            'group' => $group,
            'labels' => array_values($labels),
            'datasets' => [
                [
                    'label' => ' المبيعات',
                    'ineTension' => '0.3',
                    'backgroundColor' => 'rgba(78, 115, 223, 0.05)',
                    'pointBackgroundColor' => "rgba(78, 115, 223, 1)",
                    'borderColor' => 'rgb(54, 162, 235)',
                    'pointHitRadius' => '10',
                    'pointBorderWidth' => '2',
                    'data' => array_values($unitprice),
                ],

                [
                    'label' => 'الطلبات',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => array_values($count),
                ]
                
                
            ],
        ];
    }
    
}
