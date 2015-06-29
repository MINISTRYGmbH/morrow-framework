<?php

// If you want to modify defaults for your project (like routing rules), use this file.

return [
	'security.csp.default-src'		=> "'self' cdnjs.cloudflare.com",
	// 'security.csp.script-src'	=> "'self'",
	// 'security.csp.img-src'		=> "'self'",
	'security.csp.style-src'		=> "'self' 'unsafe-inline' cdnjs.cloudflare.com",
	// 'security.csp.media-src'		=> "'self'",
	// 'security.csp.object-src'	=> "'self'",
	// 'security.csp.frame-src'		=> "'self'",
	// 'security.csp.font-src'		=> "'self'",
	// 'security.csp.connect-src'	=> "'self'",
	'security.frame_options'		=> "DENY", // (DENY|SAMEORIGIN|ALLOW-FROM uri)
	'security.content_type_options'	=> "nosniff",
];
