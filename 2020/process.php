<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST["login"];
    echo $_POST["password"];
}
