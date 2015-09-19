<?php 
/**
 * @autor Christian Falcon.
 * Motor de etiquetas html simple.
 */
class HTML {
	
    /**
     * Funcion que trae un elemento de la carpeta public.
     * @autor Christian Falcon.
     */
    public static function getFile($url)
    {
        if (!is_null($url)) {
            require_once 'public/'.$url;
        }
    }
    
    /**
     * Funcion que trae cualquier archivo de JavaScript.
     * @autor Christian Falcon.
     */
    public static function getJs($Path, $nombreJs, $Script = null)
    {
        if (!empty($nombreJs) && !empty($Path)) {
            $ruta = $Path.'public/js/'.$nombreJs.'.js';
            $JavaScript = '<script type="text/javascript" src='.$ruta.'>'.$Script.'</script>';
            return $JavaScript;
        } else {
            return false;
        }
    }
    
    /**
     * Funcion que trae estilo a tu vida BD.
     * @autor Christian Falcon.
     */
    public static function getStyle($Path, $nombreCss = null)
    {
        if (!is_null($nombreCss) && !empty($Path)) {
            $ruta = $Path.'public/css/'.$nombreCss.'.css';
            $Css = '<link rel="stylesheet" href='.$ruta.' />';
            return $Css;
        } elseif (is_null($nombreCss) && substr('htt', 0, 3)) {
            $Css = '<link rel="stylesheet" href='.$Path.' />';
            return $Css;
        } else {
            return false;
        }
    }
    
    /**
     * Funcion que crea hipervinculo.
     * @autor Christian Falcon.
     */
    public static function getLink($nombreLink, $url = null , $Path = null, $Clase = null, $Id = null)
    {
        if (!empty($url) && !is_null($Path) && !empty($nombreLink)) {
            $link = $Path.$url;
            $Hiper = '<a class="'.$Clase.'" id="'.$Id.'" href="'.$link.'" >'.$nombreLink.'</a>';
            return $Hiper;
        } elseif (!is_null($Path) && !empty($nombreLink)) {
            $Hiper = '<a class="'.$Clase.'" id="'.$Id.'" href="'.$Path.'" >'.$nombreLink.'</a>';
            return $Hiper;
        } elseif (!is_null($url) && is_null($Path) && !empty($nombreLink)) {
            $Hiper = '<a class="'.$Clase.'" id="'.$Id.'" href="'.$url.'" >'.$nombreLink.'</a>';
            return $Hiper;
        } elseif (is_null($url) && is_null($Path) && !empty($nombreLink)) {
            $Hiper = '<a class="'.$Clase.'" id="'.$Id.'" href="#" >'.$nombreLink.'</a>';
            return $Hiper;
        } else {
            return false;
        }
    }
    
    /**
     * Funcion que crear un metatag de html.
     * @autor Christian Falcon.
     */
    public static function getMetatag($NombreMeta, $Contenido)
    {
        if (!empty($NombreMeta) && !empty($Contenido)) {
            $Meta = '<meta name="'.$NombreMeta.'" content="'.$Contenido.'" />';
            return $Meta;
        } else {
            return false;
        }
    }
	
	/**
     * Funcion que crear imagenes html.
     * @autor Christian Falcon.
     */
    public static function getImage($NombreIMG = null, $url = null, $Path = null, $Clase = null, $Id = null, $Atributos = null)
    {
        if (!empty($Path) && !is_null($url)) {
			$Ruta = $Path.'public/img/'.$url;
			$IMG = '<img src="'.$Ruta.'" alt="'.$NombreIMG.'" class="responsive-img '.$Clase.'" id="'.$Id.'" '.$Atributos.' >';
			return $IMG;
		} elseif (!is_null($url) && empty($Path)) {
			$IMG = '<img src="'.$url.'" alt="'.$NombreIMG.'" class="responsive-img  '.$Clase.'" id="'.$Id.'" '.$Atributos.' >';
			return $IMG;
        } else {
            return false;
        }
    }
    
    /**
     * Funcion que crea una etiqueta html
     * param $nameTag (nombre Etiqueta), $Atributos, $Path (para rutas dentro del proyecto)
     * @autor Steffani Marquez.
     */
    public static function getTag($nameTag ,$Atributos = [], $Path = null){

        if(!empty($Atributos) && !is_null($Atributos)){  
			foreach ($Atributos as $key => $value) {
				if($key == 'src'){
					if (!empty($Path)){
						$atributo .= $key.' = "'.$Path.'public/img/'.$value.'" ';
					}
				}
				if($key == 'href'){
					if (!empty($Path)){
						$atributo .= $key.' = "'.$Path.$value.'" ';
					}else if(is_null($Path)){
						$atributo .= $key.' = "'.$value.'" ';
					}
				}
				
                $atributo .= $key.' = "'.$value.'" ';
                $Tag = '<'.$nameTag.' '.$atributo.'>';
            }
        }else{
            return false;
        }

        return $Tag;
    }
    
     /**
     * Funcion que cierra las etiquetas HTML
     * @autor Steffani Marquez.
     */
    public static function getClose($nameTag = null){
        if(!is_null($nameTag)){
            $Tag = '</'.$nameTag.'>';
        }else{
            return false;
        }

        return $Tag;
    } 
    
}
?>
