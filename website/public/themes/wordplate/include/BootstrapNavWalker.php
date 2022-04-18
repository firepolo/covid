<?php
class BootstrapNavWalker extends Walker_Nav_menu
{
	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$output .= '<li class="nav-item"><a class="nav-link '.($item->current ? 'active' : '').'" href="'.$item->url.'">'.$item->title.'</a>';
	}
}