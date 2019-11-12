<?php
class IntelligentBuilding extends Building  implements Iintelligence {
        function isAutoLocked() {
            $message = "オートロック完備しています。";
            return $message;
        }
        function accessWifi(){
                $message = "無線LAN常時接続できます。";
                return $message;
        }
}

?>