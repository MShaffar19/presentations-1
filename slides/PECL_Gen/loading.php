<?xml version="1.0" encoding="ISO-8859-1"?>
<slide>
 <title>Loading the Extension</title>
 <blurb>
	You have now successfully created your new PHP shared extension.
	To activate it you have to load the extension into PHP.
	</blurb> 
 <blurb>
	To load the extension at startup so that it is always available
	with PHP you have to add an %extension% directive to your 
	%php.ini% file:
 </blurb> 
 <example filename="examples/x1.php-ini" fontsize="1em"/>
 <blurb>
  or the %dl()% function at runtime
 </blurb>
 <example filename="examples/x1.dl" fontsize="1em"/>
</slide>
