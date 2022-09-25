##### Datarose Production

## laravel-ts-models

#### Information

[![Go to Github profile](https://img.shields.io/static/v1?label=datarose&message=production&color=2ea44f&logo=github)](https://github.com/rozsazoltan)
[![@datarose/laravel-ts-models - v1.x](https://img.shields.io/static/v1?label=@datarose/laravel-ts-models&message=v1.x&color=e31d65)](https://github.com/rozsazoltan/laravel-ts-models/blob/dev-master/README.md)
[![MIT license](https://img.shields.io/static/v1?label=License&message=MIT&color=2ea44f)](https://github.com/rozsazoltan/laravel-ts-models/blob/dev-master/LICENSE.md)
[![Views](https://komarev.com/ghpvc/?username=rozsazoltan-laravel-ts-models&label=Views)](https://github.com/rozsazoltan/laravel-ts-models/blob/dev-master/LICENSE.md)

This package upgraded version of [original laravel-ts-models](https://github.com/lepikhinb/laravel-typescript/tree/v0.0.3) (v0.0.3) created by [lepikhinb](https://github.com/lepikhinb).

<br><br>

## Documentation

<details>
  <summary>Documentation links</summary>

  - [Getting Started](#getting-started)
    - [Installation](#installation)
    - [Usage](#usage)
    - [The Basics](#the-basics)
  - [Supported](#supported)
  - [Appendix](#appendix)
    - [License](#license)
    - [Special Thanks](#special-thanks)
</details>

>**Note:** Documentation links will working after open to Documentation content.

<details>
  <summary>Documentation content</summary>

  ### Getting Started

  #### Installation

  Require:
  - PHP 8.x or heigher
  - Laravel 8.x or heigher

  ```sh
    # Install
    composer install datarose/laravel-ts-models
  ```

  You can publish the config file with:
  ```sh
    php artisan vendor:published
      --provider="Datarose\TypeScript\TypeScriptServiceProvider"
      --tag="typescript-config"
  ```

  #### Usage

  Generate TypeScript interfaces
  ```sh
    php artisan typescript:laravel-models
  ```

  Example usage with Vue 3
  ```typescript
    import { defineComponent, PropType } from "vue";

    export default defineComponent({
      props: {
        product: {
          type: Object as PropType<App.Models.Product>,
          required: true,
        },
      },
    }
  ```

  #### The Basics

  The package lets you generate TypeScript interfaces from your Laravel models.

  Say you have a model which has several properties (database columns) and multiple relations.

  ```php
    class Product extends Model
    {
      public function category(): BelongsTo
      {
        return $this->belongsTo(Category::class);
      }

      public function features(): HasMany
      {
        return $this->hasMany(Feature::class);
      }
    }
  ```

Laravel TypeScript will generate the following TypeScript interface:

  ```typescript
    declare namespace App.Models {
      export interface Product {
        id: number;
        category_id: number;
        name: string;
        price: number;
        created_at: string | null;
        updated_at: string | null;
        category?: App.Models.Category | null;
        features?: Array<App.Models.Feature> | null;
      }
      ...
    }
  ```

  <br><br>

  ### Supported

  - [x] Database columns
  - [x] Model relations
  - [x] Model accessors
  - [ ] Casted attributes

</details>

<br><br>

## Appendix

### License
#### @datarose/laravel-ts-models
Open source under the [MIT License](https://github.com/rozsazoltan/laravel-ts-models/blob/dev-master/LICENSE.md).<br>
© 2022 Rózsa Zoltán.

#### lepikhinb/laravel-typescript (v0.0.3)
This package upgraded version of [original laravel-ts-models](https://github.com/lepikhinb/laravel-typescript/tree/v0.0.3) (v0.0.3)<br>
created by [lepikhinb](https://github.com/lepikhinb).<br>
Open source under the [MIT License](https://github.com/lepikhinb/laravel-typescript/blob/v0.0.3/LICENSE.md).<br>
© 2014–2018 Julian Lloyd.

### Special Thanks

More thanks for original package [contributors](https://github.com/lepikhinb/laravel-typescript/graphs/contributors), and [lepikhinb](https://github.com/lepikhinb).
