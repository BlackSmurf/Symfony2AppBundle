<?php

namespace Smurf\Symfony2AppBundle\Helper;

use Symfony\Component\Templating\Helper\Helper;

class WidgetsHelper extends Helper {

    private static $_id = 0;
    protected $_content = "";

    const NORMAL = "default";
    const PRIMARY = "primary";
    const SUCCESS = "success";
    const INFO = "info";
    const WARNING = "warning";
    const DANGER = "danger";
    const LARGE = "lg";
    const SMALL = "sm";
    const EXTRA_SMALL = "xs";
    const TABS_NORMAL = "tabs";
    const TABS_PILLS = "pills";

    private static $BUTTON_LABEL = "btn";
    private static $PANEL_LABEL = "panel";
    private static $LABEL_LABEL = "label";
    private static $ALERT_LABEL = "alert";

    const PANEL_DEFAULT = "panel-default";
    const BUTTON_DEFAULT = "btn-default";
    const BUTTON_PRIMARY = "btn-primary";
    const BUTTON_SUCCESS = "btn-success";
    const BUTTON_INFO = "btn-info";
    const BUTTON_WARNING = "btn-warning";
    const BUTTON_DANGER = "btn-danger";
    const BUTTON_LARGE = "btn-lg";
    const BUTTON_SMALL = "btn-sm";
    const BUTTON_XS = "btn-xs";
    const ALERT_SUCCESS = "alert-success";
    const ALERT_INFO = "alert-info";
    const ALERT_WARNING = "alert-warning";
    const ALERT_DANGER = "alert-danger";
    const LABEL_DEFAULT = "label-default";
    const LABEL_PRIMARY = "label-primary";
    const LABEL_SUCCESS = "label-success";
    const LABEL_INFO = "label-info";
    const LABEL_WARNING = "label-warning";
    const LABEL_DANGER = "label-danger";
    const ICON_ASTERISK = "glyphicon-asterisk";
    const ICON_PLUS = "glyphicon-plus";
    const ICON_EURO = "glyphicon-euro";
    const ICON_MINUS = "glyphicon-minus";
    const ICON_CLOUD = "glyphicon-cloud";
    const ICON_ENVELOPE = "glyphicon-envelope";
    const ICON_PENCIL = "glyphicon-pencil";
    const ICON_GLASS = "glyphicon-glass";
    const ICON_MUSIC = "glyphicon-music";
    const ICON_SEARCH = "glyphicon-search";
    const ICON_HEART = "glyphicon-heart";
    const ICON_STAR = "glyphicon-star";
    const ICON_STAR_EMPTY = "glyphicon-star-empty";
    const ICON_USER = "glyphicon-user";
    const ICON_FILM = "glyphicon-film";
    const ICON_TH_LARGE = "glyphicon-th-large";
    const ICON_TH = "glyphicon-th";
    const ICON_TH_LIST = "glyphicon-th-list";
    const ICON_OK = "glyphicon-ok";
    const ICON_REMOVE = "glyphicon-remove";
    const ICON_ZOOM_IN = "glyphicon-zoom-in";
    const ICON_ZOOM_OUT = "glyphicon-zoom-out";
    const ICON_OFF = "glyphicon-off";
    const ICON_SIGNAL = "glyphicon-signal";
    const ICON_COG = "glyphicon-cog";
    const ICON_TRASH = "glyphicon-trash";
    const ICON_HOME = "glyphicon-home";
    const ICON_FILE = "glyphicon-file";
    const ICON_TIME = "glyphicon-time";
    const ICON_ROAD = "glyphicon-road";
    const ICON_DOWNLOAD_ALT = "glyphicon-download-alt";
    const ICON_DOWNLOAD = "glyphicon-download";
    const ICON_UPLOAD = "glyphicon-upload";
    const ICON_INBOX = "glyphicon-inbox";
    const ICON_PLAY_CIRCLE = "glyphicon-play-circle";
    const ICON_REPEAT = "glyphicon-repeat";
    const ICON_REFRESH = "glyphicon-refresh";
    const ICON_LIST_ALT = "glyphicon-list-alt";
    const ICON_LOCK = "glyphicon-lock";
    const ICON_FLAG = "glyphicon-flag";
    const ICON_HEADPHONES = "glyphicon-headphones";
    const ICON_VOLUME_OFF = "glyphicon-volume-off";
    const ICON_VOLUME_DOWN = "glyphicon-volume-down";
    const ICON_VOLUME_UP = "glyphicon-volume-up";
    const ICON_QRCODE = "glyphicon-qrcode";
    const ICON_BARCODE = "glyphicon-barcode";
    const ICON_TAG = "glyphicon-tag";
    const ICON_TAGS = "glyphicon-tags";
    const ICON_BOOK = "glyphicon-book";
    const ICON_BOOKMARK = "glyphicon-bookmark";
    const ICON_PRINT = "glyphicon-print";
    const ICON_CAMERA = "glyphicon-camera";
    const ICON_FONT = "glyphicon-font";
    const ICON_BOLD = "glyphicon-bold";
    const ICON_ITALIC = "glyphicon-italic";
    const ICON_TEXT_HEIGHT = "glyphicon-text-height";
    const ICON_TEXT_WIDTH = "glyphicon-text-width";
    const ICON_ALIGN_LEFT = "glyphicon-align-left";
    const ICON_ALIGN_CENTER = "glyphicon-align-center";
    const ICON_ALIGN_RIGHT = "glyphicon-align-right";
    const ICON_ALIGN_JUSTIFY = "glyphicon-align-justify";
    const ICON_LIST = "glyphicon-list";
    const ICON_INDENT_LEFT = "glyphicon-indent-left";
    const ICON_INDENT_RIGHT = "glyphicon-indent-right";
    const ICON_FACETIME_VIDEO = "glyphicon-facetime-video";
    const ICON_PICTURE = "glyphicon-picture";
    const ICON_MAP_MARKER = "glyphicon-map-marker";
    const ICON_ADJUST = "glyphicon-adjust";
    const ICON_TINT = "glyphicon-tint";
    const ICON_EDIT = "glyphicon-edit";
    const ICON_SHARE = "glyphicon-share";
    const ICON_CHECK = "glyphicon-check";
    const ICON_MOVE = "glyphicon-move";
    const ICON_STEP_BACKWARD = "glyphicon-step-backward";
    const ICON_FAST_BACKWARD = "glyphicon-fast-backward";
    const ICON_BACKWARD = "glyphicon-backward";
    const ICON_PLAY = "glyphicon-play";
    const ICON_PAUSE = "glyphicon-pause";
    const ICON_STOP = "glyphicon-stop";
    const ICON_FORWARD = "glyphicon-forward";
    const ICON_FAST_FORWARD = "glyphicon-fast-forward";
    const ICON_STEP_FORWARD = "glyphicon-step-forward";
    const ICON_EJECT = "glyphicon-eject";
    const ICON_CHEVRON_LEFT = "glyphicon-chevron-left";
    const ICON_CHEVRON_RIGHT = "glyphicon-chevron-right";
    const ICON_PLUS_SIGN = "glyphicon-plus-sign";
    const ICON_MINUS_SIGN = "glyphicon-minus-sign";
    const ICON_REMOVE_SIGN = "glyphicon-remove-sign";
    const ICON_OK_SIGN = "glyphicon-ok-sign";
    const ICON_QUESTION_SIGN = "glyphicon-question-sign";
    const ICON_INFO_SIGN = "glyphicon-info-sign";
    const ICON_SCREENSHOT = "glyphicon-screenshot";
    const ICON_REMOVE_CIRCLE = "glyphicon-remove-circle";
    const ICON_OK_CIRCLE = "glyphicon-ok-circle";
    const ICON_BAN_CIRCLE = "glyphicon-ban-circle";
    const ICON_ARROW_LEFT = "glyphicon-arrow-left";
    const ICON_ARROW_RIGHT = "glyphicon-arrow-right";
    const ICON_ARROW_UP = "glyphicon-arrow-up";
    const ICON_ARROW_DOWN = "glyphicon-arrow-down";
    const ICON_SHARE_ALT = "glyphicon-share-alt";
    const ICON_RESIZE_FULL = "glyphicon-resize-full";
    const ICON_RESIZE_SMALL = "glyphicon-resize-small";
    const ICON_EXCLAMATION_SIGN = "glyphicon-exclamation-sign";
    const ICON_GIFT = "glyphicon-gift";
    const ICON_LEAF = "glyphicon-leaf";
    const ICON_FIRE = "glyphicon-fire";
    const ICON_EYE_OPEN = "glyphicon-eye-open";
    const ICON_EYE_CLOSE = "glyphicon-eye-close";
    const ICON_WARNING_SIGN = "glyphicon-warning-sign";
    const ICON_PLANE = "glyphicon-plane";
    const ICON_CALENDAR = "glyphicon-calendar";
    const ICON_RANDOM = "glyphicon-random";
    const ICON_COMMENT = "glyphicon-comment";
    const ICON_MAGNET = "glyphicon-magnet";
    const ICON_CHEVRON_UP = "glyphicon-chevron-up";
    const ICON_CHEVRON_DOWN = "glyphicon-chevron-down";
    const ICON_RETWEET = "glyphicon-retweet";
    const ICON_SHOPPING_CART = "glyphicon-shopping-cart";
    const ICON_FOLDER_CLOSE = "glyphicon-folder-close";
    const ICON_FOLDER_OPEN = "glyphicon-folder-open";
    const ICON_RESIZE_VERTICAL = "glyphicon-resize-vertical";
    const ICON_RESIZE_HORIZONTAL = "glyphicon-resize-horizontal";
    const ICON_HDD = "glyphicon-hdd";
    const ICON_BULLHORN = "glyphicon-bullhorn";
    const ICON_BELL = "glyphicon-bell";
    const ICON_CERTIFICATE = "glyphicon-certificate";
    const ICON_THUMBS_UP = "glyphicon-thumbs-up";
    const ICON_THUMBS_DOWN = "glyphicon-thumbs-down";
    const ICON_HAND_RIGHT = "glyphicon-hand-right";
    const ICON_HAND_LEFT = "glyphicon-hand-left";
    const ICON_HAND_UP = "glyphicon-hand-up";
    const ICON_HAND_DOWN = "glyphicon-hand-down";
    const ICON_CIRCLE_ARROW_RIGHT = "glyphicon-circle-arrow-right";
    const ICON_CIRCLE_ARROW_LEFT = "glyphicon-circle-arrow-left";
    const ICON_CIRCLE_ARROW_UP = "glyphicon-circle-arrow-up";
    const ICON_CIRCLE_ARROW_DOWN = "glyphicon-circle-arrow-down";
    const ICON_GLOBE = "glyphicon-globe";
    const ICON_WRENCH = "glyphicon-wrench";
    const ICON_TASKS = "glyphicon-tasks";
    const ICON_FILTER = "glyphicon-filter";
    const ICON_BRIEFCASE = "glyphicon-briefcase";
    const ICON_FULLSCREEN = "glyphicon-fullscreen";
    const ICON_DASHBOARD = "glyphicon-dashboard";
    const ICON_PAPERCLIP = "glyphicon-paperclip";
    const ICON_HEART_EMPTY = "glyphicon-heart-empty";
    const ICON_LINK = "glyphicon-link";
    const ICON_PHONE = "glyphicon-phone";
    const ICON_PUSHPIN = "glyphicon-pushpin";
    const ICON_USD = "glyphicon-usd";
    const ICON_GBP = "glyphicon-gbp";
    const ICON_SORT = "glyphicon-sort";
    const ICON_SORT_BY_ALPHABET = "glyphicon-sort-by-alphabet";
    const ICON_SORT_BY_ALPHABET_ALT = "glyphicon-sort-by-alphabet-alt";
    const ICON_SORT_BY_ORDER = "glyphicon-sort-by-order";
    const ICON_SORT_BY_ORDER_ALT = "glyphicon-sort-by-order-alt";
    const ICON_SORT_BY_ATTRIBUTES = "glyphicon-sort-by-attributes";
    const ICON_SORT_BY_ATTRIBUTES_ALT = "glyphicon-sort-by-attributes-alt";
    const ICON_UNCHECKED = "glyphicon-unchecked";
    const ICON_EXPAND = "glyphicon-expand";
    const ICON_COLLAPSE_DOWN = "glyphicon-collapse-down";
    const ICON_COLLAPSE_UP = "glyphicon-collapse-up";
    const ICON_LOG_IN = "glyphicon-log-in";
    const ICON_FLASH = "glyphicon-flash";
    const ICON_LOG_OUT = "glyphicon-log-out";
    const ICON_NEW_WINDOW = "glyphicon-new-window";
    const ICON_RECORD = "glyphicon-record";
    const ICON_SAVE = "glyphicon-save";
    const ICON_OPEN = "glyphicon-open";
    const ICON_SAVED = "glyphicon-saved";
    const ICON_IMPORT = "glyphicon-import";
    const ICON_EXPORT = "glyphicon-export";
    const ICON_SEND = "glyphicon-send";
    const ICON_FLOPPY_DISK = "glyphicon-floppy-disk";
    const ICON_FLOPPY_SAVED = "glyphicon-floppy-saved";
    const ICON_FLOPPY_REMOVE = "glyphicon-floppy-remove";
    const ICON_FLOPPY_SAVE = "glyphicon-floppy-save";
    const ICON_FLOPPY_OPEN = "glyphicon-floppy-open";
    const ICON_CREDIT_CARD = "glyphicon-credit-card";
    const ICON_TRANSFER = "glyphicon-transfer";
    const ICON_CUTLERY = "glyphicon-cutlery";
    const ICON_HEADER = "glyphicon-header";
    const ICON_COMPRESSED = "glyphicon-compressed";
    const ICON_EARPHONE = "glyphicon-earphone";
    const ICON_PHONE_ALT = "glyphicon-phone-alt";
    const ICON_TOWER = "glyphicon-tower";
    const ICON_STATS = "glyphicon-stats";
    const ICON_SD_VIDEO = "glyphicon-sd-video";
    const ICON_HD_VIDEO = "glyphicon-hd-video";
    const ICON_SUBTITLES = "glyphicon-subtitles";
    const ICON_SOUND_STEREO = "glyphicon-sound-stereo";
    const ICON_SOUND_DOLBY = "glyphicon-sound-dolby";
    const ICON_SOUND_5_1 = "glyphicon-sound-5-1";
    const ICON_SOUND_6_1 = "glyphicon-sound-6-1";
    const ICON_SOUND_7_1 = "glyphicon-sound-7-1";
    const ICON_COPYRIGHT_MARK = "glyphicon-copyright-mark";
    const ICON_REGISTRATION_MARK = "glyphicon-registration-mark";
    const ICON_CLOUD_DOWNLOAD = "glyphicon-cloud-download";
    const ICON_CLOUD_UPLOAD = "glyphicon-cloud-upload";
    const ICON_TREE_CONIFER = "glyphicon-tree-conifer";
    const ICON_TREE_DECIDUOUS = "glyphicon-tree-deciduous";

