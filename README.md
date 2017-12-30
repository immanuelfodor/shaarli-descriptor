# Shaarli Descriptor Plugin

[Shaarli](https://github.com/shaarli/Shaarli) plugin to customize the default height/number of rows of the **Description** field when editing a link. 

Tested on Shaarli 0.9.2 with the [Shaarli-Material](https://github.com/kalvn/Shaarli-Material) theme in desktop and Android Chrome browsers, but it should work with all [built-in themes](https://github.com/shaarli/Shaarli/tree/master/tpl/) as well.

## Features

* Set up the number of rows that define the hight of the Description textarea
* Plugin Administration page integration for easy configuration

## Screenshots

### Plugin Administration page

After plugin enabled with default `DESCRIPTION_ROWS` settings:

![Shaarli Descriptor admin settings](screenshots/shaarli-descriptor-admin.png)

### Edit Link page

After plugin enabled and `DESCRIPTION_ROWS` set to `10`:

![Shaarli Descriptor edit link page](screenshots/shaarli-descriptor-editlink.png)

## Installation

The plugin's folder (`shaarli_descriptor`) should be placed in the `<shaarli>/plugins/` directory.

The directory structure should look like:

```bash 
└── plugins
    └── shaarli_descriptor
        ├── shaarli_descriptor.html
        ├── shaarli_descriptor.meta
        └── shaarli_descriptor.php
```

To enable the plugin, just check it in the Plugin Administration page (`?do=pluginadmin`).

You can also add `shaarli_descriptor` to your list of enabled plugins in `data/config.json.php`.\
The `general.enabled_plugins` list should look like then:

```
"general": {
  "enabled_plugins": [
    "shaarli_descriptor",
    [...]
  ],
}
```

## Configuration

Go to the Plugin Administration page, and edit the following settings (with the plugin enabled).

* **DESCRIPTION_ROWS**:\
*Hight of the Description textarea. Default: 4*\
Example value: `8`\
Supported values: integer numbers greater than or equal to `1`. If not specified or malformed, defaults to `4`.

> Note: this setting can also be set in `data/config.json.php`, in the `plugins` section:

```
"general": {
    "plugins": {
        "DESCRIPTION_ROWS": "10"
    },
}
```

## Known issues

None

## Recommendation 

Shaarli Descriptor works best with my [Shaarli Markdown Toolbar](https://github.com/immanuelfodor/shaarli-markdown-toolbar) plugin, check it out, too! 😉

## Contact

Immánuel Fodor\
[fodor.it](https://fodor.it/shaarlifactorit) | [Linkedin](https://fodor.it/shaarlifactorin)
