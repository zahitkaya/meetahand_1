<?php 
function filterUrl($str){
    return htmlspecialchars(trim($str));
}
function get($name){
    if(isset($_GET[$name])){
        if(is_array($_GET[$name])){
            return array_map(function($item){
                return filterUrl($item);
                
            }, $_GET[$name]);
            
        }
        return filterUrl($_GET[$name]);
       
    }
 return false;
}

function url($index){
    global $_url;
    if(isset ($_url[$index])){
       return $_url[$index];}
     return false;   
    }
function asset_url( $url=null){
    return url.'/assets/'.$url;
}
function view_url( $url=null){
    return url.'/view/'.$url;
}
?>