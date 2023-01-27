## Bulk delete posts by post type
```
wp post delete $(wp post list --post_type='xxxx' --format=ids --skip-plugins --skip-themes --quiet [--url=xxxx]) \
--skip-plugins --skip-themes --force --defer-term-counting [--url=xxxx]
```