    public static function getId() {
        return self::$_id++;
    }

    public static function getMenu() {

    }

    /* PANEL */

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     * @return type
     */
    public static function getStartPanel($title, $options = array()) {
        $defaultOptions = array(
            'type' => self::NORMAL,
        );
        $options = array_merge($defaultOptions, $options);

        return "<div class='panel " . self::$PANEL_LABEL . "-" . $options["type"] . "'><div class='panel-heading'><h3 class='panel-title'>$title</h3></div><div class=\"panel-body\">";
    }

    /**
     *
     * @return string
     */
    public static function getEndPanel() {
        return "</div></div>";
    }

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     */
    public static function writeStartPanel($title, $options = array()) {
        echo self::getStartPanel($title, $options);
    }

    /**
     *
     */
    public static function writeEndPanel() {
        echo self::getEndPanel();
    }

    /* BUTTON */

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'link' => ...
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     *              string 'size' => LARGE | SMALL | EXTRA_SMALL
     *              string 'icon' => ICON_...
     *              bool 'state' => ...
     * @return string
     */
    public static function getButton($title = "MyButton", $options = array()) {
        $defaultOptions = array(
            'link' => '#',
            'type' => self::NORMAL,
            'size' => '',
            'icon' => '',
            'state' => true,
        );
        $options = array_merge($defaultOptions, $options);

        $html = "<p id='btBtn-" . self::getId() . "'><a class='btn " . self::$BUTTON_LABEL . "-" . $options['type'];
        if ($options['size']) {
            $html .= " " . self::$BUTTON_LABEL . "-" . $options['size'];
        }
        $html .= "' role='button' href='" . $options['link'] . "'>";
        if (!empty($options['icon'])) {
            $html .= "<span class='glyphicon " . $options['icon'] . "'></span>&nbsp;&nbsp;";
        }

        $html .= $title . "</a></p>";

        return $html;
    }

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'link' => ...
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     *              string 'size' => LARGE | SMALL | EXTRA_SMALL
     *              string 'icon' => ICON_...
     *              bool 'state' => ...
     */
    public static function writeButton($title = "MyButton", $options = array()) {
        echo self::getButton($title, $options);
    }

