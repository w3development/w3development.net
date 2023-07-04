mod.wizards.newContentElement.wizardItems.slick {
	header = Slick
	elements {
		content {
			iconIdentifier = contains-slickdefault
			title = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header
			description = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.description
			tt_content_defValues {
				CType = slickcontent
				imagecols = 1
				imageorient = 0
				header = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header
			}
		}
		filecollection {
			iconIdentifier = contains-slickdefault
			title = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.header
			description = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.description
			tt_content_defValues {
				CType = slickfilecollection
				imagecols = 1
				imageorient = 0
				header = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.header
			}
		}
		image {
			iconIdentifier = contains-slickdefault
			title = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header
			description = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.description
			tt_content_defValues {
				CType = slickimage
				imagecols = 1
				imageorient = 0
				header = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header
			}
		}
		item {
			iconIdentifier = contains-slickdefault
			title = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header
			description = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.description
			tt_content_defValues {
				CType = slickitem
				imagecols = 1
				imageorient = 0
				header = LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header
			}
		}
	}
	show := addToList(*)
}
