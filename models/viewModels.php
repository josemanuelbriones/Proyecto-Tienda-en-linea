<?php
    class ViewModels {
        protected static function getView($vista) {
            $listaBlanca=["home", "products"];
            

            if (in_array($vista, $listaBlanca) ) {
            
            
                if (is_file("./views/container/" . $vista . "-view.php")) {
                    
                    $ruta = "./views/container/" . $vista . "-view.php";
                } else {
                    $ruta = "login";
                }
            }else if ($vista == "index" || $vista == "login") {
                $ruta = "login";
            } else {
                $ruta = "404";
            }
            return $ruta;
        }
    }










?>