
## Installation

Please check the [official cakephp installation guide](https://book.cakephp.org/3.0/en/installation.html) for server requirements before you start.

1. Clone the repository.

```bash
git clone git@github.com:2gourds/abroadsource_api.git
```

2. Switch to the repo folder.

```bash
cd abroadsource_api
```

3. Install all the dependencies using composer.

```bash
composer install
```

4. Configure your database settings in the `config/app.php` file

```bash
vi config/app.php
```

5. Run the database migrations (Set the database connection in app.php)

```bash
bin/cake migrations migrate
```

6. Start the local development server

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Database seeding

Populate the database with seed data with relationships which includes users and events. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.

```bash
bin/cake migrations seed
```

## Testing the API

Run the cakephp development server.

```bash
bin/cake server
```

1. Schedule an event by using the endpoint for posting data.

```bash
POST http://localhost:8765/event
Content-Type: application/json
Request Body:
{"eventName": "event 1","frequency": "Once-Off","startDateTime":
"2020-12-01 00:00","endDateTime": "2020-12-15 00:00", "duration":
30, "invitees": [1,2,3]}

```

2. Get all event instances by using the endpoint that returns all event instances for a given datetime range and/or invitees.

```bash
GET http://localhost:8765/event/instance?from=2020-12-01 00:00&to=2020-12-31 00:00&invitees=1,2
Content-Type: application/json
```
