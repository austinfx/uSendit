<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jason Brashear
 * Date: 3/27/12
 * Time: 12:19 PM
 * To change this template use File | Settings | File Templates.
 */


// ==================================================================
// Database  Settings -- CHANGE HERE

define("EZSQL_DB_USER", "root");             // <-- mysql db user
define("EZSQL_DB_PASSWORD", "yeshua2k");    // <-- mysql db password
define("EZSQL_DB_NAME", "uSendit");		   // <-- mysql db pname
define("EZSQL_DB_HOST", "localhost");     // <-- mysql server host

// ==================================================================
//	ezSQL Constants
define("EZSQL_VERSION","1.01");
define("OBJECT","OBJECT",true);
define("ARRAY_A","ARRAY_A",true);
define("ARRAY_N","ARRAY_N",true);

// ==================================================================
// Domain name inclue host name ie www.mydomain.com
define("USENDIT_DOMAIN", "localhost");
// installed directoy if installed in the root folder set to: /
// include forward slashes /foldername/
define("USENDIT_FOLDER", "/usendit/");
// File upload Path
define("USENDIT_UPLOADS", "/Applications/MAMP/htdocs/uSendit/uploads/"); // full path: /path/to/uploads/
