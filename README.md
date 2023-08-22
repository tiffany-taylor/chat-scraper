# StackOverflow Chat Scraper

This is intended to scrape the entirety of a StackOverflow chatroom log and save to a database. This is to keep a backup of a chatroom that contains a large amount of history.

This project is still a very work-in-progress. There are a number of tasks left to complete.

The `config.project.php` file will contain a StackOverflow user token that is used to allow polling to the SO chat system. It can be found in (need to figure out where the user FKEY can be found and add that information later)

### TODO
- storage mechanism
  - MySQL database in docker
  - decoupled code to store messages into database
  - allow swapping with another database
- pagination of message payload
- async calling of messages?
- example file for environment variables
