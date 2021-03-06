# Premium Quicklaunch MTMP - Theme Documentation

## SCSS Structure

SCSS is broken up into various folders and partials:

- style.scss
- scss
  - main.scss
  - imports
    - base
    - components
    - global
    - layout
    - templates
    - utils
    - vendors

Each folder inside **imports** contain specific partials along with specific **\_variable.scss** partials

### style.scss

**style.scss** This file imports and processes all partials to be processed into **style.css**. When setting up the new project, make sure this file gets processed into **style.css**. If using Codekit I like to make sure **style.scss** gets processed into a compressed, minified file with `autoprefixed` and `create a source map` turned on.

### main.scss

This files consists of all the partials for the project

### base

Contains a reset partial

### components

Contains components like buttons

### global

Contains global partials for fonts, colors, media queries and more

### layout

Contains layout partials like header, sidebar, footer etc

### templates

Contains all page templates

### utils

Contains the theme's mixins **\_mixins_do_not_edit.scss** as well as the theme's default values **\_variables_do_not_edit.scss**. These files are not to be edited. They are the backbone of the theme and will break the site if adjusted.

### vendors

Contains third party css for slick slider, lity (youtube lightbox) etc

## Getting Familiar with SCSS workflow

### Variables - Fonts and Colors

Most of the work involved in making the theme look like the mock up will consist of updating font and color variables in various partials throughout the theme. All **\_variables.scss** partials throughout the theme can be edited **except scss/imports/utils/\_variables_do_not_edit.scss**. That partial contains `!default` fallback styles that the starter theme relies on. Again, if anything is adjusted in that file, the site will break. All other **\_variables.scss** are free to add, adjust or takeaway variables.

Let's start by setting up colors. To begin:

1. Open **scss/imports/global/colors/\_variable.scss** partial.
2. Add in new colors

After processing, you should see your changes take place to your new theme. Your site may have more or less colors than the theme has started with. Its ok to make new color variables and assign those throughout the theme.

Other **\_variables.scss** partials besides colors have some more involved scenarios.

- For example, open **scss/imports/templates/about/\_variables.scss**

I have attempted to make a naming sequence for each variable. There is a descriptive name along with size/line-height/color/spacing/weight, followed by the media query name. Media query sizes and names can be referenced in **scss/imports/global/mediaqueries/\_variables.scss**.

Note: Ideally it would have been nice to enter a font size rem once and then have it change automatically in all media queries through various sass functions. However, with the mock ups needing to be so precise, I have just used hard coded px values for fonts for each media query. Hopefully in the future we can work with designers to get this dialed in more (which means less variables for us to update throughout the media queries).

### Partials - Margin/Padding and Any Other Changes

Anything other than fonts or colors will need to be updated in the partial files such as margin, padding etc (margins and padding have not had variables assigned but hopefully a future version will).

- Open **scss/imports/templates/about/\_template-about.scss**

This file is where you will can work side by side with the related **\_variables.scss**.

The designers are aware that margins and padding don't have to be perfect. The whole idea of building PQL Themes is to update fonts, colors, backgrounds, images etc and not spend time on every little positioning aspect. But if a margin etc needs to be adjusted thats totally fine too.

Partials contain alot of `@includes`.

Get familiar with **scss/imports/utils/\_mixins_do_not_edit.scss** to better understand all of the **@includes** throughout the theme. They include:

- typography
- media queries
- flexbox
- width/height
- positioning
- responsive images
- triangles

**Note: Do not edit this file as it may break something in the partial files!! If a new and improved mixin is needed to help your workflow, we can definitely add that in through a pull request.**

### @import New Google Fonts and Adobe Fonts

@import urls for Google and Adobe Fonts can be added in the Wordpress dashboard under Theme Options -> Fonts. These get loaded into style tags in head.

`'https://fonts.googleapis.com/css2?family=Martel:wght@400;600;700&family=Work+Sans:wght@400;500;700&display=swap'`

Then in **scss/imports/global/fonts/\_variables.scss** add

```
$primaryfont: 'Work Sans', sans-serif;
$secondaryfont: 'Martel', serif;

```

### Adding in New Features or Layouts

If there is a big change on the mock up that isn't reflected in this build then its probably appropriate to make a second layout option on your site that we can merge in. Still working out the best way to do this but possibly something like this:

1. Fork the repo
2. Work locally on the entire theme except for the new major layout options
3. When its time to make new layout options, set up git remote and point back to this PQ1 repo
4. Create a “New Feature” Branch
5. Create a pull request
6. We look over and merge into PQ1

[Fork and Branch](https://help.github.com/en/github/getting-started-with-github/fork-a-repo)

### Page Speed

Page speed is an ongoing endeavor as Google constantly updates their strategies. This theme does it's best to keep up with envolving trends, but will most likely need updates as we progress.

Overall some of the strategies (mostly on the homepage) involve:

- Using picture tags at different browser window widths
- Using Webp images in critical css areas
- Lazy loading all images when scrolling
- We are currently taking most of our js frameworks and combining, minifying and loading them after a few seconds on the homepage. This gets around some of the Google Lighthouse penalties. (can be found in the footer.php file)
- Sometimes loading fonts locally actually gets us a better score than pulling from Google fonts
- Utilizing caching plugin such as Litespeeed or WP Super Cache

GZIP Compression

GZIP Code can be found [here] (https://gist.github.com/Garth619/e3ad7e60b0c6b84ddda5e9bc4804d227)

### Using CSS Source Mapping in Inspector

By default, this theme is taking **style.css** and injecting into the header for better page speed results. But this disables source mapping in the inspector which greatly helps with finding where code is in the partial files. To temporarily disable this, go to **functions.php** and uncomment:

`wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 5, 'all' ); `

Then go down a few lines and comment out:

```
add_action('wp_head', 'merge_include_css');
```

Future builds will integrate our typical way of handling these files for page speed

### SVGS

Sometimes svgs won't upload in the media library unless this is added to the top of the svg code:

`<?xml version="1.0" encoding="utf-8"?>`

Also if there are four similar sized svgs like on section two, make sure the designers give you svgs that are all on the same sized artboard. That way we don't have to tweak different sized svgs to look the same heights.

## Feedback

Please provide feedback as you use this theme. This can become better and better with more collaboration :100:
