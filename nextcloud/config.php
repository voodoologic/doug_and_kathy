<?php

/**
 * This configuration file is only provided to document the different
 * configuration options and their usage.
 *
 * DO NOT COMPLETELY BASE YOUR CONFIGURATION FILE ON THIS SAMPLE. THIS MAY BREAK
 * YOUR INSTANCE. Instead, manually copy configuration switches that you
 * consider important for your instance to your working ``config.php``, and
 * apply configuration options that are pertinent for your instance.
 *
 * This file is used to generate the configuration documentation.
 * Please consider following requirements of the current parser:
 *  * all comments need to start with `/**` and end with ` *\/` - each on their
 *    own line
 *  * add a `@see CONFIG_INDEX` to copy a previously described config option
 *    also to this line
 *  * everything between the ` *\/` and the next `/**` will be treated as the
 *    config option
 *  * use RST syntax
 */

$CONFIG = [

/**
 * Your list of trusted domains that users can log into. Specifying trusted
 * domains prevents host header poisoning. Do not remove this, as it performs
 * necessary security checks.
 * You can specify:
 *
 * - the exact hostname of your host or virtual host, e.g. demo.example.org.
 * - the exact hostname with permitted port, e.g. demo.example.org:443.
 *   This disallows all other ports on this host
 * - use * as a wildcard, e.g. ubos-raspberry-pi*.local will allow
 *   ubos-raspberry-pi.local and ubos-raspberry-pi-2.local
 * - the IP address with or without permitted port, e.g. [2001:db8::1]:8080
 *   Using TLS certificates where commonName=<IP address> is deprecated
 */
'trusted_domains' =>
   [
    'files.dougandkathy.com'
    '10.12.201.0/24'
    '*.foundation'
  ],


/**
 * Where user files are stored. The SQLite database is also stored here, when
 * you use SQLite.
 *
 * Default to ``data/`` in the Nextcloud directory.
 */
'datadirectory' => '/var/www/nextcloud/data',

/**
 * Identifies the database used with this installation. See also config option
 * ``supportedDatabases``
 *
 * Available:
 * 	- sqlite3 (SQLite3)
 * 	- mysql (MySQL/MariaDB)
 * 	- pgsql (PostgreSQL)
 *
 * Defaults to ``sqlite3``
 */
'dbtype' => 'psql',

/**
 * Your host server name, for example ``localhost``, ``hostname``,
 * ``hostname.example.com``, or the IP address. To specify a port use
 * ``hostname:####``; to specify a Unix socket use
 * ``localhost:/path/to/socket``.
 */
'dbhost' => 'layer2.foundation'

/**
 * Prefix for the Nextcloud tables in the database.
 *
 * Default to ``oc_``
 */
'dbtableprefix' => 'nextcloud_',


/**
 * User Experience
 *
 * These optional parameters control some aspects of the user interface. Default
 * values, where present, are shown.
 */

/**
 * This sets the default locale on your Nextcloud server, using ISO_639
 * language codes such as ``en`` for English, ``de`` for German, and ``fr`` for
 * French, and ISO-3166 country codes such as ``GB``, ``US``, ``CA``, as defined
 * in RFC 5646. It overrides automatic locale detection on public pages like
 * login or shared items. User's locale preferences configured under "personal
 * -> locale" override this setting after they have logged in.
 *
 * Defaults to ``en``
 */
'default_locale' => 'en_US',

/**
 * With this setting a locale can be forced for all users. If a locale is
 * forced, the users are also unable to change their locale in the personal
 * settings. If users shall be unable to change their locale, but users have
 * different languages, this value can be set to ``true`` instead of a locale
 * code.
 *
 * Defaults to ``false``
 */
'force_locale' => 'en_US',

/**
 * Set the default app to open on login. Use the app names as they appear in the
 * URL after clicking them in the Apps menu, such as documents, calendar, and
 * gallery. You can use a comma-separated list of app names, so if the first
 * app is not enabled for a user then Nextcloud will try the second one, and so
 * on. If no enabled apps are found it defaults to the Files app.
 *
 * Defaults to ``files``
 */
'defaultapp' => 'files',

/**
 * ``true`` allows users to change their display names (on their Personal
 * pages), and ``false`` prevents them from changing their display names.
 */
'allow_user_to_change_display_name' => true,

/**
 * Lifetime of the remember login cookie. This should be larger than the
 * session_lifetime. If it is set to 0 remember me is disabled.
 *
 * Defaults to ``60*60*24*15`` seconds (15 days)
 */
'remember_login_cookie_lifetime' => 60*60*24*15,

/**
 * The lifetime of a session after inactivity.
 *
 * Defaults to ``60*60*24`` seconds (24 hours)
 */
'session_lifetime' => 60 * 60 * 24,

/**
 * The return address that you want to appear on emails sent by the Nextcloud
 * server, for example ``nc-admin@example.com``, substituting your own domain,
 * of course.
 */
'mail_domain' => 'example.com',

/**
 * FROM address that overrides the built-in ``sharing-noreply`` and
 * ``lostpassword-noreply`` FROM addresses.
 *
 * Defaults to different from addresses depending on the feature.
 */
'mail_from_address' => 'nextcloud',

/**
 * Enable SMTP class debugging.
 *
 * Defaults to ``false``
 */
'mail_smtpdebug' => false,

/**
 * Which mode to use for sending mail: ``sendmail``, ``smtp`` or ``qmail``.
 *
 * If you are using local or remote SMTP, set this to ``smtp``.
 *
 * For the ``sendmail`` option you need an installed and working email system on
 * the server, with ``/usr/sbin/sendmail`` installed on your Unix system.
 *
 * For ``qmail`` the binary is /var/qmail/bin/sendmail, and it must be installed
 * on your Unix system.
 *
 * Defaults to ``smtp``
 */
'mail_smtpmode' => 'smtp',

/**
 * This depends on ``mail_smtpmode``. Specify the IP address of your mail
 * server host. This may contain multiple hosts separated by a semi-colon. If
 * you need to specify the port number append it to the IP address separated by
 * a colon, like this: ``127.0.0.1:24``.
 *
 * Defaults to ``127.0.0.1``
 */
'mail_smtphost' => '127.0.0.1',

/**
 * This depends on ``mail_smtpmode``. Specify the port for sending mail.
 *
 * Defaults to ``25``
 */
'mail_smtpport' => 25,

/**
 * This depends on ``mail_smtpmode``. This sets the SMTP server timeout, in
 * seconds. You may need to increase this if you are running an anti-malware or
 * spam scanner.
 *
 * Defaults to ``10`` seconds
 */
'mail_smtptimeout' => 10,

/**
 * This depends on ``mail_smtpmode``. Specify when you are using ``ssl`` for SSL/TLS or
 * ``tls`` for STARTTLS, or leave empty for no encryption.
 *
 * Defaults to ``''`` (empty string)
 */
'mail_smtpsecure' => '',

/**
 * This depends on ``mail_smtpmode``. Change this to ``true`` if your mail
 * server requires authentication.
 *
 * Defaults to ``false``
 */
'mail_smtpauth' => false,

/**
 * This depends on ``mail_smtpmode``. If SMTP authentication is required, choose
 * the authentication type as ``LOGIN`` or ``PLAIN``.
 *
 * Defaults to ``LOGIN``
 */
'mail_smtpauthtype' => 'LOGIN',

/**
 * This depends on ``mail_smtpauth``. Specify the username for authenticating to
 * the SMTP server.
 *
 * Defaults to ``''`` (empty string)
 */
'mail_smtpname' => '',

/**
 * This depends on ``mail_smtpauth``. Specify the password for authenticating to
 * the SMTP server.
 *
 * Default to ``''`` (empty string)
 */
'mail_smtppassword' => '',

/**
 * Replaces the default mail template layout. This can be utilized if the
 * options to modify the mail texts with the theming app is not enough.
 * The class must extend  ``\OC\Mail\EMailTemplate``
 */
'mail_template_class' => '\OC\Mail\EMailTemplate',

/**
 * Email will be send by default with an HTML and a plain text body. This option
 * allows to only send plain text emails.
 */
'mail_send_plaintext_only' => false,

/**
 * This depends on ``mail_smtpmode``. Array of additional streams options that
 * will be passed to underlying Swift mailer implementation.
 * Defaults to an empty array.
 */
'mail_smtpstreamoptions' => [],

/**
 * Which mode is used for sendmail/qmail: ``smtp`` or ``pipe``.
 *
 * For ``smtp`` the sendmail binary is started with the parameter ``-bs``:
 *   - Use the SMTP protocol on standard input and output.
 *
 * For ``pipe`` the binary is started with the parameters ``-t``:
 *   - Read message from STDIN and extract recipients.
 *
 * Defaults to ``smtp``
 */
'mail_sendmailmode' => 'smtp',

/**
 * Proxy Configurations
 */

/**
 * The automatic hostname detection of Nextcloud can fail in certain reverse
 * proxy and CLI/cron situations. This option allows you to manually override
 * the automatic detection; for example ``www.example.com``, or specify the port
 * ``www.example.com:8080``.
 */
/*'overwritehost' => '', */

/**
 * When generating URLs, Nextcloud attempts to detect whether the server is
 * accessed via ``https`` or ``http``. However, if Nextcloud is behind a proxy
 * and the proxy handles the ``https`` calls, Nextcloud would not know that
 * ``ssl`` is in use, which would result in incorrect URLs being generated.
 * Valid values are ``http`` and ``https``.
 */
'overwriteprotocol' => 'https',

/**
 * Nextcloud attempts to detect the webroot for generating URLs automatically.
 * For example, if ``www.example.com/nextcloud`` is the URL pointing to the
 * Nextcloud instance, the webroot is ``/nextcloud``. When proxies are in use,
 * it may be difficult for Nextcloud to detect this parameter, resulting in
 * invalid URLs.
 */
'overwritewebroot' => '/',

/**
 * This option allows you to define a manual override condition as a regular
 * expression for the remote IP address. For example, defining a range of IP
 * addresses starting with ``10.0.0.`` and ending with 1 to 3:
 * ``^10\.0\.0\.[1-3]$``
 *
 * Defaults to ``''`` (empty string)
 */
'overwritecondaddr' => '10\.12\.201\.[200-250]',

/**
 * Use this configuration parameter to specify the base URL for any URLs which
 * are generated within Nextcloud using any kind of command line tools (cron or
 * occ). The value should contain the full base URL:
 * ``https://www.example.com/nextcloud``
 *
 * Defaults to ``''`` (empty string)
 */
'overwrite.cli.url' => 'https://files.dougandkathy.com/',

/**
 * To have clean URLs without `/index.php` this parameter needs to be configured.
 *
 * This parameter will be written as "RewriteBase" on update and installation of
 * Nextcloud to your `.htaccess` file. While this value is often simply the URL
 * path of the Nextcloud installation it cannot be set automatically properly in
 * every scenario and needs thus some manual configuration.
 *
 * In a standard Apache setup this usually equals the folder that Nextcloud is
 * accessible at. So if Nextcloud is accessible via "https://mycloud.org/nextcloud"
 * the correct value would most likely be "/nextcloud". If Nextcloud is running
 * under "https://mycloud.org/" then it would be "/".
 *
 * Note that the above rule is not valid in every case, as there are some rare setup
 * cases where this may not apply. However, to avoid any update problems this
 * configuration value is explicitly opt-in.
 *
 * After setting this value run `occ maintenance:update:htaccess`. Now, when the
 * following conditions are met Nextcloud URLs won't contain `index.php`:
 *
 * - `mod_rewrite` is installed
 * - `mod_env` is installed
 *
 * Defaults to ``''`` (empty string)
 */
'htaccess.RewriteBase' => '/',

/**
 * For server setups, that don't have `mod_env` enabled or restricted (e.g. suEXEC)
 * this parameter has to be set to true and will assume mod_rewrite.
 *
 * Please check, if `mod_rewrite` is active and functional before setting this
 * parameter and you updated your .htaccess with `occ maintenance:update:htaccess`.
 * Otherwise your nextcloud installation might not be reachable anymore.
 * For example, try accessing resources by leaving out `index.php` in the URL.
 */
'htaccess.IgnoreFrontController' => false,

/**
 * The URL of your proxy server, for example ``proxy.example.com:8081``.
 *
 * Note: Guzzle (the http library used by Nextcloud) is reading the environment
 * variables HTTP_PROXY (only for cli request), HTTPS_PROXY, and NO_PROXY by default.
 *
 * If you configure proxy with Nextcloud any default configuration by Guzzle
 * is overwritten. Make sure to set ``proxyexclude`` accordingly if necessary.
 *
 * Defaults to ``''`` (empty string)
 */
'proxy' => '',

/**
 * The optional authentication for the proxy to use to connect to the internet.
 * The format is: ``username:password``.
 *
 * Defaults to ``''`` (empty string)
 */
'proxyuserpwd' => '',

/**
 * List of host names that should not be proxied to.
 * For example: ``['.mit.edu', 'foo.com']``.
 *
 * Hint: Use something like ``explode(',', getenv('NO_PROXY'))`` to sync this
 * value with the global NO_PROXY option.
 *
 * Defaults to empty array.
 */
'proxyexclude' => [],

/**
 * Deleted Items (trash bin)
 *
 * These parameters control the Deleted files app.
 */

/**
 * If the trash bin app is enabled (default), this setting defines the policy
 * for when files and folders in the trash bin will be permanently deleted.
 * The app allows for two settings, a minimum time for trash bin retention,
 * and a maximum time for trash bin retention.
 * Minimum time is the number of days a file will be kept, after which it
 * may be deleted. Maximum time is the number of days at which it is guaranteed
 * to be deleted.
 * Both minimum and maximum times can be set together to explicitly define
 * file and folder deletion. For migration purposes, this setting is installed
 * initially set to "auto", which is equivalent to the default setting in
 * Nextcloud.
 *
 * Available values:
 *
 * * ``auto``
 *     default setting. keeps files and folders in the trash bin for 30 days
 *     and automatically deletes anytime after that if space is needed (note:
 *     files may not be deleted if space is not needed).
 * * ``D, auto``
 *     keeps files and folders in the trash bin for D+ days, delete anytime if
 *     space needed (note: files may not be deleted if space is not needed)
 * * ``auto, D``
 *     delete all files in the trash bin that are older than D days
 *     automatically, delete other files anytime if space needed
 * * ``D1, D2``
 *     keep files and folders in the trash bin for at least D1 days and
 *     delete when exceeds D2 days
 * * ``disabled``
 *     trash bin auto clean disabled, files and folders will be kept forever
 *
 * Defaults to ``auto``
 */
'trashbin_retention_obligation' => 'auto',


/**
 * File versions
 *
 * These parameters control the Versions app.
 */

/**
 * If the versions app is enabled (default), this setting defines the policy
 * for when versions will be permanently deleted.
 * The app allows for two settings, a minimum time for version retention,
 * and a maximum time for version retention.
 * Minimum time is the number of days a version will be kept, after which it
 * may be deleted. Maximum time is the number of days at which it is guaranteed
 * to be deleted.
 * Both minimum and maximum times can be set together to explicitly define
 * version deletion. For migration purposes, this setting is installed
 * initially set to "auto", which is equivalent to the default setting in
 * Nextcloud.
 *
 * Available values:
 *
 * * ``auto``
 *     default setting. Automatically expire versions according to expire
 *     rules. Please refer to :doc:`../configuration_files/file_versioning` for
 *     more information.
 * * ``D, auto``
 *     keep versions at least for D days, apply expire rules to all versions
 *     that are older than D days
 * * ``auto, D``
 *     delete all versions that are older than D days automatically, delete
 *     other versions according to expire rules
 * * ``D1, D2``
 *     keep versions for at least D1 days and delete when exceeds D2 days
 * * ``disabled``
 *     versions auto clean disabled, versions will be kept forever
 *
 * Defaults to ``auto``
 */
'versions_retention_obligation' => 'auto',

/**
 * Nextcloud Verifications
 *
 * Nextcloud performs several verification checks. There are two options,
 * ``true`` and ``false``.
 */

/**
 * Checks an app before install whether it uses private APIs instead of the
 * proper public APIs. If this is set to true it will only allow to install or
 * enable apps that pass this check.
 *
 * Defaults to ``false``
 */
'appcodechecker' => true,

/**
 * Check if Nextcloud is up-to-date and shows a notification if a new version is
 * available.
 *
 * Defaults to ``true``
 */
'updatechecker' => true,

/**
 * URL that Nextcloud should use to look for updates
 *
 * Defaults to ``https://updates.nextcloud.com/updater_server/``
 */
'updater.server.url' => 'https://updates.nextcloud.com/updater_server/',

/**
 * The channel that Nextcloud should use to look for updates
 *
 * Supported values:
 *   - ``daily``
 *   - ``beta``
 *   - ``stable``
 */
'updater.release.channel' => 'stable',

/**
 * Is Nextcloud connected to the Internet or running in a closed network?
 *
 * Defaults to ``true``
 */
'has_internet_connection' => true,

/**
 * Which domains to request to determine the availability of an Internet
 * connection. If none of these hosts are reachable, the administration panel
 * will show a warning. Set to an empty list to not do any such checks (warning
 * will still be shown).
 *
 * Defaults to the following domains:
 *
 *  - www.nextcloud.com
 *  - www.startpage.com
 *  - www.eff.org
 *  - www.edri.org
 */
'connectivity_check_domains' => [
	'www.nextcloud.com',
	'www.startpage.com',
	'www.eff.org',
	'www.edri.org'
],

/**
 * Allows Nextcloud to verify a working .well-known URL redirects. This is done
 * by attempting to make a request from JS to
 * https://your-domain.com/.well-known/caldav/
 *
 * Defaults to ``true``
 */
'check_for_working_wellknown_setup' => true,

/**
 * This is a crucial security check on Apache servers that should always be set
 * to ``true``. This verifies that the ``.htaccess`` file is writable and works.
 * If it is not, then any options controlled by ``.htaccess``, such as large
 * file uploads, will not work. It also runs checks on the ``data/`` directory,
 * which verifies that it can't be accessed directly through the Web server.
 *
 * Defaults to ``true``
 */
'check_for_working_htaccess' => true,

/**
 * In rare setups (e.g. on Openshift or docker on windows) the permissions check
 * might block the installation while the underlying system offers no means to
 * "correct" the permissions. In this case, set the value to false.
 *
 * In regular cases, if issues with permissions are encountered they should be
 * adjusted accordingly. Changing the flag is discouraged.
 *
 * Defaults to ``true``
 */
'check_data_directory_permissions' => true,

/**
 * In certain environments it is desired to have a read-only configuration file.
 * When this switch is set to ``true`` Nextcloud will not verify whether the
 * configuration is writable. However, it will not be possible to configure
 * all options via the Web interface. Furthermore, when updating Nextcloud
 * it is required to make the configuration file writable again for the update
 * process.
 *
 * Defaults to ``false``
 */
'config_is_read_only' => false,

/**
 * Logging
 */

/**
 * This parameter determines where the Nextcloud logs are sent.
 * ``file``: the logs are written to file ``nextcloud.log`` in the default
 * Nextcloud data directory. The log file can be changed with parameter
 * ``logfile``.
 * ``syslog``: the logs are sent to the system log. This requires a syslog daemon
 * to be active.
 * ``errorlog``: the logs are sent to the PHP ``error_log`` function.
 * ``systemd``: the logs are sent to the Systemd journal. This requires a system
 * that runs Systemd and the Systemd journal. The PHP extension ``systemd``
 * must be installed and active.
 *
 * Defaults to ``file``
 */
'log_type' => 'file',

/**
 * Name of the file to which the Nextcloud logs are written if parameter
 * ``log_type`` is set to ``file``.
 *
 * Defaults to ``[datadirectory]/nextcloud.log``
 */
'logfile' => '/var/log/nextcloud.log',

/**
 * Log file mode for the Nextcloud loggin type in octal notation.
 *
 * Defaults to 0640 (writeable by user, readable by group).
 */
'logfilemode' => 0640,

/**
 * Loglevel to start logging at. Valid values are: 0 = Debug, 1 = Info, 2 =
 * Warning, 3 = Error, and 4 = Fatal. The default value is Warning.
 *
 * Defaults to ``2``
 */
'loglevel' => 2,

/**
 * If you maintain different instances and aggregate the logs, you may want
 * to distinguish between them. ``syslog_tag`` can be set per instance
 * with a unique id. Only available if ``log_type`` is set to ``syslog`` or
 * ``systemd``.
 *
 * The default value is ``Nextcloud``.
 */
'syslog_tag' => 'Nextcloud',

/**
 * Log condition for log level increase based on conditions. Once one of these
 * conditions is met, the required log level is set to debug. This allows to
 * debug specific requests, users or apps
 *
 * Supported conditions:
 *  - ``shared_secret``: if a request parameter with the name `log_secret` is set to
 *                this value the condition is met
 *  - ``users``:  if the current request is done by one of the specified users,
 *                this condition is met
 *  - ``apps``:   if the log message is invoked by one of the specified apps,
 *                this condition is met
 *
 * Defaults to an empty array.
 */
  /*'log.condition' => [
    'shared_secret' => '57b58edb6637fe3059b3595cf9c41b9',
    'users' => ['sample-user'],
    'apps' => ['files'],
  ],
  */
/**
 * This uses PHP.date formatting; see http://php.net/manual/en/function.date.php
 *
 * Defaults to ISO 8601 ``2005-08-15T15:52:01+00:00`` - see \DateTime::ATOM
 * (https://secure.php.net/manual/en/class.datetime.php#datetime.constants.atom)
 */
'logdateformat' => 'F d, Y H:i:s',

/**
 * The timezone for logfiles. You may change this; see
 * http://php.net/manual/en/timezones.php
 *
 * Defaults to ``UTC``
 */
'logtimezone' => 'Europe/Berlin',

/**
 * Append all database queries and parameters to the log file. Use this only for
 * debugging, as your logfile will become huge.
 */
'log_query' => false,

/**
 * Enables log rotation and limits the total size of logfiles. The default is 0,
 * or no rotation. Specify a size in bytes, for example 104857600 (100 megabytes
 * = 100 * 1024 * 1024 bytes). A new logfile is created with a new name when the
 * old logfile reaches your limit. If a rotated log file is already present, it
 * will be overwritten.
 *
 * Defaults to 100 MB
 */
'log_rotate_size' => 100 * 1024 * 1024,


/**
 * Alternate Code Locations
 *
 * Some of the Nextcloud code may be stored in alternate locations.
 */

/**
 * Apps
 *
 * Options for the Apps folder, Apps store, and App code checker.
 */

/**
 * When enabled, admins may install apps from the Nextcloud app store.
 *
 * Defaults to ``true``
 */
'appstoreenabled' => true,

/**
 * Use the ``apps_paths`` parameter to set the location of the Apps directory,
 * which should be scanned for available apps, and where user-specific apps
 * should be installed from the Apps store. The ``path`` defines the absolute
 * file system path to the app folder. The key ``url`` defines the HTTP Web path
 * to that folder, starting from the Nextcloud webroot. The key ``writable``
 * indicates if a Web server can write files to that folder.
 */
'apps_paths' => [
	[
		'path'=> '/var/www/nextcloud/apps',
		'url' => '/apps',
		'writable' => true,
	],
],

/**
 * @see appcodechecker
 */

/**
 * Previews
 *
 * Nextcloud supports previews of image files, the covers of MP3 files, and text
 * files. These options control enabling and disabling previews, and thumbnail
 * size.
 */

/**
 * By default, Nextcloud can generate previews for the following filetypes:
 *
 * - Image files
 * - Covers of MP3 files
 * - Text documents
 *
 * Valid values are ``true``, to enable previews, or
 * ``false``, to disable previews
 *
 * Defaults to ``true``
 */
'enable_previews' => true,
/**
 * The maximum width, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``4096``
 */
'preview_max_x' => 4096,
/**
 * The maximum height, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 *
 * Defaults to ``4096``
 */
'preview_max_y' => 4096,

/**
 * max file size for generating image previews with imagegd (default behavior)
 * If the image is bigger, it'll try other preview generators, but will most
 * likely show the default mimetype icon. Set to -1 for no limit.
 *
 * Defaults to ``50`` megabytes
 */
'preview_max_filesize_image' => 50,

/**
 * custom path for LibreOffice/OpenOffice binary
 *
 *
 * Defaults to ``''`` (empty string)
 */
'preview_libreoffice_path' => '/usr/bin/libreoffice',
/**
 * Use this if LibreOffice/OpenOffice requires additional arguments.
 *
 * Defaults to ``''`` (empty string)
 */
'preview_office_cl_parameters' =>
	' --headless --nologo --nofirststartwizard --invisible --norestore '.
	'--convert-to png --outdir ',

/**
 * Only register providers that have been explicitly enabled
 *
 * The following providers are disabled by default due to performance or privacy
 * concerns:
 *
 *  - OC\Preview\Illustrator
 *  - OC\Preview\Movie
 *  - OC\Preview\MSOffice2003
 *  - OC\Preview\MSOffice2007
 *  - OC\Preview\MSOfficeDoc
 *  - OC\Preview\OpenDocument
 *  - OC\Preview\PDF
 *  - OC\Preview\Photoshop
 *  - OC\Preview\Postscript
 *  - OC\Preview\StarOffice
 *  - OC\Preview\SVG
 *  - OC\Preview\TIFF
 *  - OC\Preview\Font
 *
 * The following providers are not available in Microsoft Windows:
 *
 *  - OC\Preview\Movie
 *  - OC\Preview\MSOfficeDoc
 *  - OC\Preview\MSOffice2003
 *  - OC\Preview\MSOffice2007
 *  - OC\Preview\OpenDocument
 *  - OC\Preview\StarOffice
 *
 * Defaults to the following providers:
 *
 *  - OC\Preview\BMP
 *  - OC\Preview\GIF
 *  - OC\Preview\HEIC
 *  - OC\Preview\JPEG
 *  - OC\Preview\MarkDown
 *  - OC\Preview\MP3
 *  - OC\Preview\PNG
 *  - OC\Preview\TXT
 *  - OC\Preview\XBitmap
 */
'enabledPreviewProviders' => [
	'OC\Preview\PNG',
	'OC\Preview\JPEG',
	'OC\Preview\GIF',
	'OC\Preview\HEIC',
	'OC\Preview\BMP',
	'OC\Preview\XBitmap',
	'OC\Preview\MP3',
	'OC\Preview\TXT',
	'OC\Preview\MarkDown'
],


/**
 * Sort groups in the user settings by name instead of the user count
 *
 * By enabling this the user count beside the group name is disabled as well.
 */
'sort_groups_by_name' => false,

/**
 * Memory caching backend configuration
 *
 * Available cache backends:
 *
 * * ``\OC\Memcache\APCu``       APC user backend
 * * ``\OC\Memcache\ArrayCache`` In-memory array-based backend (not recommended)
 * * ``\OC\Memcache\Memcached``  Memcached backend
 * * ``\OC\Memcache\Redis``      Redis backend
 *
 * Advice on choosing between the various backends:
 *
 * * APCu should be easiest to install. Almost all distributions have packages.
 *   Use this for single user environment for all caches.
 * * Use Redis or Memcached for distributed environments.
 *   For the local cache (you can configure two) take APCu.
 */

/**
 * Memory caching backend for locally stored data
 *
 * * Used for host-specific data, e.g. file paths
 *
 * Defaults to ``none``
 */
'memcache.local' => '\OC\Memcache\redis',

/**
 * Memory caching backend for distributed data
 *
 * * Used for installation-specific data, e.g. database caching
 * * If unset, defaults to the value of memcache.local
 *
 * Defaults to ``none``
 */
'memcache.distributed' => '\OC\Memcache\redis',

/**
 * Connection details for redis to use for memory caching in a single server configuration.
 *
 * For enhanced security it is recommended to configure Redis
 * to require a password. See http://redis.io/topics/security
 * for more information.
 */
'redis' => [
	'host' => $_ENV['REDIS_HOST'], // can also be a unix domain socket: '/tmp/redis.sock'
	'port' => 6379,
	'timeout' => 0.0,
	'password' => $_ENV['REDIS_PASSWORD'], // Optional, if not defined no password will be used.
	'dbindex' => 0, // Optional, if undefined SELECT will not run and will use Redis Server's default DB Index.
],


//
// /**
//  * This example shows how to configure Nextcloud to store all files in a
//  * swift object storage.
//  *
//  * It is important to note that Nextcloud in object store mode will expect
//  * exclusive access to the object store container because it only stores the
//  * binary data for each file. The metadata is currently kept in the local
//  * database for performance reasons.
//  *
//  * WARNING: The current implementation is incompatible with any app that uses
//  * direct file IO and circumvents our virtual filesystem. That includes
//  * Encryption and Gallery. Gallery will store thumbnails directly in the
//  * filesystem and encryption will cause severe overhead because key files need
//  * to be fetched in addition to any requested file.
//  *
//  * One way to test is applying for a trystack account at http://trystack.org/
//  */
// 'objectstore' => [
// 	'class' => 'OC\\Files\\ObjectStore\\Swift',
// 	'arguments' => [
// 		// trystack will use your facebook id as the user name
// 		'username' => 'facebook100000123456789',
// 		// in the trystack dashboard go to user -> settings -> API Password to
// 		// generate a password
// 		'password' => 'Secr3tPaSSWoRdt7',
// 		// must already exist in the objectstore, name can be different
// 		'container' => 'nextcloud',
// 		// prefix to prepend to the fileid, default is 'oid:urn:'
// 		'objectPrefix' => 'oid:urn:',
// 		// create the container if it does not exist. default is false
// 		'autocreate' => true,
// 		// required, dev-/trystack defaults to 'RegionOne'
// 		'region' => 'RegionOne',
// 		// The Identity / Keystone endpoint
// 		'url' => 'http://8.21.28.222:5000/v2.0',
// 		// required on dev-/trystack
// 		'tenantName' => 'facebook100000123456789',
// 		// dev-/trystack uses swift by default, the lib defaults to 'cloudFiles'
// 		// if omitted
// 		'serviceName' => 'swift',
// 		// The Interface / url Type, optional
// 		'urlType' => 'internal'
// 	],
// ],
//
// /**
//  * To use swift V3
//  */
// 'objectstore' => [
// 	'class' => 'OC\\Files\\ObjectStore\\Swift',
// 	'arguments' => [
// 		'autocreate' => true,
// 		'user' => [
// 			'name' => 'swift',
// 			'password' => 'swift',
// 			'domain' => [
// 				'name' => 'default',
// 			],
// 		],
// 		'scope' => [
// 			'project' => [
// 				'name' => 'service',
// 				'domain' => [
// 					'name' => 'default',
// 				],
// 			],
// 		],
// 		'tenantName' => 'service',
// 		'serviceName' => 'swift',
// 		'region' => 'regionOne',
// 		'url' => 'http://yourswifthost:5000/v3',
// 		'bucket' => 'nextcloud',
// 	],
// ],

/**
 * The hashing cost used by hashes generated by Nextcloud
 * Using a higher value requires more time and CPU power to calculate the hashes
 */
'hashingCost' => 10,

/**
 * Blacklist a specific file or files and disallow the upload of files
 * with this name. ``.htaccess`` is blocked by default.
 * WARNING: USE THIS ONLY IF YOU KNOW WHAT YOU ARE DOING.
 *
 * Defaults to ``array('.htaccess')``
 */
'blacklisted_files' => ['.htaccess'],

/**
 * Define a default folder for shared files and folders other than root.
 * Changes to this value will only have effect on new shares.
 *
 * Defaults to ``/``
 */
'share_folder' => '/',

/**
 * If you are applying a theme to Nextcloud, enter the name of the theme here.
 * The default location for themes is ``nextcloud/themes/``.
 *
 * Defaults to the theming app which is shipped since Nextcloud 9
 */
'theme' => '',

/**
 * Specifies how often the local filesystem (the Nextcloud data/ directory, and
 * NFS mounts in data/) is checked for changes made outside Nextcloud. This
 * does not apply to external storages.
 *
 * 0 -> Never check the filesystem for outside changes, provides a performance
 * increase when it's certain that no changes are made directly to the
 * filesystem
 *
 * 1 -> Check each file or folder at most once per request, recommended for
 * general use if outside changes might happen.
 *
 * Defaults to ``0``
 */
'filesystem_check_changes' => 1,
'trusted_proxies' => ['127.0.0.1', 'files.dougandkathy.com', '10.12.201.0/24'],

/**
 * Headers that should be trusted as client IP address in combination with
 * `trusted_proxies`. If the HTTP header looks like 'X-Forwarded-For', then use
 * 'HTTP_X_FORWARDED_FOR' here.
 *
 * If set incorrectly, a client can spoof their IP address as visible to
 * Nextcloud, bypassing access controls and making logs useless!
 *
 * Defaults to ``'HTTP_X_FORWARDED_FOR'``
 */
'forwarded_for_headers' => ['HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR'],

/**
 * max file size for animating gifs on public-sharing-site.
 * If the gif is bigger, it'll show a static preview
 *
 * Value represents the maximum filesize in megabytes. Set to ``-1`` for
 * no limit.
 *
 * Defaults to ``10`` megabytes
 */
'max_filesize_animated_gifs_public_sharing' => 10,


/**
 * Enables transactional file locking.
 * This is enabled by default.
 *
 * Prevents concurrent processes from accessing the same files
 * at the same time. Can help prevent side effects that would
 * be caused by concurrent operations. Mainly relevant for
 * very large installations with many users working with
 * shared files.
 *
 * Defaults to ``true``
 */
'filelocking.enabled' => true,

/**
 * Set the lock's time-to-live in seconds.
 *
 * Any lock older than this will be automatically cleaned up.
 *
 * Defaults to ``60*60`` seconds (1 hour) or the php
 *             max_execution_time, whichever is higher.
 */
'filelocking.ttl' => 60*60,

/**
 * Memory caching backend for file locking
 *
 * Because most memcache backends can clean values without warning using redis
 * is highly recommended to *avoid data loss*.
 *
 * Defaults to ``none``
 */
'memcache.locking' => '\\OC\\Memcache\\Redis',

/**
 * Enable locking debug logging
 *
 * Note that this can lead to a very large volume of log items being written which can lead
 * to performance degradation and large log files on busy instance.
 *
 * Thus enabling this in production for longer periods of time is not recommended
 * or should be used together with the ``log.condition`` setting.
 */
'filelocking.debug' => false,

/**
 * Disable the web based updater
 */
'upgrade.disable-web' => false,

/**
 * Set this Nextcloud instance to debugging mode
 *
 * Only enable this for local development and not in production environments
 * This will disable the minifier and outputs some additional debug information
 *
 * Defaults to ``false``
 */
'debug' => false,

/**
 * Sets the data-fingerprint of the current data served
 *
 * This is a property used by the clients to find out if a backup has been
 * restored on the server. Once a backup is restored run
 * ./occ maintenance:data-fingerprint
 * To set this to a new value.
 *
 * Updating/Deleting this value can make connected clients stall until
 * the user has resolved conflicts.
 *
 * Defaults to ``''`` (empty string)
 */
'data-fingerprint' => '',

/**
 * This entry is just here to show a warning in case somebody copied the sample
 * configuration. DO NOT ADD THIS SWITCH TO YOUR CONFIGURATION!
 *
 * If you, brave person, have read until here be aware that you should not
 * modify *ANY* settings in this file without reading the documentation.
 */
'copied_sample_config' => true,

/**
 * use a custom lookup server to publish user data
 */
'lookup_server' => 'https://lookup.nextcloud.com',

/**
 * set to true if the server is used in a setup based on Nextcloud's Global Scale architecture
 */
'gs.enabled' => false,

/**
 * by default federation is only used internally in a Global Scale setup
 * If you want to allow federation outside of your environment set it to 'global'
 */
'gs.federation' => 'internal',

/**
 * List of incompatible user agents opted out from Same Site Cookie Protection.
 * Some user agents are notorious and don't really properly follow HTTP
 * specifications. For those, have an opt-out.
 *
 * WARNING: only use this if you know what you are doing
 */
'csrf.optout' => [
	'/^WebDAVFS/', // OS X Finder
	'/^Microsoft-WebDAV-MiniRedir/', // Windows webdav drive
],

/**
 * By default there is on public pages a link shown that allows users to
 * learn about the "simple sign up" - see https://nextcloud.com/signup/
 *
 * If this is set to "false" it will not show the link.
 */
'simpleSignUpLink.shown' => true,

/**
 * By default autocompletion is enabled for the login form on Nextcloud's login page.
 * While this is enabled, browsers are allowed to "remember" login names and such.
 * Some companies require it to be disabled to comply with their security policy.
 *
 * Simply set this property to "false", if you want to turn this feature off.
 */

'login_form_autocomplete' => true,
];

