# Cachet Api Client <img src="https://cachethq.io/img/logo.svg" width="100" align="right">

CircleCI: [![CircleCI](https://circleci.com/gh/romeritoCL/cachet-api-client/tree/master.svg?style=svg)](https://circleci.com/gh/romeritoCL/cachet-api-client/tree/master)

[![Latest Stable Version](https://poser.pugx.org/romeritoCL/cachet-api-client/v/stable)](https://packagist.org/packages/romeritoCL/cachet-api-client)
[![composer.lock](https://poser.pugx.org/romeritoCL/cachet-api-client/composerlock)](https://packagist.org/packages/romeritoCL/cachet-api-client)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/romeritoCL/cachet-api-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/romeritoCL/cachet-api-client/?branch=master)

## :hand: What is it?
Simple API client for CachetHQ. A PHP Based Api client that will help you organize calls and support objects and models
for all Cachet API endpoints.
Cachet is an open source status page system written in PHP. https://github.com/CachetHQ/Cachet.

## :floppy_disk: Installation
Install the library by:

- Downloading it from [here](https://github.com/romeritoCL/cachet-api-client/releases/latest)

https://github.com/romeritoCL/cachet-api-client/releases/latest

- Using Composer:
```php
composer require romeritocl/cachet-api-client
```
Finally, be sure to include the autoloader:
```php
require_once '/path/to/your-project/vendor/autoload.php';
```

Once the library is ready and inside the project the stub objects will available and
the Client class will also available.

## Usage

Setup

```php
use DevoraliveCachet\Client;

$endpoint = 'https://demo.cachethq.io/api/v1/';
$token    = '9yMHsdioQosnyVK4iCVR';

$client = new Client($endpoint, $token);
```

### Components

Get components

```php
$components = $client->getComponents();

foreach ($components as $component) {
    echo $component->getName();
}
```

Sorting

```php
$components = $client->getComponents([
    'sort' => 'id',
    'order' => 'desc'
]);
```

Get by id

```php
$component = $client->getComponent(3);
```

Create new component

```php
$component = new Component();
$component->setName('My new component');
$component->setDescription('Component description');
$component->setLink('https://github.com/mangati/cachet');
$component->setStatus(Component::STATUS_OPERATIONAL);

$client->addComponent($component);
```

Update an existing component

```php
$component = new Component();
$component->setId(3);
$component->setName('My new component (updated)');

$client->updateComponent($component);
```

Delete an existing component

```php
$id = 3;

$client->deleteComponent($id);
```


### Incidents

Get incidents

```php
$incidents = $client->getIncidents();

foreach ($incidents as $incident) {
    echo $incident->getName();
}
```

Sorting

```php
$incidents = $client->getIncidents([
    'sort' => 'id',
    'order' => 'desc'
]);
```

Get by id

```php
$incident = $client->getIncident(3);
```

Create new incident

```php
$incident = new Incident();
$incident->setName('My new incident');
$incident->setMessage('incident message');
$incident->setStatus(Incident::STATUS_WATCHING);

$client->addIncident($incident);
```

Update an existing incident

```php
$incident = new Incident();
$incident->setId(3);
$incident->setStatus(Incident::STATUS_FIXED);

$client->updateIncident($incident);
```

Delete an existing incident

```php
$id = 3;

$client->deleteIncident($id);
```
