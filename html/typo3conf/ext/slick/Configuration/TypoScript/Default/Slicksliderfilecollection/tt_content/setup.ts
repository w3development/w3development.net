tt_content.slickfilecollection >

tt_content.slickfilecollection =< lib.contentElement
tt_content.slickfilecollection {
	templateName = Slickfilecollection
	dataProcessing {
		10 < tt_content.uploads.dataProcessing.10
		20 = Netzmacher\Slick\DataProcessing\FlexFormProcessor
	}
	variables {
		shortcuts = RECORDS
		shortcuts {
			source.field = records
			tables = tt_content
		}
	}
}