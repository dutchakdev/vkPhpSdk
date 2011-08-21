<?php
/**
 * IVkPhpSdk interface file.
 * 
 * This source file is subject to the New BSD License
 * that is bundled with this package in the file license.txt.
 *
 * @author Andrey Geonya <manufacturer.software@gmail.com>
 * @link https://github.com/AndreyGeonya/vkPhpSdk
 * @copyright Copyright &copy; 2011-2012 Andrey Geonya
 * @license http://www.opensource.org/licenses/bsd-license.php
 */

/**
 * IVkPhpSdk interface.
 * Provides access to the Vkontakte Platform.
 *
 * @see http://vkontakte.ru/developers.php
 * @author Andrey Geonya <manufacturer.software@gmail.com>
 */
interface IVkPhpSdk
{
	/**
	 * Constructor.
	 * 
	 * @param string $accessToken with access token we can make calls to secure API
	 */
	public function __construct($accessToken = null);

	/**
	 * Set OAuth 2.0 access token. 
	 * 
	 * @param string $accessToken with access token we can make calls to secure API
	 */
	public function setAccessToken($accessToken);
	
	/**
	 * Get user id.
	 * 
	 * @return string
	 */
	public function getUserId();

	/**
	 * Makes a call to VK API.
	 *
	 * @param string $method The API method name
	 * @param array $params The API call parameters
	 * 
	 * @return array decoded response
	 * 
	 * @throws VkApiException
	 */
	public function api($method, array $params = null);
}