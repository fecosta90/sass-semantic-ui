<?php

    <?php

    $name = "default";

	$colors = ["default" => ["base"   => ["bg"   => "E0E1E2",
                                          "font" => "rgba(0, 0, 0, 0.6)"],
                             "active" => ["bg"   => "BABBBC",
                                          "font" => "rgba(0, 0, 0, 0.9)"],
                             "hover"  => ["bg"   => "CACBCD",
                                          "font" => "rgba(0, 0, 0, 0.8)"],
                             "focus"  => ["bg"   => "CACBCD",
                                          "font" => "rgba(0, 0, 0, 0.8)"]],
               "active"  => ["base"   => ["bg"   => "C0C1C2",
                                          "font" => "rgba(0, 0, 0, 0.95)"],
                             "active" => ["bg"   => "C0C1C2",
                                          "font" => ""],
                             "hover"  => ["bg"   => "C0C1C2",
                                          "font" => "rgba(0, 0, 0, 0.95)"],
                             "focus"  => ["bg"   => "BABBBC",
                                          "font" => "rgba(0, 0, 0, 0.9)"]]];

    $color = $colors;

    if ($color["default"]["base"]["bg"]) {
        echo "$" . $name . "-color:#" . $color["default"]["base"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["base"]["font"]) {
        echo "$" . $name . "-font-color:#" . $color["default"]["base"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["active"]["bg"]) {
        echo "$" . $name . "-color--active:#" . $color["default"]["active"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["active"]["font"]) {
        echo "$" . $name . "-font-color--active:#" . $color["default"]["active"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["hover"]["bg"]) {
        echo "$" . $name . "-color--hover:#" . $color["default"]["hover"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["hover"]["font"]) {
        echo "$" . $name . "-font-color--hover:#" . $color["default"]["hover"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["focus"]["bg"]) {
        echo "$" . $name . "-color--focus:#" . $color["default"]["focus"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["default"]["focus"]["font"]) {
        echo "$" . $name . "-font-color--focus:#" . $color["default"]["focus"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["base"]["bg"]) {
        echo "$" . $name . "-active-color:#" . $color["active"]["base"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["base"]["font"]) {
        echo "$" . $name . "-active-font-color:#" . $color["active"]["base"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["active"]["bg"]) {
        echo "$" . $name . "-active-color--active:#" . $color["active"]["active"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["active"]["font"]) {
        echo "$" . $name . "-active-font-color--active:#" . $color["active"]["active"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["hover"]["bg"]) {
        echo "$" . $name . "-active-color--hover:#" . $color["active"]["hover"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["hover"]["font"]) {
        echo "$" . $name . "-active-font-color--hover:#" . $color["active"]["hover"]["font"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["focus"]["bg"]) {
        echo "$" . $name . "-active-color--focus:#" . $color["active"]["focus"]["bg"] . " !default;";
        echo "<br />";
    }
    if ($color["active"]["focus"]["font"]) {
        echo "$" . $name . "-active-font-color--focus:#" . $color["active"]["focus"]["font"] . " !default;";
        echo "<br />";
    }