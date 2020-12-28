<?php
require_once 'func.php';
session_start();
session_destroy();
header("location:" . base_url());
