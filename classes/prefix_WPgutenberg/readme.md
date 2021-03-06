**Version 2.7.11** (06.07.2021)

Custom class "WPgutenberg" to select allowed guttenberg blocks and add style options

## CONFIGURATION OPTIONS
* WPgutenberg_active: disable gutenberg
* WPgutenberg_css: disable gutenberg styling
* $WPgutenberg_Stylesfile: Add the file with the additional gutenberg css classes
* $WPgutenberg_DefaultPatterns: Remove default patterns
* $WPgutenberg_fontsizeScaler: Activate fontsize scaler
* $WPgutenberg_AllowedBlocks: List allowed gutenberg blocks
* $WPgutenberg_CustomAllowedBlocks: List custom allowed gutenberg blocks
* $WPgutenberg_ColorPalette: Custom theme color palette
* $WPgutenberg_FontSizes: Custom theme font sizes
* $WPgutenberg_ColorPalette_CP: Disable custom color picker

## CONFIGURATION FILE
```
"gutenberg": {
  "active": true,
  "css": true,
  "Stylesfile": 0,
  "Patterns": 1,
  "fontsizeScaler": 1,
  "ColorPalette_CP": 1,
  "AllowedBlocks": {
    "0": "core/paragraph",
    "1": "core/image",
    "2": "core/heading",
    "3": "core/list"
  },
  "CustomAllowedBlocks": {
    "0": "acf/customblock"
  },
  "ColorPalette": {
    "0": {
      "key": "Color name",
      "value": "Color hexa"
    }
  },
  "FontSizes": {
    "0": {
      "key": "Size name",
      "value": "size number without px"
    }
  }
}
```


## USAGE

### LIST OF ALL GUTENBERG CORE BLOCKS
core/paragraph
core/image
core/heading
core/gallery
core/list
core/quote
core/audio
core/file
core/video
core/table
core/verse
core/code
core/freeform
core/html
core/preformatted
core/pullquote
core/button
core/columns,
core/media-text
core/more
core/nextpage
core/separator
core/spacer
core/shortcode
core/archives
core/categories
core/latest-comments
core/latest-posts
core/calendar
core/rss
core/search
core/tag-cloud
core/embed
core-embed/twitter
core-embed/youtube
core-embed/facebook
core-embed/instagram
core-embed/wordpress
core-embed/soundcloud
core-embed/spotify
core-embed/flickr
core-embed/vimeo
core-embed/animoto
core-embed/cloudup
core-embed/collegehumor
core-embed/dailymotion
core-embed/funnyordie
core-embed/hulu
core-embed/imgur
core-embed/issuu
core-embed/kickstarter
core-embed/meetup-com
core-embed/mixcloud
core-embed/photobucket
core-embed/polldaddy
core-embed/reddit
core-embed/reverbnation
core-embed/screencast
core-embed/scribd
core-embed/slideshare
core-embed/smugmug
core-embed/speaker
core-embed/ted
core-embed/tumblr
core-embed/videopress
core-embed/wordpress-tv
templates/vimeo

### ADD CUSTOM STYLING OPTIONS TO SELECT ON BACKEND
Remember: Wordpress adding is-style- before the css name

Example for paragraph (multiple options)
```js
wp.blocks.registerBlockStyle( 'core/paragraph', [{
    name: 'class-name-one',
    label: 'Option one'
  },
  {
    name: 'class-name-two',
    label: 'Option two'
}] );
```


## BUILDING CUSTOM BLOCKS

### NPM ACTIONS
npm run dev
npm run build
