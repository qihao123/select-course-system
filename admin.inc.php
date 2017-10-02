<?php
require_once '../3/lib/mysql.func.php';
function checkAdmin($sql){
	fetchOne($sql);
}
