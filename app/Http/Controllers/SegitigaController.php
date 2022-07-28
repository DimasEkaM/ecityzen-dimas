<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{

    public function index(request $request){
        $star=$request->angka;
        $tipe=$request->tipe;
        
        if($tipe == 1) {
            for($a=$star;$a>0;$a--){
                for($b=$star;$b>=$a;$b--){
                    echo "*";
                }
                echo "<br>";
                }
        } else if($tipe == 2){
            for($a=1; $a<=$star; $a++){
                for($i=1; $i<=$a; $i++){
                    echo " &nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                    echo "*";
                }
                echo "<br>";
            }
        } else {
            for( $a=$star;$a>0;$a--){
                for($i=1; $i<=$a; $i++){
                    echo "&nbsp";
                }
                for($a1=$star;$a1>=$a;$a1--){
                    echo"*";
                }
                echo"<br>";
                }
        }
    }

}
