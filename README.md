# laravel-netflex-api

A service provider which provides a facade for accessing the Netflex API.

## Installation

```bash
composer require apility/laravel-netflex-api
php artisan vendor:publish --tag=netflex-api
```

## Configuration

Add your Netflex API keys in your .env file or ENV variables

```
NETFLEX_PUBLIC_KEY=12345678abcdef12345678abcdef12345678abcdef12345678abcdef12345678
NETFLEX_PRIVATE_KEY=12345678abcdef12345678abcdef12345678abcdef12345678abcdef12345678
```

## Usage

```php
use NetflexAPI;

$structures = NetflexAPI::get('builder/structures');

/*
[
  {
    "id": "10000",
    "name": "Articles",
    "description": "Articles posted to our website",
    "created": "2019-10-25 16:30:00",
    "value_edit": null,
    "value_create": null,
    "value_media": null,
    "value_relations": null,
    "value_name": null,
    "value_tags": null,
    "value_variants": null,
    "value_author": null,
    "canonical_page_id": "0",
    "hide_url": "0",
    "generate_sitemap": "0",
    "url_scheme": null,
    "tags": null
  }
]
*/
```
