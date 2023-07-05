	// empty statement for proper comments only
lib.contentElement {
}
	// slick
lib.contentElement = FLUIDTEMPLATE
lib.contentElement {
		// slick: 1686, 1687, 1688
	templateRootPaths =
	templateRootPaths {
		1686 = {$plugin.slick.fluid.templates.10.templateRootPath}
		1687 = {$plugin.slick.fluid.templates.20.templateRootPath}
		1688 = {$plugin.slick.fluid.templates.99.templateRootPath}
	}
		// slick: 1686, 1687, 1688
	partialRootPaths =
	partialRootPaths {
		1686 = {$plugin.slick.fluid.templates.10.partialRootPath}
		1687 = {$plugin.slick.fluid.templates.20.partialRootPath}
# :TODO: #i0051
#		1687 =
#		1687 {
#				// if xblog_pi11 == field:list_type
#			cObject = TEXT
#			cObject {
#					// value = xblog_pi11, equals.field = list_type
#				if =
#				if {
#					value = xblog_pi11
#						// field = list_type
#					equals =
#					equals.field = list_type
#				}
#				value = {$plugin.slick.fluid.templates.20.partialRootPath}
#			}
#		}
		1688 = {$plugin.slick.fluid.templates.99.partialRootPath}
	}
		// slick: 1686, 1687, 1688
	layoutRootPaths =
	layoutRootPaths {
		1686 = {$plugin.slick.fluid.templates.10.layoutRootPath}
		1687 = {$plugin.slick.fluid.templates.20.layoutRootPath}
		1688 = {$plugin.slick.fluid.templates.99.layoutRootPath}
	}
# #i0053
# #variables.test8 and test9 are running
# #tt_content.slickcontent.variables.test10 and text10 aren't running.
# #test10: Netzmacher\Xblog\UserFunc\SessionUserfunc->SetXblogVar is checked with var_dump successfully
#	variables {
#		test8 = USER
#		test8 {
#			userFunc = Netzmacher\Xblog\UserFunc\SessionUserfunc->SetXblogVar
#			uid = TEXT
#			uid {
#				value = 1234
#			}
#			param = TEXT
#			param {
#				value = test8
#			}
#			value = TEXT
#			value {
#				value = dirk8
#			}
#			dontClearCache = 0
#		}
#		test9 = TEXT
#		test9 {
#			data = session: tx_xblog|1234|test8
#		}
#		test10 = TEXT
#		test10 {
#			data = session: tx_xblog|1234|test10
#		}
#	}
}

