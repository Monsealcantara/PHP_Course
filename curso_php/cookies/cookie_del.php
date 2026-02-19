<?php
//si ponemos negativo el tiempo, se puede eliminar la cookie
setcookie("Idioma","",time()-(36000*60),"/","localhost",false,true);