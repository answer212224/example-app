<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index()
    {
        // dd(Storage::disk('local')->get('point.txt'));id

        DB::insert(
            'insert into points (
        SourceAccount,
        PointCardID,
        SourceMerchantTradeNo,
        SourceMerchantTradeDate,
        SourceStoreID,
        SourceStoreName,
        TradeAmount
        ) values (?, ? , ? , ? , ? , ? , ?)',
            [
                'FyUZ06bhWMeCALAKW1am89eFcHk3m713uBmgKyqFUo0u4WrOGn',
                'jPdb58KrolClw9oKoJfmvvWsTdcsK3F0Oh9JKMSZIwqQpUB56y',
                'nPkcoXjuh0XYcvMJWclbuywSbZrYx2SeNSEIXEzVW9Mva8kvZv',
                '2022-08-24 16:15:25',
                '商城會註冊成代理商',
                '商城會註冊成代理商',
                10055
            ],

            [
                'FyUZ06bhWMeCALAKW1am89eFcHk3m713uBmgKyqFUo0u4WrOGn',
                'jPdb58KrolClw9oKoJfmvvWsTdcsK3F0Oh9JKMSZIwqQpUB56y',
                'nPkcoXjuh0XYcvMJWclbuywSbZrYx2SeNSEIXEzVW9Mva8kvZv',
                '2022-08-24 16:15:25',
                '商城會註冊成代理商',
                '商城會註冊成代理商',
                10055
            ]

        );
        return view('welcome');
    }

    public function json()
    {
        $user = Point::find(1);

        return $user->toJson(JSON_PRETTY_PRINT);
    }
}
