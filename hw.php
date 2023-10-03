<?php   



function dostava($cena, $grad){
    $gradovi=[
        'Pancevo'=>10,
        'Subotica'=>190,
        'Sarajevo'=>292,
        'Split'=>700
    ];
    $gradovi['Vrsac']=120;
        $cenaDostave=0;
    if(array_key_exists($grad, $gradovi)){
        if($gradovi[$grad]>0 && $gradovi[$grad]<=100){
            $cenaDostave=100;
        }elseif ($gradovi[$grad]>100 && $gradovi[$grad]<=200){
            $cenaDostave=350;
        }elseif($gradovi[$grad]>100){
            $cenaDostave=500;
        }
    }else{
        echo  'Grad ne postoji';
    }



    return  $cena+$cenaDostave;
}



echo dostava(2000, 'Pancevo').'<br>';
echo dostava(2000, 'Split').'<br>';
echo dostava(2000, 'Sarajevo').'<br>';
echo dostava(2000, 'Subotica').'<br>';
echo dostava(2000, 'Vrsac').'<br>';
echo dostava(2000, 'Kikinda').'<br>';









?>