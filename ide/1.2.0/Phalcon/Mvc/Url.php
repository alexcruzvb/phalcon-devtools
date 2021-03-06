<?php 

namespace Phalcon\Mvc {

	/**
	 * Phalcon\Mvc\Url
	 *
	 * This components aids in the generation of: URIs, URLs and Paths
	 *
	 *<code>
	 *
	 * //Generate a URL appending the URI to the base URI
	 * echo $url->get('products/edit/1');
	 *
	 * //Generate a URL for a predefined route
	 * echo $url->get(array('for' => 'blog-post', 'title' => 'some-cool-stuff', 'year' => '2012'));
	 *
	 *</code>
	 */
	
	class Url implements \Phalcon\Mvc\UrlInterface, \Phalcon\DI\InjectionAwareInterface {

		protected $_dependencyInjector;

		protected $_baseUri;

		protected $_staticBaseUri;

		protected $_basePath;

		protected $_router;

		/**
		 * Sets the DependencyInjector container
		 *
		 * @param \Phalcon\DiInterface $dependencyInjector
		 */
		public function setDI($dependencyInjector){ }


		/**
		 * Returns the DependencyInjector container
		 *
		 * @return \Phalcon\DiInterface
		 */
		public function getDI(){ }


		/**
		 * Sets a prefix for all the URIs to be generated
		 *
		 *<code>
		 *	$url->setBaseUri('/invo/');
		 *	$url->setBaseUri('/invo/index.php/');
		 *</code>
		 *
		 * @param string $baseUri
		 */
		public function setBaseUri($baseUri){ }


		/**
		 * Sets a prefix for all static URLs generated
		 *
		 *<code>
		 *	$url->setStaticBaseUri('/invo/');
		 *</code>
		 *
		 * @param string $staticBaseUri
		 */
		public function setStaticBaseUri($staticBaseUri){ }


		/**
		 * Returns the prefix for all the generated urls. By default /
		 *
		 * @return string
		 */
		public function getBaseUri(){ }


		/**
		 * Sets a base path for all the generated paths
		 *
		 *<code>
		 *	$url->setBasePath('/var/www/htdocs/');
		 *</code>
		 *
		 * @param string $basePath
		 */
		public function setBasePath($basePath){ }


		/**
		 * Returns the base path
		 *
		 * @return string
		 */
		public function getBasePath(){ }


		/**
		 * Generates a URL
		 *
		 * @param string|array $uri
		 * @return string
		 */
		public function get($uri=null){ }


		/**
		 * Generates a URL for a static resource
		 *
		 * @param string|array $uri
		 * @return string
		 */
		public function getStatic($uri=null){ }


		/**
		 * Generates a local path
		 *
		 * @param string $path
		 * @return string
		 */
		public function path($path=null){ }

	}
}
