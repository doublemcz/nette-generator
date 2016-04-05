<?php
// source: E:\Sites\projects.localhost\nette-generator\tests/config.neon 

class Container_8875cd652d extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'nette.template',
					'security.user',
					'session.session',
					'console.router',
					'application.1',
					'application.2',
					'application.3',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Templating\Template' => array(array('nette.template')),
			'Nette\Templating\ITemplate' => array(array('nette.template')),
			'Nette\Templating\IFileTemplate' => array(array('nette.template')),
			'Nette\Templating\FileTemplate' => array(array('nette.template')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(
				1 => array('routing.router'),
				0 => array('console.router'),
			),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'IteratorAggregate' => array(1 => array('console.helperSet')),
			'Traversable' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Helper\HelperSet' => array(1 => array('console.helperSet')),
			'Symfony\Component\Console\Application' => array(1 => array('console.application')),
			'Kdyby\Console\Application' => array(1 => array('console.application')),
			'Kdyby\Console\CliRouter' => array(array('console.router')),
			'Symfony\Component\Console\Command\Command' => array(
				1 => array('generator.commands.doctrineForm'),
			),
			'Doublemcz\NetteGenerator\Commands\GenerateFormCommand' => array(
				1 => array('generator.commands.doctrineForm'),
			),
			'Doublemcz\NetteGenerator\Generators\BaseGenerator' => array(
				1 => array(
					'generator.generators.doctrineFormGenerator',
				),
			),
			'Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator' => array(
				1 => array(
					'generator.generators.doctrineFormGenerator',
				),
			),
			'Nette\Application\UI\Presenter' => array(array('application.1')),
			'Nette\Application\UI\Control' => array(array('application.1')),
			'Nette\Application\UI\PresenterComponent' => array(array('application.1')),
			'Nette\ComponentModel\Container' => array(array('application.1')),
			'Nette\ComponentModel\Component' => array(array('application.1')),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
				),
			),
			'ArrayAccess' => array(array('application.1')),
			'Nette\Application\UI\IStatePersistent' => array(array('application.1')),
			'Nette\Application\UI\ISignalReceiver' => array(array('application.1')),
			'Nette\ComponentModel\IComponent' => array(array('application.1')),
			'Nette\ComponentModel\IContainer' => array(array('application.1')),
			'Nette\Application\UI\IRenderable' => array(array('application.1')),
			'KdybyModule\CliPresenter' => array(array('application.1')),
			'NetteModule\ErrorPresenter' => array(array('application.2')),
			'NetteModule\MicroPresenter' => array(array('application.3')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'application.1' => 'KdybyModule\CliPresenter',
			'application.2' => 'NetteModule\ErrorPresenter',
			'application.3' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'console.router' => 'Kdyby\Console\CliRouter',
			'container' => 'Nette\DI\Container',
			'generator.commands.doctrineForm' => 'Doublemcz\NetteGenerator\Commands\GenerateFormCommand',
			'generator.generators.doctrineFormGenerator' => 'Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'nette.template' => 'Nette\Templating\FileTemplate',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'console.application' => FALSE,
				'console.helperSet' => FALSE,
				'console.router' => FALSE,
			),
			'nette.presenter' => array(
				'application.1' => 'KdybyModule\CliPresenter',
				'application.2' => 'NetteModule\ErrorPresenter',
				'application.3' => 'NetteModule\MicroPresenter',
			),
			'kdyby.console.command' => array(
				'generator.commands.doctrineForm' => TRUE,
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'E:\Sites\projects.localhost\nette-generator\tests',
			'wwwDir' => 'E:\Sites\projects.localhost\nette-generator\tests',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => TRUE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'E:\Sites\projects.localhost\nette-generator\tests/temp',
		));
	}


	/**
	 * @return KdybyModule\CliPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Nette:Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('application.presenterFactory')));
		$self = $this; $service->onError[] = function ($app, $e) use ($self) {
			$app->errorPresenter = FALSE;
			$app->onShutdown[] = function () { exit(254); };
			$self->getService('console.application')->handleException($e);
		};
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'E:\Sites\projects.localhost\nette-generator\tests/temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		if (method_exists($service, 'setMapping')) { $service->setMapping(array('Kdyby' => 'KdybyModule\*\*Presenter')); } elseif (property_exists($service, 'mapping')) { $service->mapping['Kdyby'] = 'KdybyModule\*\*Presenter'; };
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('E:\Sites\projects.localhost\nette-generator\tests/temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('E:\Sites\projects.localhost\nette-generator\tests/temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kdyby\Console\Application
	 */
	public function createServiceConsole__application()
	{
		$service = new Kdyby\Console\Application('Nette Framework', '2.3.9');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		$service->add($this->getService('generator.commands.doctrineForm'));
		return $service;
	}


	/**
	 * @return Symfony\Component\Console\Helper\HelperSet
	 */
	public function createServiceConsole__helperSet()
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Symfony\Component\Console\Helper\ProgressHelper(FALSE));
		$service->set(new Symfony\Component\Console\Helper\DialogHelper(FALSE));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		return $service;
	}


	/**
	 * @return Kdyby\Console\CliRouter
	 */
	public function createServiceConsole__router()
	{
		$service = new Kdyby\Console\CliRouter($this);
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Doublemcz\NetteGenerator\Commands\GenerateFormCommand
	 */
	public function createServiceGenerator__commands__doctrineForm()
	{
		$service = new Doublemcz\NetteGenerator\Commands\GenerateFormCommand;
		return $service;
	}


	/**
	 * @return Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator
	 */
	public function createServiceGenerator__generators__doctrineFormGenerator()
	{
		$service = new Doublemcz\NetteGenerator\Generators\DoctrineFormGenerator(array(
			'componentsDir' => 'E:\Sites\projects.localhost\nette-generator\src\DI/../../app/Components',
			'templateDir' => 'E:\Sites\projects.localhost\nette-generator\src\DI/../Templates/DoctrineForm',
		));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_8875cd652d_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('E:\Sites\projects.localhost\nette-generator\tests/temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		trigger_error('Service nette.template is deprecated.', 16384);
		$service->registerFilter($this->getService('latte.latteFactory')->create());
		$service->registerHelperLoader('Nette\Templating\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = new Nette\Application\Routers\RouteList;
		Kdyby\Console\CliRouter::prependTo($service, $this->getService('console.router'));
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
	}

}



final class Container_8875cd652d_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_8875cd652d $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('E:\Sites\projects.localhost\nette-generator\tests/temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}
