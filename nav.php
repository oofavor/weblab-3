<nav>
    <ul>
        <?php
        $current = "";
        foreach ($links as $key => $value) {
            $is_current_page = $_SERVER['REQUEST_URI'] == $key ? "current" : "";
            $current .= "<li><a href='{$key}' class='{$is_current_page}'>{$value}</a></li>";
        }
        echo $current;
        ?>
    </ul>
</nav>