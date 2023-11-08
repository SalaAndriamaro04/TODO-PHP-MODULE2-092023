<?php
//--
//--Vérification si la valeur entrée correspond à ce que le développeur voulait, 
//--pour éviter des attaques comme des scripts

function post($name, $default=null){
    if(isset($_POST[$name])){
        return htmlentities($_POST[$name]);
    }else{
        return $default;
    }

}

//--
//--Récupération de l'id dans le lien

function get($name, $default=null){
    if(isset($_GET[$name])){
        return htmlentities($_GET[$name]);
    }else{
        return $default;
    }

}

?>