    /**
     *
     * @param array $tabs
     *              array(array(
     *                  string 'id' => ...
     *                  string 'title' => ...
     *                  optional integer 'badge' => ...
     *                  ), array( ... )
     * @param array $options
     *              string 'type' => TABS_NORMAL | TABS_PILLS
     * @return string
     */
    public static function getStartTabs($tabs, $options = array()) {
        $defaultOptions = array(
            "type" => self::TABS_NORMAL,
        );
        $options = array_merge($defaultOptions, $options);

        $html = "<ul class='nav nav-" . $options["type"] . "' role='tablist' id='btTab-" . self::getId() . "'>";
        foreach ($tabs as $key => $tab) {
            $active_class = "";
            if ($key == 0) {
                $active_class = " class='active'";
            }

            $html .= "<li" . $active_class . "><a href='#" . $tab["id"] . "' role='tab' data-toggle='tab'>" . $tab["title"];

            if (array_key_exists("badge", $tab)) {
                $html .= " " . self::getBadge($tab["badge"]);
            }

            $html .= "</a></li>";
        }
        $html .= "</ul><div class='tab-content'>";
        return $html;
    }

    /**
     *
     * @return string
     */
    public static function getEndTabs() {
        // add js content...
//        $view['slots']->start('js_ready');
//        echo "$('ul.nav-tabs a').tab('show');";
//        $view['slots']->stop();
        return "</div>";
    }

