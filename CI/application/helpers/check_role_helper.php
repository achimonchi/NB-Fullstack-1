<?php

function check_role ($role, $canAccess){
    // if($obj->session->userdata('login')->a_role === $canAccess) return true
    // else return false
    // return $obj->session->userdata('login')->a_role === $canAccess ? true : false;

    return $role === $canAccess ? true : false;
}