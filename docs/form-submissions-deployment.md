# Form submissions deployment

Upload this release (including app, config, routes, views and the new migration) to the existing Laravel application. Keep the production `.env` and existing storage files. From the directory containing `artisan`, run:

```sh
php artisan install:forms
```

This production-ready command runs only `2026_10_15_000000_create_form_submissions_table.php`, then clears configuration, route and compiled-view caches. It does not reset the database or run other pending migrations. Re-running it preserves existing submissions. No new Composer or frontend dependencies or asset build are required.

Run it immediately during release activation, before accepting requests with the new code: contact submissions require the new table. If your release process caches configuration/routes/views, rebuild those caches after installation using your usual deployment steps. Existing `CONTACT_EMAIL`, `CC_EMAIL`, `CONTACT_FROM_EMAIL`, mail and reCAPTCHA settings continue to apply.

Sign in with an active administrator account at `/vr/home`, then choose **Form Submissions** (also in the account menu). The list shows the latest entries first, 25 per page. Open an entry to see name, email, phone, complete message, source, page URL, language, submission timestamp and email notification status. Displayed dates use America/Vancouver, including daylight saving time.

Valid contact forms using the shared contact-submit endpoint are saved before the email notification is attempted. Failed email notifications do not delete the saved message or ask the visitor to submit again. `Sent` means the mail transport accepted the message, not confirmed inbox delivery. `Pending` means the notification outcome has not been recorded. Invalid or failed reCAPTCHA submissions are not saved. If database storage fails, the visitor sees an error instead of a success confirmation.

After deployment, submit one real contact form, verify its details and timestamp in the admin area, and check the notification inbox. The automated tests use an isolated in-memory database and fake reCAPTCHA/mail services; production delivery still needs this check.

Only submissions received after installation will appear. Earlier email-only submissions cannot be recovered from this database. Blog comments retain their existing storage/admin workflow.
