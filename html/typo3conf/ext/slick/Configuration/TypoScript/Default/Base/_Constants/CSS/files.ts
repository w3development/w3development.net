plugin.slick {
	css {
		files {
				# cat=Slick - CSS -  FILES//100; type=string; label=default:default CSS file
			default		= EXT:slick/Resources/Public/CSS/default.min.css
				# cat=Slick - CSS -  FILES//101; type=string; label=CSS base:slick library CSS file
			library   = EXT:slick/Resources/Public/JavaScript/slick-1.9.0/slick/slick.min.css
				# cat=Slick - CSS -  FILES//102; type=string; label=CSS default theme:slick default theme CSS file
			theme     = EXT:slick/Resources/Public/JavaScript/slick-1.9.0/slick/slick-theme.min.css
				# cat=Slick - CSS -  FILES//103; type=boolean; label=Include CSS default theme:Recommended:Use the slick css default theme
			theme.if  = 1
		}
	}
}