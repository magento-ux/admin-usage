# Magento Admin Usage

This module is a proof of concept of integrating OMEGA into Magento Admin Panel.

It will track admin usage and send anonymised data with the help of Adobe DTM.

The data can be used to improve user experience and the overall quality of the Admin Panel.

## How to install

### With composer

Edit `composer.json`

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/magento-ux/admin-usage"
        }
    ],
    "require": {
        "magento/admin-usage": "dev-master"
    }
}
```

```
composer install
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### Copy and paste

Download latest version from GitHub

Paste into `app/code/Magento/AdminUsage` directory

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## How does it work?

This module adds a `<script>` tag on every page in Magento Admin Panel that loads the OMEGA javascript tracking.

User can enable or disable the script in `Stores -> Configuration -> Advanced -> Admin -> Admin Usage`
