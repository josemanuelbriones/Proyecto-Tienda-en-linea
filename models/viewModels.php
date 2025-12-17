<?php
    class ViewModels {
        protected static function getView($vista) {
            $listaBlanca=["home", 
                        "products",
                        "descriptionProduct", 
                        "cart", 
                        "register", 
                        "login",
                        "account",
                        "checkout",];
            

            if (in_array($vista, $listaBlanca) ) {   
                    $ruta = "./views/container/" . $vista . "-view.php";
                
            } else {
                $ruta = "404";
            }
            return $ruta;
        }
    }










?>