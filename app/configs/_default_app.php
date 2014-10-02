<?php

// If you want to modify defaults for your project (like routing rules), use this file.

return array(
// security
	'security.csp.default-src'		=> "'self'",
	// 'security.csp.script-src'	=> "'self'",
	// 'security.csp.img-src'		=> "'self'",
	'security.csp.style-src'		=> "'self' 'unsafe-inline' fonts.googleapis.com",
	// 'security.csp.media-src'		=> "'self'",
	// 'security.csp.object-src'	=> "'self'",
	// 'security.csp.frame-src'		=> "'self'",
	'security.csp.font-src'			=> "'self' fonts.gstatic.com",
	'security.frame_options'		=> "DENY", // (DENY|SAMEORIGIN|ALLOW-FROM uri)
	'security.content_type_options'	=> "nosniff",
);
