<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function getRate()

    {

        $ch = curl_init('https://blockchain.info/ticker');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $json = curl_exec($ch);
        $arr = json_decode($json);
        curl_close($ch);
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

    }

    function ourRate()
    {
        echo "КОМИССИЯ В 2%";


        $ch = curl_init('https://blockchain.info/ticker');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $json = curl_exec($ch);
        $arr = json_decode($json, true);
        curl_close($ch);

        foreach ($arr as $key => $value) {

            $value['15m'] = ($value['15m'] / 100 * 2) + $value['15m'];;
            $value['last'] = ($value['last'] / 100 * 2) + $value['last'];
            $value['buy'] = ($value['buy'] / 100 * 2) + $value['buy'];
            $value['sell'] = ($value['sell'] / 100 * 2) + $value['sell'];
            $newarr = [];
            $newarr[$key] = $value;

            echo '<pre>';
            print_r(json_encode($newarr));
            echo '</pre>';


        }

    }

}
