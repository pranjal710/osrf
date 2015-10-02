**openSRF**
==================================
PHP client for [openSRF](http://docs.evergreen-ils.org/2.9/_introducing_opensrf.html),
a [message passing architecture](http://en.wikipedia.org/wiki/Message_passing#Message_passing_systems)
used by the [Evergreen Integrated Library System (ILS)](http://evergreen-ils.org)
and supported by [Equinox Software](https://esilibrary.com/).


## About OpenSRF

OpenSRF is a protocol intended for low-level business logic, passed between Evergreen components.
For higher-abstraction operations such as information retrieval,
Evergreen's support of [OpenSearch](http://www.opensearch.org) and [unAPI](https://web.archive.org/web/20141218062835/http://unapi.info/) are recommended instead.

This client aims to hide some implementation details, however developers are encouraged to be familiar with the internals of OpenSRF:

* The ["Easing gently into the OpenSRF"](http://docs.evergreen-ils.org/2.9/_easing_gently_into_opensrf.html) chapter of the Evergreen documentation
* Also, the Evergreen codebase contains OpenSRF call declarations;
 examples include [config.js](https://github.com/evergreen-library-system/Evergreen/blob/master/Open-ILS/web/opac/common/js/config.js)
 and [perlmod](https://github.com/evergreen-library-system/Evergreen/tree/master/Open-ILS/src/perlmods/lib/OpenILS/Application).
* There is also an [http://journal.code4lib.org/articles/3284](article by Dan Scott); partially superseded by the above but still of interest.

## Requirements
PHP 5.4 and up.
For specific supported versions, see [.travis.yml](.travis.yml).
For dependencies, see [composer.json](composer.json).

## Installation
This client uses Composer (with namespaces and PSR-4 autoloading). It isn't on Packagist yet.

## Usage

The client takes services, methods and data (also as parameter) to make requests and receive responses from OpenSRF services, and return a simple parsed output.
Setting up an OpenSRF session will retrieve the fm_IDL.xml file from the targeted server, which provides that server's Interface Description Language.
This essentially means class definitions that allow certain data structures to be interpreted as objects in the Object-oriented sense.
Examples of some typical usage are under the examples/ directory.

### Internals Overview

* *OrsfSession* represents a session with a specific Evergreen server.
* On initialisation, it collaborates with *OsrfFieldmapper* to get the *Interface Description Language* from the server
 (the fm_IDL.xml file) and write field mappings in a temporary file.
* This is then used to interpret requests and responses for that specific server.
* Making an OpenSRF request involves calling osrfSession::request(), with suitable parameters; this is usually a
 combination of method, service, endpoint and other paramaters and will vary depending on the exact call.
* This creates an instance of *osrfMessage*, which constructs and sends both the message and the JSON payload via osrfMessage::send().
* Internally, osrfMessage::setGuid() and osrfMessage::header() supports stateful sessions.
* The raw JSON response is held, unsurprisingly, in an instance of *osrfResponse*, where it is also parsed to be more useful.
* User authentication requests are supported via osrfSession::login(); when working with multiple users,
 please use multiple osrfSession instances (though at time of writing the authtoken is not used).

For more information about specific functionality, see the documentation in each class.

## Troubleshooting

### Testing
There are test servers freely available, which can be used to test the code. Test servers can be found at *http://open-ils.org/dokuwiki/doku.php?id=community_servers*

If you still have any questions or doubts, you are free to talk to **Evergreen, an open source Integrated Library System (ILS)** ( *IRC: #evergreen channel on the Freenode server* HomePage: *http://evergreen-ils.org/* )
