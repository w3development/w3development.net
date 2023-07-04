plugin.slick {
  item {
    templates {
			10 {
					# cat=Slick - Content Element - Templates //101; type=string; label=templates:Path to the templates (with an ending slash).
				templateRootPath = EXT:slick/Resources/Private/Fluid/Default/Slick/Templates/
					# cat=Slick - Content Element - Templates //102; type=string; label=partials:Path to the partials (with an ending slash).
				partialRootPath = EXT:slick/Resources/Private/Fluid/Default/Slick/Partials/
					# cat=Slick - Content Element - Templates //103; type=string; label=layouts:Path to the layouts (with an ending slash).
				layoutRootPath = EXT:slick/Resources/Private/Fluid/Default/Slick/Layouts/
			}
			20 {
					# cat=Slick - Content Element - Templates //101; type=string; label=templates extended:Path to the templates (with an ending slash).
				templateRootPath = 
					# cat=Slick - Content Element - Templates //102; type=string; label=partials extended:Path to the partials (with an ending slash).
				partialRootPath = 
					# cat=Slick - Content Element - Templates //103; type=string; label=layouts extended:Path to the layouts (with an ending slash).
				layoutRootPath = 
			}
			settings {
					# cat=Slick - Content Element - Templates - Settings/150/201; type=options[div,h1,h2,h3,h4,h5,h6,p,span,];  label= Header tag:HTML tag. I.e: h2. If you leave it empty, there won't be any wrap.
				headerTag =
			}
    }
  }
}