page {
  includeCSS {
    slickLibrary  = {$plugin.slick.css.files.library}
    slickTheme    = {$plugin.slick.css.files.theme}
    slickTheme {
        // constant editor
      if =
      if {
        isTrue = {$plugin.slick.css.files.theme.if}
      }
    }
    slickDefault    = {$plugin.slick.css.files.default}
  }
}