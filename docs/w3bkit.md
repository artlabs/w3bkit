
<div align='center'>
  <a href='#'>
    <img src='../misc/logo.png' alt='logo'>
  </a>
</div>

<h3 align='center'>DOCUMENTATION</h3>

<br>

## Table of contents

- [Getting started](#getting-started)
- [Download](#download)
- [Content](#content)
- [Customizing](#customizing)
- [About](#about)

## Getting started

### Introduction

Hello, friend! Let us introduce w3bkit, an open source framework for developing websites and applications. The easiest way to start with is to use our precompiled CSS files. If you need the source codes, head to the [download section](#download).

### CSS

Copy-paste the `<link>` tag into your `<head>` section, before your other stylesheets, to use the design framework in your project.

```html
<link rel='stylesheet' type='text/css' href='https://artlabs.github.io/cdn/w3b.min.css'>
```

### Starter template

Use a HTML5 doctype and set the charset and the viewport. After linking the CSS framework, your file should look similar to this:

```html
<!doctype html>
<html lang='en'>
    <head>
        <!-- required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <!-- w3bkit CSS -->
        <link rel='stylesheet' type='text/css' href='https://artlabs.github.io/cdn/w3b.min.css'>
    </head>
    <body>
        <h1>Hello, friend!</h1>
    </body>
</html>
```

Tada! You have created your first site with w3bkit. Sure, nothing special, but keep on going and explore the full potential of the w3bkit framework. **Check out our [templates](https://github.com/artlabs/w3bkit/tree/main/templates)!**

## Download

:exclamation: coming soon

In the meantime you can clone the repository by running `git clone https://github.com/artlabs/w3bkit.git`

## Content

Due to a broad functionality the w3bkit framework will become more extensive over time. Here is an overview what it contains already:

```text
w3bkit/
├─ .github/
│  └─ CONTRIBUTING.md
├─ build/
│  └─ compile-design.sh
├─ design/
│  ├─ css/
│  │  ├─ w3b.css
│  │  ├─ w3b.css.map
│  │  ├─ w3b.min.css
│  │  └─ w3b.min.css.map
│  └─ source/
│     └─ *.scss
├─ docs/
│  └─ w3bkit.md
├─ misc/
│  └─ logo.png
├─ php/
│  └─ inc/
│     └─ *.inc.php
├─ templates/
│  └─ *.html
├─ LICENSE
├─ README.md
└─ ...
```

To get a full insight please visit [github](https://github.com/artlabs/w3bkit).

## Customizing



## About

