# A message provider for Moodle
A local plugin that sends to admin:
* new self-registration notifications.
* new course-completed notifications (requires Moodle >= 2.3).

## Installing
* Download all files on:
  <pre>local/messageprovider/</pre>
* Go to
  <pre>Site administration -> Notifications</pre>

## Using
Go to:
  <pre>Site administration -> Plugins -> Message outputs -> Default message outputs</pre>
The plugins has added two items:
  * A course has been completed
  * New self registration notification

With the first, you can specify what the plugin should do when a user completes a course. With the latter, what the plugin should do when a new self registration has been done.