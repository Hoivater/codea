<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tegRequest;
use App\Models\Tegs;

class tegsController extends Controller
{
    //
    public function addTegs(tegRequest $arr)
    {
        $tegs = new Tegs();
        if($arr -> input('author'))
            $tegs -> author = $arr -> input('author');
        else
            $tegs -> author = "incognita";
        $tegs -> teg = $arr -> input('teg');
        $tegs -> text = $arr -> input('text');

        $tegs -> background = "fon_tegs_1.jpg";
        $tegs -> key = $this -> autogenereteF(30);
        $tegs -> link = $this -> transcriptionF($arr->input('teg'));
        $tegs -> description = $this -> descriptionF($arr -> input('teg'));

        $tegs -> version = 1;
        $tegs -> saves = 0;
        $tegs -> save();
        return redirect() -> route('start') -> with('success', 'Определение добавлено');

    }

    public function allData()
    {
        $tegs = new Tegs();
        $allId = $tegs -> orderBy('id', 'desc') -> get();
        $allId = $this -> redactionArrayF($allId);
        return view('home', ['data' => $allId]);
    }

    public function redactionArrayF($allId)
    {
        foreach($allId as $one)
        {
            $one -> version1 = $this -> realVersionF($one -> version);
        }
        return $allId;
    }

    public function realVersionF($num)
    {
        if($num <= 10)
            return "1.".$num;
        else
        {
            $r = $num%10;#остаток
            $ceil = floor($num/10);
            return $ceil.".".$r;
        }

    }

    public function autogenereteF($num)
    {
        $ar = array("_", "1", "2", "3", "4",  "5", "6","7",  "8", "9", "a",  "b",  "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "v", "w","x", "y", "z");
        $str = "";
        for ($i=0; $i <= 35; $i++) {
            $num = rand(0, count($ar)-1);

            $str .= $ar[$num];
        }
        return $str;
    }

    public function transcriptionF($name)
    {
        $arrayTranscription = array("а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "sh", "з" => "z", "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "", "ы" => "y", "ь" => "", "э" => "a", "ю" => "ua", "я" => "ya", "," => "_", "." => "_", ":" => "_", ";" => "_", ";" => "_", " " => "_", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "a" => "a", "b" => "b", "c" => "c", "d" => "d", "e" => "e", "f" => "f", "g" => "g", "h" => "h", "i" => "i", "j" => "j", "k" => "k", "l" => "l", "m" => "m", "n" => "n", "o" => "o", "p" => "p", "r" => "r", "s" => "s", "t" => "t", "u" => "u", "v" => "v", "w" => "w", "x" => "x", "y" => "y", "z" => "z");
            $newname = "";
            $name = mb_strtolower(trim($name));
            $newarray = preg_split('//u',$name,-1,PREG_SPLIT_NO_EMPTY);//разбиение строки кириллицы в массив символов

            for($i = 0; $i <= count($newarray)-1; $i++)
            {
                foreach($arrayTranscription as $key => $value)
                {
                    if($newarray[$i] == $key)
                    {
                        $newname = $newname.$value;
                        continue;
                    }
                }
            }
        return $newname;
    }
    public function descriptionF($n)
    {
        return "Что такое ".$n."?";
    }


}