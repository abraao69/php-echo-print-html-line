<?php
/**
 * Copyright (C) Vincy - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Vincy <vincy@phppot.com>
 */
namespace Phppot;

class Util
{

    public function echoSafe($data)
    {
        echo $this->makeSafe($data);
    }

    public function xssafe($data, $encoding = 'UTF-8')
    {
        return htmlspecialchars($data, ENT_QUOTES | ENT_HTML401, $encoding);
    }

    public function xecho($data)
    {
        echo $this->xssafe($data);
    }

    /**
     * Escape all HTML, JavaScript, and CSS.
     * Convert all applicable characters to HTML entities.
     *
     * @param string $input
     *            The input string. In general, string received via user input.
     * @param string $encoding
     *            Character encoding used.
     * @return string Converts all applicable characters to HTML entities
     */
    public function makeSafe($data, $encoding = 'UTF-8')
    {
        return htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, $encoding);
    }
}
