**openSRF** 
==================================
While a complete guide to openSRF can be found on *http://open-ils.org/dokuwiki/doku.php?id=osrf-devel:user_s_guide*, here is a quick intro to openSRF. 
>>The Open Service Request Framework (or OpenSRF, pronounced “open surf”) is an inter-application message passing architecture built on XMPP (aka “jabber”). The Evergreen open source library system is built on an OpenSRF architecture to support loosely coupled individual components communicating over an OpenSRF messaging bus. This article introduces OpenSRF, demonstrates how to build OpenSRF services through simple code examples, explains the technical foundations on which OpenSRF is built, and evaluates OpenSRF’s value in the context of Evergreen. Part 1 of a 2 part article in this issue.

 By Dan Scott
 
 
Imagine an application architecture in which 10 lines of Perl or Python, using the data types native to each language, are enough to implement a method that can then be deployed and invoked seamlessly across hundreds of servers. You have just imagined developing with OpenSRF – it is truly that simple. Under the covers, of course, the OpenSRF language bindings do an incredible amount of work on behalf of the developer. An OpenSRF application consists of one or more OpenSRF services that expose methods: for example, the opensrf.simple-text demonstration service exposes the opensrf.simple-text.split() and opensrf.simple-text.reverse() methods. Each method accepts zero or more arguments and returns zero or one results. The data types supported by OpenSRF arguments and results are typical core language data types: strings, numbers, booleans, arrays, and hashes.


Introduction 
-------------
*(extracted from **http://journal.code4lib.org/articles/3284**)*

OpenSRF is a message routing network that offers scalability and failover support for individual services and entire servers with minimal development and deployment overhead. You can use OpenSRF to build loosely-coupled applications that can be deployed on a single server or on clusters of geographically distributed servers using the same code and minimal configuration changes. Although copyright statements on some of the OpenSRF code date back to Mike Rylander’s original explorations in 2000, Evergreen was the first major application to be developed with, and to take full advantage of, the OpenSRF architecture starting in 2004. The first official release of OpenSRF was 0.1 in February 2005 (http://evergreen-ils.org/blog/?p=21), but OpenSRF’s development continues a steady pace of enhancement and refinement, with the release of 1.0.0 in October 2008 and the most recent release of 1.2.2 in February 2010.

OpenSRF is a distinct break from the architectural approach used by previous library systems and has more in common with modern Web applications. The traditional “scale-up” approach to serve more transactions is to purchase a server with more CPUs and more RAM, possibly splitting the load between a Web server, a database server, and a business logic server. Evergreen, however, is built on the Open Service Request Framework (OpenSRF) architecture, which firmly embraces the “scale-out” approach of spreading transaction load over cheap commodity servers. The initial GPLS PINES hardware cluster, while certainly impressive, may have offered the misleading impression that Evergreen requires a lot of hardware to run. However, Evergreen and OpenSRF easily scale down to a single server; many Evergreen libraries run their entire library system on a single server, and most OpenSRF and Evergreen development occurs on a virtual machine running on a single laptop or desktop image.

Library
-------

The working of this library is explained in the *docs/* directory

Testing 
--------

There are test servers freely available, which can be used to test the code. Test servers can be found at *http://open-ils.org/dokuwiki/doku.php?id=community_servers*