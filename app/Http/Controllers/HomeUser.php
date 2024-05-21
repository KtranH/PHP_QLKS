<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use function Laravel\Prompts\select;
use App\Http\Controllers\SidebarUser;

class HomeUser extends Controller
{
    public function LoadActivity()
    {
        //load loại phòng tiêu biểu//
        $categoryFreatured = app(CategoriesRoom::class)->showFeaturedCategory()->getData()['categoryFreatured'];
        return view('User.Home.home', compact('categoryFreatured'));
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $searchTerm = $request->search;
            $data = is_numeric($searchTerm)
                ? DB::select('select * from loaiphong where SUCCHUA=? and ISDELETE=1', [$searchTerm])
                : DB::select("select * from loaiphong where ISDELETE=1 and(TENLOAIPHONG like ? OR VITRI like ?)", ['%' . $searchTerm . '%', '%' . $searchTerm . '%']);
            if (count($data) > 0) {
                $output = '<ul>';
                foreach ($data as $row) {
                    if (is_numeric($searchTerm)) {
                        $output .= '<li><a href="' . route('search.result', $row->SUCCHUA) . '">' . $row->SUCCHUA . '</a></li>';
                    } else {
                        if (isset($row->TENLOAIPHONG)) {
                            $output .= '<li><a href="' . route('search.result', $row->TENLOAIPHONG) . '"> ' . $row->TENLOAIPHONG . '</a></li>';
                        }
                        if (isset($row->VITRI)) {
                            $output .= '<li><a href="' . route('search.result', $row->VITRI) . '">' . $row->VITRI . '</a></li>';
                        }
                    }
                }
                $output .= '</ul>';
            } else {
                $output .= '<li style="list-style: none;">Không có kết quả</li>';
            }

            return response($output);
        }
    }
    public function searchResult($searchTerm)
    {
        $likeSearchTerm = '%' . $searchTerm . '%';

        $results = DB::select(
            "
    SELECT * 
    FROM loaiphong 
    WHERE  TENLOAIPHONG LIKE ? 
        OR SUCCHUA = ? 
        OR VITRI LIKE ?",
            [$likeSearchTerm, $searchTerm, $likeSearchTerm]
        );

        if (empty($results)) {
            return view('User.Room.noResult', ['searchTerm' => $searchTerm]);
        } else {
            return view('User.Room.resultsSearch', ['results' => $results, 'searchTerm' => $searchTerm]);
        }
    }
}
