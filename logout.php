<?php
	# phpWebNotes - a php based note addition system
	# Copyright (C) 2000-2002 Webnotes Team - webnotes-devel@sourceforge.net
	# This program is distributed under the terms and conditions of the GPL
	# See the files README and LICENSE for details

	# --------------------------------------------------------
	# $Id: logout.php,v 1.15 2002/10/03 00:23:19 vboctor Exp $
	# --------------------------------------------------------

	require_once( 'core' . DIRECTORY_SEPARATOR . 'api.php' );

	### remove cookie
	setcookie( $g_string_cookie, '', 0, $g_cookie_url );
	util_header_redirect( $g_logout_redirect_page );
?>