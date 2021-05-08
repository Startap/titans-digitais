<?php

namespace Components\Controllers;

use Components\Application;

/**
 * ApplicationController class it's the main wrapper for any
 * Controller developed, since this is the base class to extends
 * another.
 *
 * Here we have the main functions to draw the webpage and
 * deal with the Renderer object, leaving the controller only
 * with the logic.
 *
 * @package SimpleFramework
 * @author André Paul Grandsire
 * @version $Revision: 0.1 $
 */
class ApplicationController
{
    private $renderer;

    public function __construct()
    {
        $this->renderer = new \Components\Renderer($_SESSION['bootstrap']);
    }

    /**
     * Encapsulates the drawHeader renderer to be called from the Controller
     * For now, it's what we have and we can enhance this feature later
     */
    private function callDrawHeader()
    {
        echo $this->renderer->drawHeader();
    }

    /**
     * Encapsulates the drawFooter renderer to be called from the Controller
     * For now, it's what we have and we can enhance this feature later.
     */
    private function callDrawFooter()
    {
        echo $this->renderer->drawFooter();
    }

    /**
     * Since our application it's built in modules, we can just import it
     * here, calling this function from the inherited instance of this Controller
     */
    private function callDrawPartial(String $partialName)
    {
        require Application::getAppPath('views/' . $partialName);
    }

    /**
     * We use this function to draw an entire template from
     * the Controller's method. It's the way found to hook header
     * and footer before drawing any partials. It accepts an array of
     * strings that contains names of partials to load.
     * @param array $partials
     */
    public function renderViewport(array $partials)
    {
        $this->callDrawHeader();
        
        foreach ($partials as $partial) {
            $this->callDrawPartial($partial);
        }
        
        $this->callDrawFooter();
    }

    public function render404NotFound()
    {
        $this->callDrawHeader();
        $this->callDrawPartial('layout/404-not-found');
        $this->callDrawFooter();
    }
}
