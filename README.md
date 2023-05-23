# PHP SMS Quickstart

This quickstart serves as a guide to get your first SMS application up and running with [FreeClimb](https://docs.freeclimb.com/docs/how-freeclimb-works).

Specifically, the project will:

- Receive an incoming message via a FreeClimb application
- Respond with a FreeClimb command to say 'Hello World!' to messager

## Tutorial

We do not currently offer a tutorial for this quickstart. Coming soon...

## Requirements

- A [FreeClimb account](https://www.freeclimb.com/dashboard/signup/)

- A [registered application](https://docs.freeclimb.com/docs/registering-and-configuring-an-application#register-an-app) with a named alias

- A [configured FreeClimb number](https://docs.freeclimb.com/docs/getting-and-configuring-a-freeclimb-number) assigned to your application

- Trial accounts: a [verified number](https://docs.freeclimb.com/docs/using-your-trial-account#verifying-outbound-numbers)

## Tools:

- [PHP](https://www.php.net/manual/en/install.php) 7.2 or higher
- [Composer](https://getcomposer.org/)
- [ngrok](https://ngrok.com/download) (recommended for hosting)

## Setting up the Quickstart

{Language specific but an example of Node.js is below}

1. Install the required packages

   ```bash
   composer install
   ```

2. [Configure your applications's endpoints](https://docs.freeclimb.com/docs/registering-and-configuring-an-application#configure-your-application) by adding a publicly accessible URL (we recommend an [ngrok](https://ngrok.com/download) URL) and the route reference `/incoming-sms.php` to your App Config's VoiceURL:

   ```bash
   https://{ngrok-generated-url}/incoming-sms.php
   ```

## Running the Quickstart

1. Start your voice quickstart application

   ```bash
   php -S 127.0.0.1:8080
   ```

2. Message the FreeClimb number assigned to the application you've configured for this tutorial

## Feedback & Issues

If you would like to give the team feedback or you encounter a problem, please [contact support](https://www.freeclimb.com/support/) or [submit a ticket](https://freeclimb.com/dashboard/portal/support) in the dashboard.
