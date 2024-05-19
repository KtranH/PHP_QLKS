<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phong;

class CategoriesRoom extends Controller
{
    ////loại phòng tiêu biểu//
    public function showFeaturedCategory()
    {

        $categoryFreatured = LoaiPhong::getFeaturedCategory();
        return view('User.Room.categoryFeatured', ['categoryFreatured' => $categoryFreatured]);
    }
    ////tất cả loại phòng//
    public function showALLCategory()
    {
        $allCategory = LoaiPhong::getALLCategory();

        return view('User.Room.allCategory', compact('allCategory'));
    }
    ////tất cả loại cao cấp //
    public function showCaoCap()
    {
        $caocap = LoaiPhong::getCaoCap();

        return view('User.Room.highlevelCategories', compact('caocap'));
    }
    ////tất cả loại phổ thông //
    public function showPhoThong()
    {
        $phothong = LoaiPhong::getPhoThong();

        return view('User.Room.commonCategories', compact('phothong'));
    }
    ////tất cả loại giá rẻ //
    public function showGiaRe()
    {
        $giare = LoaiPhong::getGiaRe();

        return view('User.Room.cheapCategories', compact('giare'));
    }
    ////load phòng từ giá cao-->thấp//
    public function showRoomsByPriceHightLow()
    {
        $priceHighLow = LoaiPhong::getCategoryByPriceHighLow();

        return view('User.Room.categoryByPriceHighLow', compact('priceHighLow'));
    }
    //load phòng từ giá thấp-->cao//
    public function showRoomsByPriceLowHigh()
    {
        $priceLowHigh = LoaiPhong::getCategoryByPriceLowHigh();

        return view('User.Room.categoriesByPriceLowHigh', compact('priceLowHigh'));
    }
}
