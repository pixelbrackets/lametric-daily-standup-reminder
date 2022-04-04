# LaMetric Daily Standup Reminder

[![Version](https://img.shields.io/packagist/v/pixelbrackets/lametric-daily-standup-reminder.svg?style=flat-square)](https://packagist.org/packages/pixelbrackets/lametric-daily-standup-reminder/)
[![Build Status](https://img.shields.io/gitlab/pipeline/pixelbrackets/lametric-daily-standup-reminder?style=flat-square)](https://gitlab.com/pixelbrackets/lametric-daily-standup-reminder/pipelines)
[![Made With](https://img.shields.io/badge/made_with-php-blue?style=flat-square)](https://gitlab.com/pixelbrackets/lametric-daily-standup-reminder#requirements)
[![License](https://img.shields.io/badge/license-gpl--2.0--or--later-blue.svg?style=flat-square)](https://spdx.org/licenses/GPL-2.0-or-later.html)
[![Contribution](https://img.shields.io/badge/contributions_welcome-%F0%9F%94%B0-brightgreen.svg?labelColor=brightgreen&style=flat-square)](https://gitlab.com/pixelbrackets/lametric-daily-standup-reminder/-/blob/master/CONTRIBUTING.md)

Send a reminder notification to all local LaMetric devices when
the daily standup is due.

![Screenshot](./docs/screenshot.png)

## Vision

The package is an example project for the
[lametric-notification-broadcast](https://gitlab.com/pixelbrackets/lametric-notification-broadcast)
package.

Every day at a given time, a message is send to all LaMetric devices in a local
network, to remind everybody that the daily standup is due.

That's the only feature of this package.

## Requirements

- PHP
- Cron
- An instance of the
  [LaMetric Notification Broadcast](https://gitlab.com/pixelbrackets/lametric-notification-broadcast)
  project

## Installation

Packagist Entry https://packagist.org/packages/pixelbrackets/lametric-daily-standup-reminder/

- Add a cronjob, see »Usage«

## Source

https://gitlab.com/pixelbrackets/lametric-daily-standup-reminder/

Mirror https://github.com/pixelbrackets/lametric-daily-standup-reminder/

## Usage

1. Set up a cronjob pointing to `cron.php` and pass a URL to the
   [broadcast service](https://gitlab.com/pixelbrackets/lametric-notification-broadcast)
   service, for example every day at ten o'clock with the service available
   at `http://localhost.local/hook`
   ```bash
   0 10 * * * LAMETRIC_BROADCAST_URL="http://localhost.local/hook" php /var/www/lametric/cron.php > /dev/null 2>&1
   ```

## License

GNU General Public License version 2 or later

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

## Author

Dan Untenzu (<mail@pixelbrackets.de> / [@pixelbrackets](https://pixelbrackets.de))

## Changelog

See [./CHANGELOG.md](CHANGELOG.md)

## Contribution

This script is Open Source, so please use, patch, extend or fork it.

[Contributions](CONTRIBUTING.md) are welcome!
