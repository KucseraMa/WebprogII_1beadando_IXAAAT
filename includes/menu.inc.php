<?php
Class Menu {
    public static $menu = array();
    
    public static function setMenu() {
        self::$menu = array();
        $connection = Database::getConnection();
        $stmt = $connection->query("select url, nev, jogosultsag from menu where jogosultsag like '".$_SESSION['userlevel']."'");
        while($menuitem = $stmt->fetch(PDO::FETCH_ASSOC)) {
            self::$menu[$menuitem['url']] = array($menuitem['nev'], $menuitem['jogosultsag']);
        }
    }

    public static function getMenu($sItems) {
        $submenu = "";
        
        $menu = "<ul class='navbar-nav'>";
        foreach(self::$menu as $menuindex => $menuitem)       
        {
            //echo $menuitem[1];
            if($menuitem[0] != "")
            { $menu.= "<li class='nav-item'><a class='nav-link'  
                href='".SITE_ROOT.$menuindex."' ".($menuindex==$sItems[0]? "class='selected'":"").">".$menuitem[0]."</a></li>"; }
            else if($menuitem[1] == $sItems[0])
            { $submenu .= "<li class= 'nav-item'><a class= 'nav-link' href='".SITE_ROOT.$menuindex."' ".($menuindex==$sItems[1]? "class='selected'":"").">".$menuitem[0]."</a></li>"; }

        }
        $menu.="</ul>";
        
        if($submenu != "")
            $submenu = "<ul class='navbar-nav'>".$submenu."</ul>";
        
        return $menu.$submenu;
    }
}

Menu::setMenu();
?>
