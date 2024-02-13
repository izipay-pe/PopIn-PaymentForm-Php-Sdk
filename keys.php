<?php
/**
 * Get the client
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Define configuration
 */

/* Username, password and endpoint used for server to server web-service calls */
Lyra\Client::setDefaultUsername("~ CHANGE_ME_USER_ID ~");
Lyra\Client::setDefaultPassword("~ CHANGE_ME_PASSWORD ~");
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");

/* publicKey and used by the javascript client */
Lyra\Client::setDefaultPublicKey("~ CHANGE_ME_PUBLIC_KEY ~");

/* Javascript content delivery server */
Lyra\Client::setDefaultClientEndpoint("https://static.micuentaweb.pe");

/* SHA256 key */
Lyra\Client::setDefaultSHA256Key("~ CHANGE_ME_HMAC_SHA_256 ~");