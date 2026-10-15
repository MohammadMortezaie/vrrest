# Dynamic sitemap deployment

Deploy `public/.htaccess` from this release to the Apache server, including this hidden file if uploading manually. Remove the old `public/sitemap.xml` on the server. The new rewrite also handles a leftover static copy by passing `/sitemap.xml` directly to Laravel before the normal existing-file check.

The existing Laravel route generates XML from current database records on every request. Publishing an active blog adds its canonical URL; editing updates its lastmod; changing its slug replaces the sitemap URL. Old article URLs with the same post ID redirect permanently (301) to the current slug. Unpublished articles disappear from the sitemap and return 404.

No migration, cron job or manual regeneration is needed. If a CDN caches `/sitemap.xml`, purge its old entry and exclude this path from full-page caching. On Nginx, configure an equivalent exact-location rule or remove the static file; `.htaccess` applies only to Apache.

After deployment, open `/sitemap.xml` and confirm it contains article 155 with its current slug. Compare it with `/sitemap`, which uses the same controller. This release was tested in Laravel with an isolated database; production Apache routing must be checked after upload.
