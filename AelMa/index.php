<?php

$cookieName = "user";

if (empty($_COOKIE[$cookieName])) {
	header("Location: http://localhost/AELMA/login.html");
}
else {
	header("Location: http://localhost/AELMA/homepage.html");
}