    /**
     *
     * @param array $tabs
     *              array(array(
     *                  string 'id' => ...
     *                  string 'title' => ...
     *                  optional integer 'badge' => ...
     *                  ), array( ... )
     * @param array $options
     *              string 'type' => TABS_NORMAL | TABS_PILLS
     */
    public static function writeStartTabs($tabs, $options = array()) {
        echo self::getStartTabs($tabs, $options);
    }

    /**
     *
     */
    public static function writeEndTabs() {
        echo self::getEndTabs();
    }

    /**
     *
     * @param string $id
     * @param bool $active
     * @return string
     */
    public static function getStartTabContent($id, $active = false) {
        $active_class = "";

        if ($active) {
            $active_class = " active";
        }

        return "<div class='tab-pane fade in" . $active_class . "' id='$id'>";
    }

    /**
     *
     * @return string
     */
    public static function getEndTabContent() {
        return "</div>";
    }

    /**
     *
     * @param string $id
     * @param bool $active
     */
    public static function writeStartTabContent($id, $active = false) {
        echo self::getStartTabContent($id, $active);
    }

    /**
     *
     */
    public static function writeEndTabContent() {
        echo self::getEndTabContent();
    }

    /**
     *
     * @param string $value
     * @return string
     */
    public static function getBadge($value) {
        return "<span class='badge'>$value</span>";
    }

