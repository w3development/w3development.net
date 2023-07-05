page {
      // For proper comment only
  jsFooterInline {		
	}
		// slick: 60857, 60858, 60859
  jsFooterInline =
  jsFooterInline {
      // slick: #slickgallery1
    60900 = COA
    60900 {
        // For development only!
      DEV9 = TEXT
      DEV9 {
				value = XXX
				wrap  = alert('|');
			}
				// Get uid sof content elements with CTYPE: slickcontent, slickfilecollection, slickimage or slickitem. Respects the root line.
				// #i0059, 190912, dwildt, ~
			10 = TEXT
			10 {
					// #i0061, 191031, dhaupt: +typeof
				value (
					var typeOfSlickUids = typeof slickUids;
					if( typeOfSlickUids != 'undefined' ) {
						if(Array.isArray(slickUids)){
							$(document).ready(function () {
								for (var i = 0; i < slickUids.length; i++) {
									var boolSlickRandomizeX = eval("boolSlickRandomize" + slickUids[i]);
									//alert(boolSlickRandomizeX);
									if( boolSlickRandomizeX == true ) {
										$('#slickid-' + slickUids[i]).randomize();
									} 
								}
							});
						}
					}
					$(document).ready(function () {
						if( (typeof obj === "object") && (obj !== null) ) {
							var sortedKeys = Object.keys(obj).sort();
							//alert( sortedKeys[0] );
							if(Array.isArray(sortedKeys)){
								for (var i = 0; i < sortedKeys.length; i++) {
									obj[sortedKeys[i]]();
								}
							}
						}
					});
					
)
			}
		}
	}
}