## Instalation

To get started with Socialite, use Composer to add the package to your project's dependencies:

    composer require hrmsh/feature-checklist

### Configuration
After installing, register the `Hrmsh\FeatureChecklist\FeatureChecklistServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Hrmsh\FeatureChecklist\FeatureChecklistServiceProvider::class,
],
```

### Usage
add this blade tag to your header or any proper place
`@featurechecklist`

