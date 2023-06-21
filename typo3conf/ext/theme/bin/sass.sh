#!/usr/bin/env bash

PRIVATE=public/typo3conf/ext/theme/Resources/Private
PUBLIC=public/typo3conf/ext/theme/Resources/Public

THEME=${PRIVATE}/Stylesheets/Sass/porto
OUTPUT=${PUBLIC}/Css


sass ${THEME}/main.scss:${OUTPUT}/style.min.css --style compressed
sass ${THEME}/vendor.scss:${OUTPUT}/vendor.min.css --style compressed
