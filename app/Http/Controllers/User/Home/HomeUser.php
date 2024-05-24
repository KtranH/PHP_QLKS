<?php

namespace App\Http\Controllers\User\Home;

use App\Http\Controllers\Controller;
use App\Models\LoaiPhong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class HomeUser extends Controller
{
    public function LoadActivity()
    {
        $lines = file(storage_path('Files/activity.txt'));
        $fileJson = file_get_contents(storage_path('Files/news.json'));
        $data = json_decode($fileJson, true);
        $categoryFreatured = LoaiPhong::getFeaturedCategory();
        return view("User.Home.home", compact('lines','data','categoryFreatured'));
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $searchTerm = $request->search;
            $data = is_numeric($searchTerm)
                ? DB::select('SELECT * FROM loaiphong WHERE SUCCHUA=? and ISDELETE=1', [$searchTerm])
                : DB::select("SELECT * FROM loaiphong WHERE ISDELETE=1 and(TENLOAIPHONG LIKE ? OR VITRI LIKE ?)", ['%' . $searchTerm . '%', '%' . $searchTerm . '%']);
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
            "SELECT * FROM loaiphong WHERE  TENLOAIPHONG LIKE ? OR SUCCHUA = ? OR VITRI LIKE ?",[$likeSearchTerm, $searchTerm, $likeSearchTerm]
        );

        if (empty($results)) {
            return view('User.Room.noResult', ['searchTerm' => $searchTerm]);
        } else {
            return view('User.Room.resultsSearch', ['results' => $results, 'searchTerm' => $searchTerm]);
        }
    }
}
