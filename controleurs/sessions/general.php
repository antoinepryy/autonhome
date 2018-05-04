<?php
/**
 * Created by IntelliJ IDEA.
 * User: antoine
 * Date: 04/05/2018
 * Time: 15:56
 */


function startSession(){
    session_start();
}

function stopSession(){
    session_destroy();
}