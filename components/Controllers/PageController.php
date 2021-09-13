<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{
    public function marketingDigitalA() {
        $this->renderViewport([
            'jogo_mkt_digital/formulario',
            'jogo_mkt_digital/jogo_content',
            'jogo_mkt_digital/about_gabriel'
        ]);
    }

    public function marketingDigitalB() {
        $this->renderViewport([
            'jogo_mkt_digital/formulario',
            'jogo_mkt_digital/about_gabriel'
        ]);
    }

    public function obrigado() {
        $this->renderViewport(['profissoes_do_marketing/obrigado']);
    }

    public function profissoesDoMarketing() {
        $this->renderViewport([
            'profissoes_do_marketing/template',
            'profissoes_do_marketing/formulario',
        ]);
    }
}
