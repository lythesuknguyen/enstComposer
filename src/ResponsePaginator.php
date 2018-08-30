<?php
namespace App;

define("TOTAL_PAGE_MIN", 1);


use Illuminate\Http\Response;
use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResponsePaginator {
	 public function paginateResponseList(int $pager , array $List, string $listType) {
        $itemPerPage = Config::get('constant.itemPerPage'); 
        $nextpager = 1 + (int)$pager;
        $pageMax = count($List) / $itemPerPage;
        $pageMax = ($pageMax > (int)$pageMax) ? (int)$pageMax+1 : (int)$pageMax;
        if ($pageMax == 0) {
            $pageMax = TOTAL_PAGE_MIN;
        }
       
        if ($pager >= $pageMax)  {
            return  response()->json(NULL, response::HTTP_NOT_FOUND);         
        }
        if ($pager == ($pageMax - 1)) {
            return response()->json(["nextPager" => NULL, $listType => collect($List)->forPage($nextpager, $itemPerPage)->values()->all()]);                 
        } 
        return response()->json(["nextPager" => $nextpager, $listType => collect($List)->forPage($nextpager, $itemPerPage)->values()->all()]);         
    }

    public function paginateResult(Request $request,array $List, string $listType) {
        $count = DB::select('SELECT FOUND_ROWS()');
        $count = json_decode(json_encode($count[0]), true);//convert stdClass ->Array
        $itemsTotal = array_values($count)[0];         
        $itemPerPage = Config::get('constant.itemPerPage'); 
        $currentPage = (int)$request['pager'];
        $pageMax = $itemsTotal / $itemPerPage;
        $pageMax = ($pageMax > (int)$pageMax) ? (int)$pageMax+1 : (int)$pageMax;
        if ($pageMax == 0) {
            $pageMax = TOTAL_PAGE_MIN;
        }
        if ($currentPage >= $pageMax)  {
            return  response()->json(NULL, response::HTTP_NOT_FOUND);         
        }

        if ($currentPage == ($pageMax - 1)) {
            return response()->json(["nextPager" => NULL, $listType => $List ]);  
        }

        $nextPage = $currentPage + 1;
        return response()->json(["nextPager" => $nextPage, $listType => $List]);         
    }
}
