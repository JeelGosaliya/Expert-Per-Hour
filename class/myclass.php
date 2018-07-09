<?php

function connection_open()
{
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("first")or die(mysql_error());
}