# Semantic UI, converted to Sass

`sass-semantic-ui` is a Sass-powered version of [Semantic UI](http://www.semantic-ui.com) and ready to drop into any project.

## NOTE

The package only has the default theme.

## Installation and Usage

```shell
yarn add --dev semantic-ui-sass
```

### JavaScript

```javascript
import 'sass-semantic-ui';
```

### CSS

Import Semantic in an SCSS file (for example, `application.scss`) to get all of Semantic's styles

```css
@import "semantic-ui";
```

### Custom Font

```css
$font-url: 'http://fonts.useso.com/css?family=Lato:400,700,400italic,700italic&subset=latin';
@import 'semantic-ui';
```

### Skip font loading

```css
$import-google-fonts: false;
@import 'semantic-ui';
```

### Custom font family

```css
$font-family: 'custom-font-family';
@import 'semantic-ui';
```

### Customizable Variables

```css
$import-google-fonts: true !default;
$font-url: 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext' !default;
$font-name: 'Lato' !default;
$font-family: $font-name, 'Helvetica Neue', Arial, Helvetica, sans-serif !default;
$icons-font-path: '../../icons' !default;
$flags-image-path: '../../images' !default;

// Body Variables
$body-bg-color:#FFFFFF !default;
$body-font-size: 14px !default;
$body-font-color:rgba(0, 0, 0, 0.87) !default;
//links Variables
$a-font-color:#4183C4 !default;
$a-hover-font-color: #1e70bf !default;

$font-color: rgba(0, 0, 0, 0.87) !default;
$secondary-font: rgba(0, 0, 0, 0.4) !default;
$red:#DB2828 !default;
$orange:#F2711C !default;
$yellow:#FBBD08 !default;
$olive:#B5CC18 !default;
$green:#21BA45 !default;
$teal:#00B5AD !default;
$blue:#2185D0 !default;
$violet:#6435C9 !default;
$purple:#A333C8 !default;
$pink:#E03997 !default;
$brown:#A5673F !default;
$grey:#767676 !default;
$inverted:#FFFFFF !default;
$inverted-label:rgba(255, 255, 255, 0.9) !default;
$inverted-red:#FF695E !default;
$inverted-orange:#FF851B !default;
$inverted-yellow:#FFE21F !default;
$inverted-olive:#D9E778 !default;
$inverted-green:#2ECC40 !default;
$inverted-teal:#6DFFFF !default;
$inverted-blue:#54C8FF !default;
$inverted-violet:#A291FB !default;
$inverted-purple:#DC73FF !default;
$inverted-pink:#FF8EDF !default;
$inverted-brown:#D67C1C !default;
$inverted-grey:#DCDDDE !default;

```
