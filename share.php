<?php

class Paste {
    var $code;
    var $exec_ = 'echo "You are previewing a shared paste";';
    public function __construct($code) {
        $this->code = $code;
    }
    public function __wakeup() {
        eval($this->exec_);
    }
}


$paste = $_GET['paste'];
$paste = base64_decode($paste);
$paste_deserialized = unserialize($paste);
echo "<br><br>".$paste_deserialized->code;

?>