    /**
     *
     * @param string $value
     */
    public static function writeBadge($value) {
        echo self::getBadge($value);
    }

    /**
     *
     * @param string $title
     * @param string $options
     * @return string
     */
    public static function getTextInput($placeholder = "", $title = "", $options = array()) {
        $defaultOptions = array(
            "size" => '',
        );
        $options = array_merge($defaultOptions, $options);

        $html = "<div class='input-group'>";

        if (!empty($title)) {
            $html .= "<span class='input-group-addon'>$title</span>";
        }

        $html .= "<input type='text' class='form-control' placeholder=\"" . str_replace("\"", "\\\"", $placeholder) . "\"";

        if (!empty($options["size"])) {
            $html .= " size=\"" . $options["size"] . "\"";
        }

        $html .= "></div>";

        return $html;
    }

    /**
     *
     * @param string $title
     */
    public static function writeTextInput($placeholder = "", $title = "", $options = array()) {
        echo self::getTextInput($placeholder, $title, $options);
    }

    /**
     *
     * @param string $message
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     *              bool 'closeable' => ...
     * @return string
     */
    public static function getAlert($message, $options = array()) {
        $defaultOptions = array(
            'type' => self::INFO,
            'closeable' => false,
        );
        $options = array_merge($defaultOptions, $options);

        $html = "<div class='alert " . self::$ALERT_LABEL . "-" . $options['type'];
        if ($options['closeable']) {
            $html .= " alert-dismissable";
        }

        $html .= "'>";

        if ($options['closeable']) {
            $html .= "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
        }

        if (preg_match('|<[aA] +.*href = ".*".*>(.*)</[aA]>|', $message)) {

            $message_final = preg_replace('|<[aA]( +)([a-zA-Z0-9\.="\'/#]*)( +)class="|', '<a${1}${2}${3}class = "alert-link ', $message);

            if ($message_final === $message) {
                $message_final = preg_replace('|<[aA]( +)([a-zA-Z0-9\.="\'/#]+)>|', '<a${1}${2} class="alert-link">', $message);
            }

            $message = $message_final;
        }

        $html .= $message . "</div>";

        return $html;
    }

    /**
     *
     * @param string $message
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     *              bool 'closeable' => ...
     * @return string
     */
    public static function writeAlert($message, $options = array()) {
        echo self::getAlert($message, $options);
    }

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     * @return string
     */
    public static function getLabel($title, $options = array()) {
        $defaultOptions = array(
            "type" => self::NORMAL,
            "size" => '',
        );
        $options = array_merge($defaultOptions, $options);

        return "<span class='label " . self::$LABEL_LABEL . "-" . $options["type"] . "'>$title</span>";
    }

    /**
     *
     * @param string $title
     * @param array $options
     *              string 'type' => NORMAL | INFO | SUCCESS | WARNING | DANGER
     * @return string
     */
    public static function writeLabel($title, $options = array()) {
        echo self::getLabel($title, $options);
    }

    /*

      public function getProgressbar() {
      return "<div class='progress progress-striped active'><div class='progress-bar' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 45%'>45%</div></div>";
      }
     */

    public function getName() {
        return "WidgetsHelper";
    }

}
