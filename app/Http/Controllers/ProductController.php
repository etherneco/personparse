<?php

namespace App\Http\Controllers;

use App\Parse\Person as Person;
use App\Parse\Splite as Splite;

class ProductController extends Controller {

    /**
     * Show result of post file 
     *
     * @return \Illuminate\Http\Response
     */
    public function list() {
        if (isset($_FILES['amount']) && $_FILES['amount']['tmp_name']) {
            //read file from post
            $fileContent = file_get_contents($_FILES['amount']['tmp_name']);
            
            //read lines people
            $peopleLines = explode(chr(13), $fileContent);
            $peopleData = [];
            
            foreach ($peopleLines as $persons){
                // generate split list persons
                $personsList = \App\Parse\Splite::listAnd($persons);
                $out = [];
                
                // generate parse persons
                foreach ($personsList as $one)
                {
                    $out[] = Person::parse($one);
                }
                //FINALLY SAVE RESULT
                $peopleData[] = ['input'=>$persons, 'output'=> $out];

            }
            
        }

        return view('product', ['people'=>$peopleData]);
    }

}
