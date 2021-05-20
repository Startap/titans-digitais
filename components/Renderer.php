<?php

namespace Components;

use Components\Application;

/**
 * Renderer class has the responsibility of manage output to user.
 * Header, footer, partials and required string replacements should be
 * done here. It's like a View wrapper, more primitive.
 *
 * @package SimpleFramework
 * @author André Paul Grandsire
 * @version $Revision: 0.1 $
 */
class Renderer 
{
    private $application;

    public function __construct(Application $app)
    {
        $this->application = $app;
    }

    /**
     * Render the header based on views/header and replace the variables of template
     * with their respective .env value. Here the first skeleton of our html is made.
     */
    public function drawHeader()
    {
        $headerFile = \file_get_contents($this->application->getAppPath('views/layout/header'));

        $headerFile  = str_replace(
            $this->application->titleConstants['appTitle'],
            $this->application->getTitle(),
            $headerFile
        );
        $headerFile  = str_replace(
            $this->application->titleConstants['appDescription'],
            $this->application->getDescription(),
            $headerFile
        );
        $headerFile  = str_replace(
            $this->application->titleConstants['appKeywords'],
            $this->application->getKeywords(),
            $headerFile
        );
        
        return $headerFile;
    }

    /**
     * After drawing all partials required to display our webpage, every controller method
     * should call drawFooter to finish rendering the hmlt body and close all tags.
     */
    public function drawFooter()
    {
        $scriptsTemplate = '';
        $footerFile = \file_get_contents($this->application->getAppPath('views/layout/footer'));

        if (isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] == 'production') {
            
            $scriptsTemplate = file_get_contents($this->application->getAppPath('views/layout/scripts'));

            if (strpos($_SERVER['REQUEST_URI'], 'obrigado') !== false) {
                $fbTag = <<<pixelConversion
                    <script>
                        fbq('trackCustom', '%paginaOrigin')
                        gtag('event', 'conversion', {'send_to': 'AW-981525115/euVpCJv--pMCEPvEg9QD'});
                    </script>
                pixelConversion;

                $facebookConversion = str_replace(
                    '%paginaOrigin', 
                    $_GET['pagina'] === 'jogo_marketing_form_a' ? 'pagina-com-video' : 'pagina-sem-video', 
                    $fbTag
                );
                
                $scriptsTemplate .= $facebookConversion;
            }
        }

        $footerFile = str_replace('%scripts_template%', $scriptsTemplate, $footerFile);
        $footerFile = str_replace('%currentYear%', date('Y'), $footerFile);
        return $footerFile;
    }

}