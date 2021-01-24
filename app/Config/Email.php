<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{

	/**
	 * @var string
	 */
	public $fromEmail = "no-reply@dokan.cc";

	/**
	 * @var string
	 */
	public $fromName = "Candle Dashboard";

	/**
	 * @var string
	 */
	public $recipients;

	/**
	 * The "user agent"
	 *
	 * @var string
	 */
	public $userAgent = 'Candle Dashboard';

	/**
	 * The mail sending protocol: mail, sendmail, smtp
	 *
	 * @var string
	 */
	public $protocol = 'smtp';

	/**
	 * The server path to Sendmail.
	 *
	 * @var string
	 */
	public $mailPath = '/usr/sbin/sendmail';

	/**
	 * SMTP Server Address
	 *
	 * @var string
	 */
	public $SMTPHost = "dokan.cc";

	/**
	 * SMTP Username
	 *
	 * @var string
	 */
	public $SMTPUser = "no-reply@dokan.cc";

	/**
	 * SMTP Password
	 *
	 * @var string
	 */
	public $SMTPPass = "EpvkK1QnDcs9";

	/**
	 * SMTP Port
	 *
	 * @var integer
	 */
	public $SMTPPort = 587;

	/**
	 * SMTP Timeout (in seconds)
	 *
	 * @var integer
	 */
	public $SMTPTimeout = 5;

	/**
	 * Enable persistent SMTP connections
	 *
	 * @var boolean
	 */
	public $SMTPKeepAlive = false;

	/**
	 * SMTP Encryption. Either tls or ssl
	 *
	 * @var string
	 */
	public $SMTPCrypto = 'tls';

	/**
	 * Enable word-wrap
	 *
	 * @var boolean
	 */
	public $wordWrap = true;

	/**
	 * Character count to wrap at
	 *
	 * @var integer
	 */
	public $wrapChars = 76;

	/**
	 * Type of mail, either 'text' or 'html'
	 *
	 * @var string
	 */
	public $mailType = 'html';

	/**
	 * Character set (utf-8, iso-8859-1, etc.)
	 *
	 * @var string
	 */
	public $charset = 'UTF-8';

	/**
	 * Whether to validate the email address
	 *
	 * @var boolean
	 */
	public $validate = false;

	/**
	 * Email Priority. 1 = highest. 5 = lowest. 3 = normal
	 *
	 * @var integer
	 */
	public $priority = 3;

	/**
	 * Newline character. (Use “\r\n” to comply with RFC 822)
	 *
	 * @var string
	 */
	public $CRLF = "\r\n";

	/**
	 * Newline character. (Use “\r\n” to comply with RFC 822)
	 *
	 * @var string
	 */
	public $newline = "\r\n";

	/**
	 * Enable BCC Batch Mode.
	 *
	 * @var boolean
	 */
	public $BCCBatchMode = false;

	/**
	 * Number of emails in each BCC batch
	 *
	 * @var integer
	 */
	public $BCCBatchSize = 200;

	/**
	 * Enable notify message from server
	 *
	 * @var boolean
	 */
	public $DSN = false;

}
