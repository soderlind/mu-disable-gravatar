# Disable Gravatar

[WordPress Must-use Plugin](https://wordpress.org/support/article/must-use-plugins/) that disables Gravatar.

The plugin is simple and use the following hooks:

```php
add_filter( 'pre_get_avatar', '__return_empty_string' );
add_filter( 'get_avatar', '__return_empty_string' );
```

`pre_get_avatar`: Short circuit the Gravatar request. I.e. Stop the request to Gravatar.com.

`get_avatar`: Set the new avatar to an empty string.
