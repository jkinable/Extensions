<?php

class MathJaxExtension extends Minz_Extension {
    public function init() {
        header("Content-Security-Policy: script-src 'self' https://cdnjs.cloudflare.com/ajax/libs/mathjax/; script-src-elem 'self' https://cdnjs.cloudflare.com/ajax/libs/mathjax/");
        Minz_View::appendScript("https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-AMS_HTML",false,true,true);
    }
}
