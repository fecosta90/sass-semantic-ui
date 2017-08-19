<?php

    $colors = [
        "default"         => ["default" => ["base"   => ["bg"     => "E0E1E2",
                                                         "font"   => "rgba(0, 0, 0, 0.6)",
                                                         "border" => "rgba(34, 36, 38, 0.15)"],
                                            "hover"  => ["bg"     => "CACBCD",
                                                         "font"   => "rgba(0, 0, 0, 0.8)",
                                                         "border" => "rgba(34, 36, 38, 0.15)"],
                                            "focus"  => ["bg"   => "CACBCD",
                                                         "font" => "rgba(0, 0, 0, 0.8)"],
                                            "active" => ["bg"   => "BABBBC",
                                                         "font" => "rgba(0, 0, 0, 0.9)"]],
                              "active"  => ["base"   => ["bg"   => "C0C1C2",
                                                         "font" => "rgba(0, 0, 0, 0.95)"],
                                            "hover"  => ["bg"   => "C0C1C2",
                                                         "font" => "rgba(0, 0, 0, 0.95)"],
                                            "focus"  => ["bg"   => "BABBBC",
                                                         "font" => "rgba(0, 0, 0, 0.9)"],
                                            "active" => ["bg" => "C0C1C2"]]],
        "primary"         => ["default" => ["base"   => ["bg"     => "2185D0",
                                                         "font"   => "FFFFFF",
                                                         "border" => "rgba(34, 36, 38, 0.15)"],
                                            "hover"  => ["bg"   => "1678c2",
                                                         "font" => "FFFFFF"],
                                            "focus"  => ["bg"   => "0d71bb",
                                                         "font" => "FFFFFF"],
                                            "active" => ["bg"   => "1a69a4",
                                                         "font" => "FFFFFF"]],
                              "active"  => ["base"   => ["bg"   => "1279c6",
                                                         "font" => "FFFFFF"],
                                            "active" => ["bg"   => "1279c6",
                                                         "font" => "FFFFFF"]]],
        "primary-basic"   => ["default" => ["base"   => ["font"   => "2185D0",
                                                         "border" => "2185D0"],
                                            "hover"  => ["font"   => "1678c2",
                                                         "border" => "1678c2"],
                                            "focus"  => ["font"   => "1678c2",
                                                         "border" => "0d71bb"],
                                            "active" => ["font"   => "1a69a4",
                                                         "border" => "1279c6"]],
                              "active"  => ["base" => ["font"   => "1a69a4",
                                                       "border" => "1a69a4"]]],
        "secondary"       => ["default" => ["base"   => ["bg"     => "1B1C1D",
                                                         "font"   => "FFFFFF",
                                                         "border" => "rgba(34, 36, 38, 0.15)"],
                                            "hover"  => ["bg"   => "27292a",
                                                         "font" => "FFFFFF"],
                                            "focus"  => ["bg"   => "2e3032",
                                                         "font" => "FFFFFF"],
                                            "active" => ["bg"   => "343637",
                                                         "font" => "FFFFFF"]],
                              "active"  => ["base"   => ["bg"   => "27292a",
                                                         "font" => "FFFFFF"],
                                            "active" => ["bg"   => "27292a",
                                                         "font" => "FFFFFF"]]],
        "secondary-basic" => ["default" => ["base"   => ["font"   => "1B1C1D",
                                                         "border" => "1B1C1D"],
                                            "hover"  => ["font"   => "27292a",
                                                         "border" => "27292a"],
                                            "focus"  => ["font"   => "27292a",
                                                         "border" => "2e3032"],
                                            "active" => ["font"   => "343637",
                                                         "border" => "27292a"]],
                              "active"  => ["base" => ["font"   => "343637",
                                                       "border" => "343637"]]],


    ];

    foreach ($colors as $key=>$value){
        $color = $value;
        //Default - Base
        echo("//Button - Default - Base");
        echo "<br />";
        if ($color["default"]["base"]["bg"]) {
            echo "$" . $key . "-color:#" . $color["default"]["base"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["base"]["font"]) {
            echo "$" . $key . "-font-color:#" . $color["default"]["base"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["base"]["border"]) {
            echo "$" . $key . "-border-color:#" . $color["default"]["base"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Default - Active
        echo("//Button - Default - Active");
        echo "<br />";
        if ($color["default"]["active"]["bg"]) {
            echo "$" . $key . "-color--active:#" . $color["default"]["active"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["active"]["font"]) {
            echo "$" . $key . "-font-color--active:#" . $color["default"]["active"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["active"]["border"]) {
            echo "$" . $key . "-border-color--active:#" . $color["default"]["active"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Default - Hover
        echo("//Button - Default - Hover");
        echo "<br />";
        if ($color["default"]["hover"]["bg"]) {
            echo "$" . $key . "-color--hover:#" . $color["default"]["hover"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["hover"]["font"]) {
            echo "$" . $key . "-font-color--hover:#" . $color["default"]["hover"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["hover"]["border"]) {
            echo "$" . $key . "-border-color--hover:#" . $color["default"]["hover"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Default - Focus
        echo("//Button - Default - Focus");
        echo "<br />";
        if ($color["default"]["focus"]["bg"]) {
            echo "$" . $key . "-color--focus:#" . $color["default"]["focus"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["focus"]["font"]) {
            echo "$" . $key . "-font-color--focus:#" . $color["default"]["focus"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["default"]["focus"]["border"]) {
            echo "$" . $key . "-border-color--focus:#" . $color["default"]["focus"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Active - Base
        echo("//Button - Active - Base");
        echo "<br />";
        if ($color["active"]["base"]["bg"]) {
            echo "$" . $key . "-active-color:#" . $color["active"]["base"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["base"]["font"]) {
            echo "$" . $key . "-active-font-color:#" . $color["active"]["base"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["base"]["border"]) {
            echo "$" . $key . "-active-border-color:#" . $color["active"]["base"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Active - Active
        echo("//Button - Active - Active");
        echo "<br />";
        if ($color["active"]["active"]["bg"]) {
            echo "$" . $key . "-active-color--active:#" . $color["active"]["active"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["active"]["font"]) {
            echo "$" . $key . "-active-font-color--active:#" . $color["active"]["active"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["active"]["border"]) {
            echo "$" . $key . "-active-border-color--active:#" . $color["active"]["active"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Active - Hover
        echo("//Button - Active - Hover");
        echo "<br />";
        if ($color["active"]["hover"]["bg"]) {
            echo "$" . $key . "-active-color--hover:#" . $color["active"]["hover"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["hover"]["font"]) {
            echo "$" . $key . "-active-font-color--hover:#" . $color["active"]["hover"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["hover"]["border"]) {
            echo "$" . $key . "-active-border-color--hover:#" . $color["active"]["hover"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";

        //Active - Focus
        echo("//Button - Active - Focus");
        echo "<br />";
        if ($color["active"]["focus"]["bg"]) {
            echo "$" . $key . "-active-color--focus:#" . $color["active"]["focus"]["bg"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["focus"]["font"]) {
            echo "$" . $key . "-active-font-color--focus:#" . $color["active"]["focus"]["font"] . " !default;";
            echo "<br />";
        }
        if ($color["active"]["focus"]["border"]) {
            echo "$" . $key . "-active-border-color--focus:#" . $color["active"]["focus"]["border"] . " !default;";
            echo "<br />";
        }
        echo "<br />";
    }
