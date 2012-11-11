If you have 5.3.9 or 5.3.10 php versions, you wont get PAMI to work correctly.

5.3.9 introduced a bug in stram_get_line(), so open `src/Pastum/Component/PAMI/Client/Client.php` and replace:

```php
return stream_get_line($this->_socket, 1024, Message::EOL);
```
by

```php
return fgets($this->_socket);
```

Let me know if that worked ok for you.

You can use PHP 5.3.11+ or any other 5.3 or 5.4 version except 5.3.9 and 5.3.10.
