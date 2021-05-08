<?php

namespace Components;

/**
 * Application it's the main core of our website. After the index.php
 * reads the .env file content, the first object created it's and Application
 * instance. It's in the Application class that we bootstrap our website.
 *
 * @package SimpleFramework
 * @author André Paul Grandsire
 * @version $Revision: 0.1 $
 */
class Application
{
    
    /**
     * Stateless application settings
     */
    private $appTitle;
    private $appDescription;
    private $appAuthor;
    private $appKeywords;

    /**
     * Application constants to replace everywhere
     */
    public $titleConstants = [
        'appTitle' => '%APP_TITLE%',
        'appLanguage' => '%APP_LANGUAGE%',
        'appDescription' => '%APP_DESCRIPTION%',
        'appKeywords' => '%APP_KEYWORDS%',
        'appAuthor' => '%APP_AUTHOR%',
    ];

    /**
     * When the Application class is instantiated
     * (which means everytime a request is made) we'll
     * retrieve the routes file first to register all
     * routes that application will serve
     */
    public function __construct()
    {
        session_start();
        require self::getAppPath('routes');
    }

    /**
     * Loads document information and metatags from
     * .env variable. It will feed the drawHeader function
     * in renderer, when called encapsulated inside
     * $_SESSION['bootstrap'], containing this instance
     */
    public function bootstrapApplication()
    {
        $this->setTitle($this->env('TITLE'));
        $this->setDescription($this->env('DESCRIPTION'));
        $this->setKeywords($this->env('TAGS'));

        $_SESSION['bootstrap'] = $this;
    }

    /**
     * Get any variable from the $_ENV superglobal variable, accepting
     * an string as parameter and returning it's environment variable value
     * @param String $variable
     * @return mixed
     */
    public function env(String $variable)
    {
        return $_ENV[$variable];
    }

    /**
     * Call Route::execute and invokes the process
     * that will trigger actions based on requested uri,
     * such as renderer to pages and their respective
     * Controller methods or closures.
     */
    public function processRequestedUri()
    {
        $router = new Router();
        $router->processUriRequested($_SERVER['REQUEST_URI']);
    }

    /**
     * Getters and setters from application
     * @param String $filename
     * @return string
     */
    public static function getAppPath(String $filename): string
    {
        return __DIR__ . '/../' . $filename . '.php';
    }

    public function setTitle(String $title)
    {
        $this->appTitle = $title;
    }

    public function setDescription(String $description)
    {
        $this->appDescription = $description;
    }

    public function setKeywords(String $keywords)
    {
        $this->appKeywords = explode(',', $keywords);
    }

    public function getTitle()
    {
        return $this->appTitle;
    }

    public function getDescription()
    {
        return $this->appDescription;
    }

    public function getKeywords(): string
    {
        return implode($this->appKeywords, ',');
    }
}