<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form id="frmusuario">
            <div><label>Usuario:</label>><input type="text" name="nomusuario" id="nomusuario"></div>
            <div><label>Clave:</label>><input type="password" name="clave" id="clave"></div>
            <input id="enviar" type="button" onclick="" value="Enviar">
            
        </form>
    </body>
    <script>
    $(document).ready(function(){
        $("#enviar").click(function(){
            /*$("form").hide();
            alert("Ocultarse el formulario :-)" + $("#nomusuario").val());*/
        if($("#nomusuario").val()!="" && $("#clave").val()!=""){
            $("frmusuario").submit();
        }
        else
        {
            alert("Debe agregar el usuario y clave");
            
        }
        });
    });
    </script>
</html>
