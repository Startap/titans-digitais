<section class="flex-column flex-justify-center padding-tb-20">
    <div id="logo-container" class="margin-tb-20">
        <img src="/assets/images/logo.svg" alt="Logomarca Titãs Digitas">
    </div>

    <div id="digital-titans-container" class="flex-column flex-justify-center">
        <h1>Torne-se um dos <span class="text-color-accent text-weight-900">Titãs Digitais</span> e comece a prosperar
            aprendendo a gerar valor através da internet</h1>
        <div class="divisor"></div>
        <h2>Siga os passos abaixo para confirmar sua inscrição!</h2>
    </div>
</section>

<img src="/assets/images/divisor.png" alt="">

<section class="flex-column flex-justify-center padding-tb-20">
    <?php
    $thankYouItens = [
        [
            'text' => "A essa hora você já deve ter recebido o e-mail de confirmação.<br><br>Lá dentro tem um link para o meu canal do Telegram.",
            'image' => 'email.svg',
            'alt-image' => 'Ícone de e-mail em branco e fundo verde',
        ],
        [
            'text' => "É importante você entrar para aproveitar 100% do conteúdo! <br><br>Lá é onde eu vou avisar sobre as aulas, enviar dicas e, o mais importante: <b>garantir que você participe de todas as aulas gratuitas</b>.",
            'image' => 'teacher.svg',
            'alt-image' => 'Ícone de professor com quadro ao fundo, em fundo verde',
        ],
        [
            'text' => 'Então entra lá agora para aproveitar ao máximo as aulas. Eu vou te ajudar a tornar-se um dos Titãs Digitais e começar a prosperar sendo um gerador de valor através da internet.',
            'image' => 'telegram.svg',
            'alt-image' => 'Ícone de aplicação Telegram',
        ],
    ];
    $htmlTag = <<<HTMLTag
        <div class="thankyou-row">
            <div class="thankyou-item-container"><p>%text%</p></div>
            <div class="thankyou-item-container">
                <img src="/assets/images/icons/%icon%" alt="%alt-image%">
            </div>
        </div>
    HTMLTag;
    foreach ($thankYouItens as $row) {
        $currentTag = str_replace('%text%', $row['text'], $htmlTag);
        $currentTag = str_replace('%icon%', $row['image'], $currentTag);
        $currentTag = str_replace('%alt-image%', $row['alt-image'], $currentTag);
        echo $currentTag;
    }
    ?>

</section>

<div id="thankyou-call-to-action">
    <button class="button-call-to-action">ENTRAR NO GRUPO DO TELEGRAM</button>
</div>
