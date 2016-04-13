# cisco_puppet
README FILE
updated 4/13/2016
Cisco_Puppet - convert NX-OS configuration files to Puppet Manifests and Instance files
by Joe James and Devarshi Shah, Cisco Systems, INSBU

Current System
Uses Cisco_Puppet Module documentation from Puppet Forge at,
https://forge.puppetlabs.com/puppetlabs/ciscopuppet

Back-end
The back-end consists of the parse_types.py file, which scans the HTML code from this webpage,
parses out the Types, then gets all listed parameters for each type, and all valid values for each parameter,
and saves these into a separate PHP file for each type, in the includes folder.
The parse_types.py file uses the BeautifulSoup Python module to help with the parsing by getting HTML tags (eg. H3, H4, etc).
It tries to detect all valid values for each parameter, but may not be perfect at this.

As of 4/13/2016 this parse_types script is run off-line, manually, which means that the 
latest updates to that page may not be reflected in the PHP type files that it generates. 
In the next generation of this converter we would like to move to a real-time back-end that gets 
the latest Puppet Module updates from Cisco's GitHub site at,
https://github.com/cisco/cisco-network-puppet-module
rather than using the forge.puppetlabs site.

Front-end 
The front-end consists of several components:
1. index.php file 
	- provides web interface for users to enter configurations
	- parses the config line-by-line and generates the Puppet Manifests and Instances
2. types.txt file
	- hard-coded types file
	- maps a type name into a Cisco type (eg. 'router bgp' => 'cisco_bgp')
	- stores the opening line of the Manifest for each Cisco type
3. PHP Type files
	- generated by the back-end parse_types.py file
	- one PHP file for each Cisco type listed on the documentation webpage
	- map a type parameter to its Cisco parameter, and its valid values
	- about 40 of these files, stored in the includes folder
4. Input configuration string from user
	- user enters his config file into the web form as a block of text
	- index.php gets this text from the form and converts it to the Puppet Manifest and Instances
	
Working Demo
works pretty well for Interface types, but not so well for other types.
http://www.joe-james.net/cisco/cfg2puppet/index.php

Next Generation
Our current system works, but not perfectly. We want to make several improvements to the production version, 
probably incorporating the following ideas:
- get Types, parameters and valid values real-time, and from either the Cisco GitHub site or from the 
	Puppet Module of the server that the converter is installed on.
- change to an object-oriented back-end, using a Type class to store all the parameters and values
	for each type (rather than the current system of outputting this data to PHP files).
- change to a Python front-end
