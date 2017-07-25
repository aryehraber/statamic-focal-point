# Focal Point

**Use Statamic's Focal Point feature for responsive images.**

![Focal Point Example](https://user-images.githubusercontent.com/5065331/28575170-6e3fa106-7150-11e7-9d0c-ba37c4d57cfa.gif)

Statamic makes cropping images super easy using Glide, however in a world where pretty much every website needs to be responsive, images can't always get a clearcut crop.  This means that the awesome, built-in focal point feature is rendered useless and leaves many clients confused as to why making focal point changes in the CP aren't reflected on the site.

This is where the *Focal Point Tag* comes in; define the image focal point using the CP and then use CSS `background-image` & `background-position` in your template to setup your responsive image.

## Setup

Simply copy the `FocalPoint` folder into `site/addons/`.


## Usage

```
// Standalone
{{ focal_point:[image_name] }}

// Inside {{ asset }} tag pair
{{ focal_point }}
```

Both will simply output the position % for `background-position`.


## Example

```html
<style>
    .banner {
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<div class="banner" style="
    {{ asset:banner }}
        background-image: url({{ glide:id }});
        background-position: {{ focal_point }};
    {{ /asset:banner }}">
</div>
```