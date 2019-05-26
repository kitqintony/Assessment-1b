<?php
/*
 * connectDB.php
 *
 * Copyright 2019 Frankie <frankie@frankie-GE60-2PE>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 *
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Connect to DB</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<?php
        function OpenCon()
        {
            $dbhost = "ec2-23-21-186-85.compute-1.amazonaws.com";
            $dbuser = "iyoiyxyaicloil";
            $dbpwd = "8718d926fa790d8a35868defbd94f171d4436c1d121c64d8548749b031fbcb70";
            $db = "dcg0k6ns0dk2oj";

            //check database exists.
            $conn = new mysqli($dbhost, $dbuser, $dbpwd, $db) or die("Connection failed: %s\n". $conn->error);

            return $conn;
        }

    function CloseCon($conn)
    {
        $conn->close();
    }
    ?>
</body>

</html>
