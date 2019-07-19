<?php

$sql = "SELECT title, firstname, lastname FROM articles LEFT JOIN users ON articles.id = users.id WHERE  articles.id = 10";
