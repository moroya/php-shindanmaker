<?php

namespace Moroya\Shindanmaker;

class Shindan
{
    public function __construct($shindanId, $userName)
    {
        $this->shindanId = $shindanId;
        $this->userName = $userName;
    }

    public function getMessage()
    {
        $param = array(
            'u' => $this->userName,
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($param));
        curl_setopt($curl, CURLOPT_URL, 'http://shindanmaker.com/'.$this->shindanId);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($curl);
        curl_close($curl);

        if (isset($html) && preg_match('@<div class="result">\s+<div.*?</div>\s+</div>@s', $html, $matches) === 1) {
            $message = trim(strip_tags($matches[0]));
        }

        return $message;
    }

}
