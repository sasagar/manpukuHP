<?php
class MnpkPwaSupport {
    function __construct()
    {
        add_filter('web_app_manifest', array($this, 'mnpk_pwa_manifest'));
    }

    function mnpk_pwa_manifest ( $manifest ) {
        $manifest['display'] = 'standalone';
        return $manifest;
    }
}

new MnpkPwaSupport();