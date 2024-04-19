<?php

// In This file we will determine which navigation options should be avaliable to any current user state

            //<li class="nav-item active">
            //<a class="nav-link" href="index.php?page=home">Home</a>
            //</li>

            //todo for each entry in navigation.xml, create a an object in the above HTML structure and echo it out
            // you must also check the users login / access state and add / remove (depending on implementation) ceirtain navbar objects

            $navbarElements = '';
            $xml_as_array = json_decode(json_encode(simplexml_load_file("config/navigation.xml")),TRUE);
            //var_dump($xml->navbar);

            $usertype = "admin";
            foreach ($xml_as_array[$usertype] as $element) {
                foreach ($element as $subelement) {
                    $title = ($subelement["title"]);
                    $url = ($subelement["url"]);
                    $navbarElements = $navbarElements . "<li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"$url\">$title</a>
                    </li>";
                }
              } 

include ("navbar.php");