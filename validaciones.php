<?php
require_once 'db/conexion.php';
/**
 *
 */
class Validacion
{
    private $opciones = array('options' => array('min_range' => 0, 'max_range' => 10));

    public static function validar_email($campos)
    {
        if (!filter_var($campos['correo'], FILTER_VALIDATE_EMAIL)) {
            header('Location: index.php?variable=true');
        }
        return true;
    }

    public static function validar_user($campos)
    {
        if ($this->validar_email()) {
            $db     = Conectar::conexion();
            $result = mysqli_query($db, "SELECT * FROM usuario WHERE email='$campos[correo]'");
            if (!$result->is_empty()) {
                header('Location: index.php?variable=true');
            }
        } elseif (!filter_var($campos['documento'], FILTER_VALIDATE_INT, $this->opciones)) {
            header('Location: index.php?variable=true');
        }
    }

    public static function validar_donacion($campos)
    {
        if ($campos['monto'] > 0 && filter_var($campos['monto'], FILTER_VALIDATE_INT)) {
            $db     = Conectar::conexion();
            $result = mysqli_query($db, "SELECT * FROM fundacion WHERE id='$campos[id_fundacion]'");
            if ($result->is_empty()) {
                header('Location: index.php?variable=true');
            }
        }

    }
}
