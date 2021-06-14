<?php
function productos_json(&$pase1=0,&$pase2=0,&$pase3=0,&$pase4=0,&$pase5=0){
    
    $json=array();

    $pase1=(int) $pase1;
    if($pase1>0):
        $json['300']=$pase1;
    endif;

    $pase2=(int) $pase2;
    if($pase2>0):
        $json['301']=$pase2;
    endif;

    $pase3=(int) $pase3;
    if($pase3>0):
        $json['302']=$pase3;
    endif;
    $pase4=(int) $pase4;
    if($pase4>0):
        $json['303']=$pase4;
    endif;
    $pase5=(int) $pase5;
    if($pase5>0):
        $json['304']=$pase5;
    endif;

    return json_encode($json);
}