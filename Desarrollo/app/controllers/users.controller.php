<?php

class ControllerUsers{

/*=================================================================
=                       INGRESO DE USUARIO                        =
==================================================================*/

    public function ctrIngresoUsuario(){

        if(isset($_POST["ingUsuario"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
               preg_match('/^[a-zA-Z0-9"*"]+$/', $_POST["ingPassword"])){

                $tabla = "USUARIO";

                $item = "usu_usuario";

                $valor = $_POST["ingUsuario"];

                $respuesta = ModelUsers::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usu_usuario"] == $_POST["ingUsuario"] && $respuesta["usu_password"] == $_POST["ingPassword"]){

					$_SESSION["iniciarSesion"] = "ok";

					echo '<script>

						window.location = "inicio";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

            }

        }

    }

}