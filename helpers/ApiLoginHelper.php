<?php

class ApiLoginHelper
{

    function apiCheckLoggedIn($rol)
    {
        if ($_SESSION['USER_ROL'] > $rol) {
            return false;
        }
    }
}
